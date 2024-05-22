<?php
include_once("Conexion.php");

class Controller_user extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM usuarios");
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
    }
    
    function insert($user)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("INSERT INTO usuarios(nombre, apellido, cedula, cargo, pass) VALUES(:nombre, :apellido, :cedula, :cargo, :pass);");

        $query->bindParam(":nombre", $user["nombre"]);
        $query->bindParam(":apellido", $user["apellido"]);
        $query->bindParam(":cedula", $user["cedula"]);
        $query->bindParam(":cargo", $user["cargo"]);
        $query->bindParam(":pass", $user["pass"]);

        $query->execute();
    }
    function update($user)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("UPDATE usuarios SET nombre = :nombre, apellido = :apellido, cedula = :cedula, cargo = :cargo, pass = :pass WHERE id_usuarios = :id");
        $query->bindParam(":nombre", $user["nombre"]);
        $query->bindParam(":apellido", $user["apellido"]);
        $query->bindParam(":cedula", $user["cedula"]);
        $query->bindParam(":cargo", $user["cargo"]);
        $query->bindParam(":pass", $user["pass"]);
        $query->bindParam(":id", $user["cod_user"]);

        $query->execute();
    }

    function delete($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("DELETE FROM usuarios WHERE id_usuarios = :id");
        $query->bindParam(":id", $id);
        $query->execute();
    }

    function loadUser($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM usuarios WHERE id_usuarios = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $usuarios = $query->fetch(PDO::FETCH_LAZY);

        return $usuarios;
    }
}