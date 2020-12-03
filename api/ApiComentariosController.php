<?php

require_once "./Model/ComentariosModel.php";
require_once "./api/ApiController.php";

class ApiComentariosController extends ApiController{

    function __construct(){
        parent::__construct();  
        $this->model = new ComentariosModel();
        $this->view = new ApiView();
    }

    public function GetComentarios($params = null){
        $id = $params[":ID"];
        $comentarios = $this->model->GetComentariosPorProducto($id);
        if (!empty($comentarios)) {
            $this->view->response($comentarios, 200); 
        }
    }

    /*public function GetComentario($params = null){
        $id = $params[":ID"];
        $comentario = $this->model->GetComentario($id);

        if (!empty($comentario))
            $this->view->response($comentario, 200);
        else
        $this->view->response("El comentario con el id=$id no existe", 404);  
    }*/

    public function DeleteComentario($params = null){
        $id = $params[":ID"];
        $comentario = $this->model->DeleteComentario($id);

        if($comentario > 0)
            $this->view->response("El comentario fue eliminada con exito", 200);
        else
            $this->view->response("El comentario con el id=$id no existe", 404);
 
    }

    public function InsertComentario($params = null){
        $body = $this->GetData();
        $comentario = $this->model->InsertComentario($body->texto, $body->valoracion, $body->id_rueda);
        
        if (!empty($comentario)) // verifica si la tarea existe
            $this->view->response( $this->model->GetComentario($comentario), 201);
        else
            $this->view->response("El comentario no se pudo agregar", 404);
    }

    /*public function UpdateComentario($params = null){
        $id = $params[':ID'];
        $body = $this->GetData();
        $comentario = $this->model->GetComentario($id);

        if (empty($comentario)) {
            $this->view->response("El comentario con el id=$id no existe", 404);
        }else {
            $result = $this->model->UpdateComentario($body->medida, $body->modelo, $body->dureza,
                $body->precio, $body->id_marca, $id);
            if($result > 0) //si modifico alguna linea
                $this->view->response($this->model->GetComentario($id), 200);
            else
                $this->view->response("El comentario con el id=$id no fue actualizada", 204);
        }
    }*/
}