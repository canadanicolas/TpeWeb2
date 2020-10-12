<?php

class RuedasModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_rueda2;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getRueda(){
        $sentencia = $this->db->prepare("SELECT * FROM rueda"); // selecciona todo de tabla rueda
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function InsertRueda($id, $medida, $modelo, $dureza, $precio, $id_marca){
        $sentencia = $this->db->prepare("INSERT INTO rueda(id_rueda, medida, modelo, dureza, precio, id_marca) VALUES (?,?,?,?,?,?)");
        $sentencia->execute(array($id, $medida, $modelo, $dureza, $precio, $id_marca));
    }

    function DeleteRueda($id_rueda){
        $sentencia = $this->db->prepare("DELETE FROM rueda WHERE id_rueda=?");
        $sentencia->execute(array($id_rueda));
    }

    function UpdateRueda($medida, $modelo, $dureza, $precio, $id_marca, $id_rueda){
        $sentencia = $this->db->prepare('UPDATE rueda SET medida=?, modelo=?, dureza=?, precio=?, id_marca=? WHERE id_rueda=?');
        $sentencia->execute(array($medida, $modelo, $dureza, $precio, $id_marca, $id_rueda));
    }

    function getRuedaDetalle($id_rueda){
        $sentencia = $this->db->prepare('SELECT * FROM rueda WHERE id_rueda=?');
        $sentencia->execute(array($id_rueda));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    

}
?>