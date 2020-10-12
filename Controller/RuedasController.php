<?php

require_once "./View/RuedasView.php";
require_once "./Model/RuedasModel.php";
require_once "./Model/MarcasModel.php";

class RuedasController {

    private $view;
    private $model;
    private $modelMarca;
    private $logged;

    function __construct(){
        $this->view = new RuedasView();
        $this->model = new RuedasModel();
        $this->modelMarca = new MarcasModel();

    }

    private function mandarAlLogin(){
        session_start();
        if(!isset($_SESSION["nombre"])){ // si no esta logeado lo manda al login
            header("Location: ". LOGIN);
            die(); // para que no siga la ejecucion del showhome por ej.
        }
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

    function PaginaRuedas(){
        $ruedas = $this->model->getRueda();
        $marcas = $this->modelMarca->getMarca();
        $logged = $this->checkLoggedIn();
        $this->view->renderPaginaRuedas($ruedas, $marcas, $logged);
    }

    function InsertRueda(){
        $this->mandarAlLogin();
        $this->model->InsertRueda($_POST["agregar_rueda"], $_POST["agregar_modelo"], $_POST["agregar_medida"]
        , $_POST["agregar_dureza"], $_POST["agregar_precio"], $_POST["agregar_id_marca"]);
        $this->view->ShowRuedasLocation();
    }

    function DeleteRueda($params = null){
        $this->mandarAlLogin();
        $id_rueda = $params[':ID'];
        $this->model->DeleteRueda($id_rueda);
        $this->view->ShowRuedasLocation();
    }

    function UpdateRueda($params = null){
        $this->mandarAlLogin();
        $rueda_id = $params[':ID'];
        $this->model->UpdateRueda($_POST["agregar_modelo"], $_POST["agregar_medida"]
        , $_POST["agregar_dureza"], $_POST["agregar_precio"], $_POST["agregar_id_marca"], $rueda_id);
        $this->view->ShowRuedasLocation();
    }

    function DetailRueda($params=null){
        $id_rueda = $params[":ID"];
        $marcas = $this->modelMarca->getMarca();
        $ruedas = $this->model->getRuedaDetalle($id_rueda);
        $logged = $this->checkLoggedIn();
        $this->view->renderDetailRuedas($ruedas, $marcas, $logged);
    }
    
    function RuedaPorMarca($params=null){
        $id = $params[":ID"];
        $ruedas = $this->model->getRueda();
        $marcas = $this->modelMarca->getMarca();
        $logged = $this->checkLoggedIn();
        $this->view->renderRuedaPorMarca($id, $ruedas, $marcas, $logged);
    }
}