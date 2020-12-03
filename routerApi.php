<?php
    require_once 'routerClass.php';
    require_once 'api/ApiComentariosController.php';

    $r = new Router();

    //tabla de ruteo de la API REST
    //$r->addRoute("comentarios", "GET", "ApiComentariosController", "GetComentarios");
    $r->addRoute("comentarios/:ID", "GET", "ApiComentariosController", "GetComentarios");
    $r->addRoute("comentarios/:ID", "DELETE", "ApiComentariosController", "DeleteComentario");
    $r->addRoute('comentarios', 'POST', 'ApiComentariosController', 'InsertComentario');
    //$r->addRoute('comentarios/:ID', 'PUT', 'ApiComentariosController', 'UpdateComentario');

    //run
    $r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); //resource para que quede mas prolijo pero es lo mismo 