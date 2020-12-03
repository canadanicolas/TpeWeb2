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

    private function MandarAlLogin(){
        session_start();
        if(!isset($_SESSION["nombre"])){ // si no esta logeado lo manda al login
            header("Location: ". LOGIN);
            die();// para que no siga la ejecucion del showhome por ej.
        }elseif ($_SESSION["admin"] == 0){
            header("Location: ".BASE_URL."home"); //si es un user entrando a donde no debe lo manda al home
            die();
        }
    }
    
    private function CheckLoggedIn(){
        if(!isset($_SESSION["admin"])){
            $logged = "false";
        } elseif ($_SESSION["admin"] == 1){
            $logged = "admin";
        } else {
            $logged = "user";
        }
        return $logged;
    }
    
    function InsertMarca(){
        $this->MandarAlLogin();
        $this->model->InsertMarca($_POST["agregar_marca"], $_POST["agregar_nombre"], $_POST["agregar_pais"]);
        $this->view->ShowRuedasLocation();
    }

    function DeleteMarca($params=null){ //para que soporte null como parametro
        $this->MandarAlLogin();
        $id_marca = $params[":ID"];
        $this->model->DeleteMarca($id_marca);
        $this->view->ShowRuedasLocation();
    }

    function DetailMarca($params=null){
        $this->MandarAlLogin();
        $id_marca = $params[":ID"];
        $marcas = $this->model->GetMarcaUpdate($id_marca);
        $logged = $this->CheckLoggedIn();
        $this->view->RenderDetailMarcas($marcas, $logged);
    }

    function UpdateMarca($params = null){
        $this->MandarAlLogin();
        $id_marca = $params[':ID'];
        $this->model->UpdateMarca($_POST["agregar_nombre"], $_POST["agregar_pais"], $id_marca);
        $this->view->ShowRuedasLocation();
    }

}