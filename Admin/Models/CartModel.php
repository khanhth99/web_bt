<?php
    trait CartModel{
        //lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function listOrder($from, $pageSize){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
            $query = $conn->query("select * from tbl_order
            inner join tbl_customer on tbl_order.customer_id = tbl_customer.customer_id;
            order by order_id desc limit $from, $pageSize");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//tinh tong so luong ban ghi
		public function totalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select order_id from tbl_order");
			//tra ve tong so luong ban ghi
			return $query->rowCount();
        }
        public function listProduct($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
            $query = $conn->query("select * from tbl_order_detail OD
             inner join tbl_product P on OD.product_id=P.id
              where OD.order_id=$id");
			//tra ve tong so luong ban ghi
			return $query->fetchAll();
        }
        public function sentOrder($id){
            $conn = Connection::getInstance();
			//thuc thi truy van
            $conn->query("UPDATE tbl_order set status=1
              where order_id=$id");
        }
    }
?>