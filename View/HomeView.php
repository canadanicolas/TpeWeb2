<?php
   
require_once "./libs/smarty/Smarty.class.php";

class HomeView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

        // asignar el logged en la view no controller
        //$this->smarty->assign('logged', $logged);
    }

    function RenderHome($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/home.tpl");
    }

    function RenderRulemanes($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/rulemanes.tpl");
    }

    function RenderTrucks($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/trucks.tpl");
    }

    function RenderDecks($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/decks.tpl");
    }

    function RenderContact($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/contact.tpl");
    }
    
    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }    

}