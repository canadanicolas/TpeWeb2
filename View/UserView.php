<?php
   
require_once "./libs/smarty/Smarty.class.php";

class UserView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function ShowLogin($mensaje = ""){

        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display("templates/login.tpl");
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }  
}