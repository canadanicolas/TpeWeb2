<?php

class ComentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_rueda2;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function GetComentariosPorProducto($id){
        $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_rueda=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    /*function GetComentario($id_comentario){
        $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id_comentario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }*/


    function InsertComentario($texto, $valoracion, $id_rueda){
        $sentencia = $this->db->prepare("INSERT INTO comentario(texto, valoracion, id_rueda) VALUES (?,?,?)");
        $sentencia->execute(array($texto, $valoracion, $id_rueda));
        return $this->db->lastInsertId();
    }

    function DeleteComentario($id_comentario){
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id_comentario));
        return $sentencia->rowCount();
    }

   /* function UpdateComentario($medida, $modelo, $dureza, $precio, $id_marca, $id){
        $sentencia = $this->db->prepare('UPDATE comentario SET medida=?, modelo=?, dureza=?, precio=?, id_marca=? WHERE id_comentario=?');
        $sentencia->execute(array($medida, $modelo, $dureza, $precio, $id_marca, $id));
        return $sentencia->rowCount();
    }

    function GetComentarioDetalle($id_comentario){
        $sentencia = $this->db->prepare('SELECT * FROM comentario WHERE id_comentario=?');
        $sentencia->execute(array($id_comentario));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }*/

}
?>