<?php

require_once "./View/HomeView.php";

class HomeController {
    
    private $view;
    private $logged;

    function __construct(){
        $this->view = new HomeView();
    }

    private function checkLoggedIn(){
        session_start();
        if(isset($_SESSION["nombre"])){
            $logged = true;
        } else {
            $logged = false;
        }
        return $logged;
    }

    function Home(){ 
        $logged = $this->checkLoggedIn();
        $this->view->renderHome($logged);
    }

    function PaginaRulemanes(){
        $logged = $this->checkLoggedIn();
        $this->view->renderRulemanes($logged);
    }

    function PaginaTrucks(){ 
        $logged = $this->checkLoggedIn();
        $this->view->renderTrucks($logged);
    }

    function PaginaDecks(){ 
        $logged = $this->checkLoggedIn();
        $this->view->renderDecks($logged);
    }

    function PaginaContact(){ 
        $logged = $this->checkLoggedIn();
        $this->view->renderContact($logged);
    }

}