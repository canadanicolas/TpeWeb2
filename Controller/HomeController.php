<?php

require_once "./View/HomeView.php";

class HomeController {
    
    private $view;
    private $logged;

    function __construct(){
        $this->view = new HomeView();
    }

    private function CheckLoggedIn(){
        session_start();
        if(!isset($_SESSION["admin"])){
            $logged = "false";
        } elseif ($_SESSION["admin"] == 1){
            $logged = "admin";
        } else {
            $logged = "user";
        }
        return $logged;
    }

    function Home(){ 
        $logged = $this->CheckLoggedIn();
        $this->view->RenderHome($logged);
    }

    function PaginaRulemanes(){
        $logged = $this->CheckLoggedIn();
        $this->view->RenderRulemanes($logged);
    }

    function PaginaTrucks(){ 
        $logged = $this->CheckLoggedIn();
        $this->view->RenderTrucks($logged);
    }

    function PaginaDecks(){ 
        $logged = $this->CheckLoggedIn();
        $this->view->RenderDecks($logged);
    }
    
    function PaginaContact(){ 
        $logged = $this->CheckLoggedIn();
        $this->view->RenderContact($logged);
    }

}