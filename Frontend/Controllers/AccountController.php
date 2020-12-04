<?php
include "Frontend/Models/AccountModel.php";
class AccountController extends Controller
{
    use AccountModel;
    public  function index()
    {
        $this->renderHTML("Frontend/Views/AccountView.php");
    }

    //khi an nut submit
    public function doLogin()
    {
        //goi ham lay 1 ban ghi tu class model
        $record = $this->modelFetch();
        if (isset($record->email)) {
            //gan session email
            $_SESSION["email"] = $record->email;
        }
        if (isset($record->name)) {
            $_SESSION["name"] = $record->name;
        }
        //quay tro lai trang index.php?controller=Admin
        header("location:index.php?area=Admin");
    }
}
