<?php

class UserModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_rueda2;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function GetUsers(){
        $sentencia = $this->db->prepare("SELECT * FROM user");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE usuario=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function InsertUser($user, $pass){
        $sentencia = $this->db->prepare("INSERT INTO user(usuario, password) VALUES (?,?)");
        $sentencia->execute(array($user, $pass));
    }

    function UpdateUser($id_user){
        $sentencia = $this->db->prepare('UPDATE user SET admin=1 WHERE id_user=?');
        $sentencia->execute(array($id_user));
    }

    function UpdateAdmin($id_user){
        $sentencia = $this->db->prepare('UPDATE user SET admin=0 WHERE id_user=?');
        $sentencia->execute(array($id_user));
    }

    function DeleteUser($id_user){
        $sentencia = $this->db->prepare("DELETE FROM user WHERE id_user=?");
        $sentencia->execute(array($id_user));
    }
}