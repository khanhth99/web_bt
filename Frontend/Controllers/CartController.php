
<?php
include "Frontend/Models/CartModel.php";
class CartController extends Controller{
    use CartModel;
    //ham khoi tao neu gio hang chua ton tai
    public function __construct()
    {
        if(isset($_SESSION["cart"])==false){
            $_SESSION["cart"] = array();
        }
    }
    //hien thi gio hang
    public function index(){
        
        $this->renderHTML("Frontend/Views/CartView.php");
    }
    //thme san pham vao gio hang -> them phan tu vao sesson
    public function add(){
        $id = isset($_GET["id"]) && is_numeric($_GET["id"])?$_GET["id"]:0;
        // goi ham carAdd
        $this->cartAdd($id);
        header("location:cart");
    }
    //xoa tung phan tu trong gio hang
    public function delete(){
        $id = isset($_GET["id"]) && is_numeric($_GET["id"])?$_GET["id"]:0;
        $this->cartDelete($id);
        header("location:cart");
    }
    public function destroy(){
      
        $this->cartDestroy();
        header("location:cart");
    }
    //upadate gio hang
    public function update(){
        //duyet cac phan tu trong session array
        foreach($_SESSION["cart"] as $product){
            $qty = "product_".$product["id"];
            $number = $_POST[$qty];
            //goi ham update de update lai phan tu
            $this->cartUpdate($product["id"],$number);
        }
        header("location:cart");
    }
    //thanh toan
    public function checkOut(){
        $this->renderHTML("Frontend/Views/CheckOutView.php");
    }
    public function account(){
        $this->renderHTML("Frontend/Views/AccountView.php");
    }

    //khi an nut thanh toan
    public function doCheckOut(){
        // goi ham cartCheckout() dể luu gia tri vao csdl
        $this->cartCheckOut();
        //xoa gio hang
        $this->cartDestroy();
        header("location:index.php");
    }
    
}
