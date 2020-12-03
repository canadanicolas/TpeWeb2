<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";

class UserController {

    private $view;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();

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

    private function mandarAlLoginSoloAdmins(){
        session_start();
        if($_SESSION["admin"] == 0){
            $this->view->ShowHomeLocation();
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

    private function CheckUserRol(){
        if($_SESSION["admin"] == 1){
            $admin = true;
        } else {
            $admin = false;
        }
        return $admin;
    }

    function PaginaLogin(){
        $logged = $this->CheckLoggedIn();
        $this->view->ShowLogin($logged);
    }

    function Login(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if (isset($user)){
            $userDb = $this->model->GetUser($user);
            if (isset($userDb) && $userDb){ // boolean necesario porque si no existe devuelve false en vez de null
                //existe el user en la db
                if(password_verify($pass, $userDb->password)){
                    session_start();
                    $_SESSION["nombre"] = $userDb->usuario;
                    $_SESSION["admin"] = $userDb->admin;
                    $this->view->ShowHomeLocation();
                }else{
                    $this->view->ShowLogin("La contraseña ingresada es incorrecta");
                }
            }else {
                // no existe el user
                $this->view->ShowLogin("El usuario ingresado es incorrecto o no existe");
            }
        }
    }

    function PaginaRegistracion(){ 
        $this->view->RenderRegistracion();
    }

    function Registrar(){
        $hash = password_hash($_POST["input_pass"], PASSWORD_DEFAULT);
        $this->model->InsertUser($_POST["input_user"], $hash);
        $this->Login();
        $this->view->ShowHomeLocation();
    }

    function Logout(){
        session_start();
        session_destroy();
        $this->view->ShowHomeLocation();
    }

    function PaginaUsers(){
        $this->mandarAlLoginSoloAdmins();
        $users = $this->model->GetUsers();
        $logged = $this->CheckLoggedIn();
        $this->view->RenderPaginaUsers($users, $logged);
    }
    
    function SetUserToAdmin($params = null){
        $this->mandarAlLoginSoloAdmins();
        $id_user = $params[':ID'];
        $this->model->UpdateUser($id_user);
        $this->view->ShowUsersLocation();
    }

    function SetAdminToUser($params = null){
        $this->mandarAlLoginSoloAdmins();
        $id_user = $params[':ID'];
        $this->model->UpdateAdmin($id_user);
        $this->view->ShowUsersLocation();
    }

    function DeleteUser($params = null){
        $this->MandarAlLogin();
        $id_user = $params[':ID'];
        $this->model->DeleteUser($id_user);
        $this->view->ShowUsersLocation();
    }

}