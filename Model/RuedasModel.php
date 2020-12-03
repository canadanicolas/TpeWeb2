<?php

class RuedasModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_rueda2;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function GetRuedas(){
        $sentencia = $this->db->prepare("SELECT * FROM rueda"); // selecciona todo de tabla rueda
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetRueda($id_rueda){
        $sentencia = $this->db->prepare("SELECT * FROM rueda WHERE id_rueda=?");
        $sentencia->execute(array($id_rueda));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }


    function InsertRueda($imagen, $medida, $modelo, $dureza, $precio, $id_marca){
        $sentencia = $this->db->prepare("INSERT INTO rueda(imagen, medida, modelo, dureza, precio, id_marca) VALUES (?,?,?,?,?,?)");
        $sentencia->execute(array($imagen, $medida, $modelo, $dureza, $precio, $id_marca));
        return $this->db->lastInsertId();
    }

    function DeleteRueda($id_rueda){
        $sentencia = $this->db->prepare("DELETE FROM rueda WHERE id_rueda=?");
        $sentencia->execute(array($id_rueda));
        return $sentencia->rowCount();
    }

    function UpdateRueda($imagen, $medida, $modelo, $dureza, $precio, $id_marca, $id){
        $sentencia = $this->db->prepare('UPDATE rueda SET imagen=?, medida=?, modelo=?, dureza=?, precio=?, id_marca=? WHERE id_rueda=?');
        $sentencia->execute(array($imagen, $medida, $modelo, $dureza, $precio, $id_marca, $id));
        return $sentencia->rowCount();
    }

    function GetRuedaDetalle($id_rueda){
        $sentencia = $this->db->prepare('SELECT * FROM rueda WHERE id_rueda=?');
        $sentencia->execute(array($id_rueda));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}
?>