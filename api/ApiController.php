<?php 

require_once './api/ApiComentariosView.php';

abstract class ApiController {
    protected $model; // lo instancia el hijo
    protected $view;

    private $data; 

    public function __construct() {
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input"); //si mandan data luego lo codifico a json abajo
    }

    function GetData(){ 
        return json_decode($this->data);  // para convertir la data de string a json
    }  
}


