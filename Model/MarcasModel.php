<?php

class MarcasModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_rueda2;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getMarca(){
        $sentencia = $this->db->prepare("SELECT * FROM marca"); // selecciona todo de tabla marca
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function InsertMarca($id, $nombre, $pais){
        $sentencia = $this->db->prepare("INSERT INTO marca(id_marca, nombre, pais_origen) VALUES (?,?,?)");
        $sentencia->execute(array($id, $nombre, $pais));
    }
    function DeleteMarca($id_marca){
        $sentencia = $this->db->prepare("DELETE FROM marca WHERE id_marca=?");
        $sentencia->execute(array($id_marca)); // $id_marca es el numero de id_marca en la bd
    }   

    function getMarcaUpdate($id_marca){
        $sentencia = $this->db->prepare('SELECT * FROM marca WHERE id_marca=?');
        $sentencia->execute(array($id_marca)); 
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

        
    function UpdateMarca($nombre, $pais_origen, $id_marca){
        $sentencia = $this->db->prepare('UPDATE marca SET nombre=?, pais_origen=? WHERE id_marca=?');
        $sentencia->execute(array($nombre, $pais_origen, $id_marca));

    }

}