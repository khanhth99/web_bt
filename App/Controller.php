<?php 
 	//Controller su dung de dieu phoi view
 	class Controller{
 		//khai bao bien $fileLayout de luu duong dan cua file template
 		public $fileLayout = NULL;
 		//khai bao bien $view de luu du lieu cua view trong MVC
 		public $view = NULL;
 		public function renderHTML($fileName, $data = NULL){
 			//neu $data khong bang null thi extract du lieu
 			if($data != NULL)
 				extract($data);
 			//neu ton tai duong dan $fileName thi include no
 			//---
			//doc noi dung cua file $fileName cua view
			if(file_exists($fileName)){				
				//---
				//doc noi dung cua duong dan tai bien $fileName
				ob_start();		
				include $fileName;		
				$content = ob_get_contents();
				ob_get_clean();
				//gan du lieu vao bien $view
				$this->view = $content;
				//neu duong dan tai bien $fileLayout co ton tai thi xuat template ra, neu khong thi chi xuat view trong MVC
				if($this->fileLayout != NULL && file_exists($this->fileLayout))
					include $this->fileLayout;
				else
					echo $this->view;
				//---
			}
 		}
 		//ham xac thuc dang nhap
 		public function authentication(){
 			if($_SESSION["email_admin"] == NULL)
 				header("location:index.php?area=Admin&controller=Login");
		 }
		 
		 // biên tieng viet có dau thanh khong dau
		 function removeUnicode ($str){
			$unicode = array(
				'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
				'd'=>'đ',
				'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
				'i'=>'í|ì|ỉ|ĩ|ị',
				'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
				'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
				'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
				'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
				'D'=>'Đ',
				'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
				'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
				'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
				'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
				'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			
			);
			
		   foreach($unicode as $nonUnicode=>$uni){
				$str = preg_replace("/($uni)/i", $nonUnicode, $str);
		   }
		   $str = str_replace(",", "", $str);
		   $str = str_replace(".", "", $str);       
		   $str = str_replace(" ", "-", $str);
		   $str = str_replace("?", "", $str);
		   $str = strtolower($str);
			return $str.".html";
		}
 	}
 ?>