<?php
include "Frontend/Models/SearchModel.php";
class SearchController  extends Controller{
    use SearchModel;
    public function index(){
        $pageSize = 7;
        $totalRecord = $this->totalRecord();//ham trong model
        //tinh so trang
        $numPage = ceil($totalRecord/$pageSize);
        $p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
        $from = $p * $pageSize;
        $data = $this->searchAll($from,$pageSize);
        $search_cc = isset($_GET["search"])?$_GET["search"]: "";
        //goi view, truyen du lieu ra view
        $this->renderHTML("Frontend/Views/SearchView.php",array("data"=>$data,"numPage"=>$numPage,"search"=>$search_cc));
    }
}
?>