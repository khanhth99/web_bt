<?php
class ContactController extends Controller{
    public function index(){
        $this->renderHTML("Frontend/Views/ContactView.php");
    }
}
?>