<?php
   
require_once "./libs/smarty/Smarty.class.php";

class MarcasView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    
    function RenderDetailMarcas($marcas, $logged){

        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/updateMarca.tpl");
    }

    function ShowRuedasLocation(){
        header("Location: ".BASE_URL."ruedas");
    }
}