<?php
   
require_once "./libs/smarty/Smarty.class.php";

class HomeView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function renderHome($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/home.tpl");
    }

    function renderRulemanes($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/rulemanes.tpl");
    }

    function renderTrucks($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/trucks.tpl");
    }

    function renderDecks($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/decks.tpl");
    }

    function renderContact($logged){
        $this->smarty->assign('logged', $logged);
        $this->smarty->display("templates/contact.tpl");
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }    

}