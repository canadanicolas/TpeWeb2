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
    private function mandarAlLogin(){
        session_start();
        if(!isset($_SESSION["nombre"])){ // si no esta logeado lo manda al login
            header("Location: ". LOGIN);
            die(); // para que no siga la ejecucion del showhome por ej.
        }
        //siempre que use $_SESSION necesito el session_start(); arriba si no, no anda
        //si es admin se guarda en el $_SESSION 
        //como saber si cada user es admin o no? un campo en la db
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

    function PaginaLogin(){
        $this->view->ShowLogin();
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

    function Logout(){
        session_start();
        session_destroy();
        $this->view->ShowHomeLocation();
    }

}