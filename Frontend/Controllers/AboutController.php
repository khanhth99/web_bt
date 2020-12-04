<?php
class AboutController extends Controller{
    public function index(){
        $this->renderHTML("Frontend/Views/AboutView.php");
    }
}
?>