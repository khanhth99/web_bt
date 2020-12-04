<?php
include "Assets/Frontend/PHPMailer-master/src/PHPMailer.php";
include "Assets/Frontend/PHPMailer-master/src/Exception.php";
include "Assets/Frontend/PHPMailer-master/src/OAuth.php";
include "Assets/Frontend/PHPMailer-master/src/POP3.php";
include "Assets/Frontend/PHPMailer-master/src/SMTP.php";
use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
trait CartModel
{
	
	public function cartAdd($id)
	{
		if (isset($_SESSION['cart'][$id])) {
			//nếu đã có sp trong giỏ hàng thì số lượng lên 1
			$_SESSION['cart'][$id]['number']++;
		} else {
			//lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
			//$product = db::get_one("select * from tbl_product where id=$id");
			//---
			//PDO
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where id=:id");
			$query->execute(array("id" => $id));
			$query->setFetchMode(PDO::FETCH_OBJ);
			$product = $query->fetch();
			//---

			$_SESSION['cart'][$id] = array(
				'id' => $id,
				'category_id' => $product->category_id,
				'name' => $product->name,
				'img1' => $product->img1,
				'number' => 1,
				'price' => $product->price
			);
		}
	}
	/**
	 * Cập nhật số lượng sản phẩm
	 * @param int
	 * @param int
	 */
	public function cartUpdate($id, $number)
	{
		if ($number == 0) {
			//xóa sp ra khỏi giỏ hàng
			unset($_SESSION['cart'][$id]);
		} else {
			$_SESSION['cart'][$id]['number'] = $number;
		}
	}
	/**
	 * Xóa sản phẩm ra khỏi giỏ hàng
	 * @param int
	 */
	public function cartDelete($id)
	{
		unset($_SESSION['cart'][$id]);
	}
	/**
	 * Tổng giá trị giỏ hàng
	 */
	public function cartTotal()
	{
		$total = 0;
		foreach ($_SESSION['cart'] as $product) {
			$total += $product['price'] * $product['number'];
		}
		return $total;
	}
	/**
	 * Số sản phẩm có trong giỏ hàng
	 */
	public function cartNumber()
	{
		$number = 0;
		foreach ($_SESSION['cart'] as $product) {
			$number += $product['number'];
		}
		return $number;
	}
	/**
	 * Danh sách sản phẩm trong giỏ hàng
	 */
	public function cartList()
	{
		return $_SESSION['cart'];
	}
	/**
	 * Xóa giỏ hàng
	 */
	public function cartDestroy()
	{
		$_SESSION['cart'] = array();
	}
	//=============
	//checkout
	public function cartCheckOut()
	{
		$fullname = $_POST["fullname"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$phone = $_POST["phone"];
		//---
		$conn = Connection::getInstance();
		//---
		//insert ban ghi vao tbl_customer, lay customer_id vua moi insert
		$query = $conn->prepare("insert into tbl_customer set fullname=:fullname, email=:email, address=:address,phone=:phone");
		$query->execute(array("fullname" => $fullname, "email" => $email, "address" => $address, "phone" => $phone));
		//lay id vua moi insert
		$customer_id = $conn->lastInsertId();
		//---
		//---
		//insert ban ghi vao tbl_order, lay order_id vua moi insert
		$query = $conn->prepare("insert into tbl_order set customer_id=:customer_id, create_at=now()");
		$query->execute(array("customer_id" => $customer_id));
		//lay id vua moi insert
		$order_id = $conn->lastInsertId();
		//---
		//duyet cac ban ghi trong session array de insert vao tbl_order_detail
		foreach ($_SESSION["cart"] as $product) {
			$query = $conn->prepare("insert into tbl_order_detail set order_id=:order_id, product_id=:product_id, price=:price, number=:number");
			$query->execute(array("order_id" => $order_id, "product_id" => $product["id"], "price" => $product["price"], "number" => $product["number"]));
		}

		//-------------




		$str_body = '';
		$str_body .= '
<p>
    <b>Khách hàng:</b> ' . $fullname . '<br>
    <b>Điện thoại:</b> ' . $phone . '<br>
    <b>Địa chỉ:</b> ' . $address . '<br>
</p>
';

		$str_body .= '
<table border="1" cellspacing="0" cellpadding="10" bordercolor="#305eb3" width="100%">
    <tr bgcolor="#305eb3">
        <td width="70%"><b><font color="#FFFFFF">Sản phẩm</font></b></td>
        <td width="10%"><b><font color="#FFFFFF">Số lượng</font></b></td>
        <td width="20%"><b><font color="#FFFFFF">Tổng tiền</font></b></td>
    </tr>';
		foreach ($_SESSION["cart"] as $product) :
			$str_body .= '
    <tr>
        <td width="70%">' . $product['name'] . '</td>
        <td width="10%">' . $product['number'] . '</td>
        <td width="20%">' . number_format($this->cartTotal()) . ' đ</td>
    </tr>      
    ';
		endforeach;

		$str_body .= '
    <tr>
        <td colspan="2" width="70%"></td>
        <td width="20%"><b><font color="#FF0000">' . number_format($this->cartTotal()) . ' đ</font></b></td>
    </tr>
</table>	
';

		$str_body .= '
<p>
    Cám ơn quý khách đã mua hàng tại Shop của chúng tôi, bộ phận giao hàng sẽ liên hệ với quý khách để xác nhận sau 5 phút kể từ khi đặt hàng thành công và chuyển hàng đến quý khách chậm nhất sau 24 tiếng.
</p>
';

		//goi thu vien
		header('location:home');
		$mail = new PHPMailer(true);                              // Passing 'true' enables exceptions
		try {
			//Server settings
			$mail->SMTPDebug = 2;                                 // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'testmail1179@gmail.com';                 // SMTP username
			$mail->Password = 'khanhth99';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, 'ssl' also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			//Recipients
			$mail->CharSet = 'UTF-8';
			$mail->setFrom('testmail1179@gmail.com', 'Huy Phạm');                // Gửi mail tới Mail Server
			$mail->addAddress($email);               // Gửi mail tới mail người nhận
			//$mail->addReplyTo('ceo.khanh@gmail.com', 'Information');
			//$mail->addCC('huy15011999@gmail.com');
			//$mail->addBCC('bcc@example.com');

			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Xác nhận mua hàng từ HUYPHAM SHOP';
			$mail->Body    = $str_body;
			$mail->AltBody = 'Mô tả đơn hàng';

			$mail->send();
			
		} catch (Exception $e) {
			echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
		//-------------
		//xoa gio hang
		unset($_SESSION["cart"]);
	}
	//=============
}
