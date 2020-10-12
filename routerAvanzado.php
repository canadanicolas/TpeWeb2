<?php
    
    require_once 'Controller/RuedasController.php';
    require_once 'Controller/MarcasController.php';
    require_once 'Controller/HomeController.php';
    require_once 'Controller/UserController.php';
    require_once 'routerClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    
    $r = new Router();

    //Rutas
    $r->addRoute("home", "GET", "HomeController", "Home");
    $r->addRoute("ruedas", "GET", "RuedasController", "PaginaRuedas");
    $r->addRoute("rulemanes", "GET", "HomeController", "PaginaRulemanes");
    $r->addRoute("trucks", "GET", "HomeController", "PaginaTrucks");
    $r->addRoute("decks", "GET", "HomeController", "PaginaDecks");
    $r->addRoute("contact", "GET", "HomeController", "PaginaContact");
    $r->addRoute("login", "GET", "UserController", "PaginaLogin");
    $r->addRoute("logout", "GET", "UserController", "Logout");

    //Acciones
    $r->addRoute("ruedas/insert", "POST", "RuedasController", "InsertRueda"); 
    $r->addRoute("ruedas/delete/:ID", "GET", "RuedasController", "DeleteRueda"); //:ID es el parametro que le pasas
    $r->addRoute("ruedas/detail/:ID", "GET", "RuedasController", "DetailRueda");
    $r->addRoute("ruedas/update/:ID", "GET", "RuedasController", "DetailRueda"); 
    $r->addRoute("ruedas/update/confirm/:ID", "POST", "RuedasController", "UpdateRueda");
    $r->addRoute("ruedas/filter/:ID", "GET", "RuedasController", "RuedaPorMarca");
    $r->addRoute("marca/insert", "POST", "MarcasController", "InsertMarca");
    $r->addRoute("marca/delete/:ID", "GET", "MarcasController", "DeleteMarca");
    $r->addRoute("marca/update/:ID", "GET", "MarcasController", "DetailMarca");
    $r->addRoute("marca/update/confirm/:ID", "POST", "MarcasController", "UpdateMarca");
    $r->addRoute("login", "POST", "UserController", "Login");

    //Ruta por defecto.
    $r->setDefaultRoute("HomeController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
    
    
    /* 
    -los $logged de los controller
    -$modelMarca en ruedas controller
    
    */
?>

