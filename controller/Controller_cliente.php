<?php
include_once("Conexion.php");

class Controller_cliente extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM clientes ");
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
    }
    
    function insert($cliente)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("INSERT INTO clientes(nombre, apellido, cedula, direccion, telefono, correo) VALUES(:nombre, :apellido, :cedula, :direccion, :telefono, :correo);");

        $query->bindParam(":nombre", $cliente["nombre"]);
        $query->bindParam(":apellido", $cliente["apellido"]);
        $query->bindParam(":cedula", $cliente["cedula"]);
        $query->bindParam(":direccion", $cliente["direccion"]);
        $query->bindParam(":telefono", $cliente["telefono"]);
        $query->bindParam(":correo", $cliente["correo"]);

        $query->execute();
    }
    function update($cliente)
    {

        $conect = $this->getConnect();
        $query = $conect->prepare(" UPDATE clientes SET nombre = :nombre, apellido = :apellido, cedula = :cedula, direccion = :direccion, telefono = :telefono, correo = :correo WHERE id_cliente = :id");
        $query->bindParam(":nombre", $cliente["nombre"]);
        $query->bindParam(":apellido", $cliente["apellido"]);
        $query->bindParam(":cedula", $cliente["cedula"]);
        $query->bindParam(":direccion", $cliente["direccion"]);
        $query->bindParam(":telefono", $cliente["telefono"]);
        $query->bindParam(":correo", $cliente["correo"]);
        $query->bindParam(":id", $cliente["cod_cliente"]);

        $query->execute();
    }

    function delete($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("DELETE FROM clientes WHERE id_cliente = :id");
        $query->bindParam(":id", $id);
        $query->execute();
    }

    function loadCliente($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM clientes WHERE id_cliente = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $usuarios = $query->fetch(PDO::FETCH_LAZY);

        return $usuarios;
    }
}