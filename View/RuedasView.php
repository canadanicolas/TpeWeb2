<?php
   
require_once "./libs/smarty/Smarty.class.php";

class RuedasView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    
    function RenderPaginaRuedas($ruedas, $marcas, $logged) {
        $this->smarty->assign('ruedas', $ruedas);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/ruedas.tpl");
        
    }

    function RenderDetailRueda($ruedas, $marcas, $logged){
        $this->smarty->assign('ruedas', $ruedas);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/detailRueda.tpl");
    }

    function RenderUpdateRueda($ruedas, $marcas, $logged){
        $this->smarty->assign('ruedas', $ruedas);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/updateRueda.tpl");
    }

    function RenderRuedaPorMarca($id, $ruedas, $marcas, $logged){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('ruedas', $ruedas);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/listaPorMarca.tpl");
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }    

    function ShowRuedasLocation(){
        header("Location: ".BASE_URL."ruedas");
    }

    function ShowRuedasCsr() {
        $smarty = new Smarty();
        $smarty->assign('titulo_s', "Lista de tareas utilizando CSR");
        $smarty->display('templates/tasks_csr.tpl'); // muestro el template 
    }


}
?>