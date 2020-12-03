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

    private function MandarAlLogin(){
        session_start();
        if(!isset($_SESSION["admin"])){ // si no esta logeado lo manda al login
            header("Location: ". LOGIN);
            die(); // para que no siga la ejecucion del showhome por ej.
        }elseif ($_SESSION["admin"] == 0){
            header("Location: ".BASE_URL."home"); //si es un user entrando a donde no debe lo manda al home
            die();
        }
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

    function PaginaRuedas(){
        $ruedas = $this->model->GetRuedas();
        $marcas = $this->modelMarca->GetMarca();
        $logged = $this->CheckLoggedIn();
        $this->view->RenderPaginaRuedas($ruedas, $marcas, $logged);
    }

    function InsertRueda(){
        $this->MandarAlLogin();
        $this->model->InsertRueda($_POST["agregar_imagen"], $_POST["agregar_modelo"], $_POST["agregar_medida"], 
            $_POST["agregar_dureza"], $_POST["agregar_precio"], $_POST["agregar_id_marca"]);
        $this->view->ShowRuedasLocation();
    }

    function DeleteRueda($params = null){
        $this->MandarAlLogin();
        $id_rueda = $params[':ID'];
        $this->model->DeleteRueda($id_rueda);
        $this->view->ShowRuedasLocation();
    }

    function RenderUpdateRueda($params=null){
        $id_rueda = $params[":ID"];
        $marca = $this->modelMarca->GetMarca();
        $rueda = $this->model->GetRuedaDetalle($id_rueda);
        $logged = $this->checkLoggedIn();
        $this->view->renderUpdateRueda($rueda, $marca, $logged);
    }

    function UpdateRueda($params = null){
        $this->MandarAlLogin();
        $rueda_id = $params[':ID'];
        $this->model->UpdateRueda($_POST["agregar_imagen"], $_POST["agregar_modelo"], $_POST["agregar_medida"]
        , $_POST["agregar_dureza"], $_POST["agregar_precio"], $_POST["agregar_id_marca"], $rueda_id);
        $this->view->ShowRuedasLocation();
    }

    function DetailRueda($params=null){
        $id_rueda = $params[":ID"];
        $marca = $this->modelMarca->GetMarca();
        $rueda = $this->model->GetRuedaDetalle($id_rueda);
        $logged = $this->checkLoggedIn();
        $this->view->renderDetailRueda($rueda, $marca, $logged);
    }
    
    function RuedaPorMarca($params=null){
        $id = $params[":ID"];
        $ruedas = $this->model->GetRuedas();
        $marcas = $this->modelMarca->GetMarca();
        $logged = $this->CheckLoggedIn();
        $this->view->RenderRuedaPorMarca($id, $ruedas, $marcas, $logged);
    }

    function RuedasCsr($params = null) {
        $this->view->ShowRuedasCsr();
    }

}