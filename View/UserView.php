<?php
   
require_once "./libs/smarty/Smarty.class.php";

class UserView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function ShowLogin($logged, $mensaje = ""){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/login.tpl");
    }

    function RenderPaginaUsers($users, $logged) {
        $this->smarty->assign('users', $users);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/listaUsuarios.tpl");
        
    }

    function RenderRegistracion(){
        $this->smarty->display("templates/registracion.tpl");
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }  

    function ShowUsersLocation(){
        header("Location: ".BASE_URL."usuarios");
    }
}