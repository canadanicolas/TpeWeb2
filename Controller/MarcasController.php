<?php

require_once "./View/MarcasView.php";
require_once "./Model/MarcasModel.php";
require_once "./Model/RuedasModel.php";

class MarcasController {
    private $view;
    private $model;
    private $modelRuedas;
    private $logged;

    function __construct(){
        $this->view = new MarcasView();
        $this->model = new MarcasModel();
        $this->modelRuedas = new RuedasModel();
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

    function InsertMarca(){
        $this->mandarAlLogin();
        $this->model->InsertMarca($_POST["agregar_marca"], $_POST["agregar_nombre"], $_POST["agregar_pais"]);
        $this->view->ShowRuedasLocation();
    }

    function DeleteMarca($params=null){ //para que soporte null como parametro
        $this->mandarAlLogin();
        $id_marca = $params[":ID"];
        $this->model->DeleteMarca($id_marca);
        $this->view->ShowRuedasLocation();
    }

    function DetailMarca($params=null){
        $this->mandarAlLogin();
        $id_marca = $params[":ID"];
        $marcas = $this->model->getMarcaUpdate($id_marca);
        $ruedas = $this->modelRuedas->getRueda();
        $logged = $this->checkLoggedIn();
        $this->view->renderDetailMarcas($ruedas, $marcas, $logged);
    }

    function UpdateMarca($params = null){
        $this->mandarAlLogin();
        $id_marca = $params[':ID'];
        $this->model->UpdateMarca($_POST["agregar_nombre"], $_POST["agregar_pais"], $id_marca);
        $this->view->ShowRuedasLocation();
    }

}