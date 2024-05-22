<?php
include_once("Conexion.php");

class Controller_prestamo extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM prestamos");
        $query->execute();
        $prestamos = $query->fetchAll(PDO::FETCH_ASSOC);

        return $prestamos;
    }
    
    function insert($prestamo)
    {
        
        $conect = $this->getConnect();
        $query = $conect->prepare("INSERT INTO prestamos(monto_prestamo, tasa_interes, fecha_inicio, plazo_mes, estado_prestamo, id_cliente) VALUES(:monto, :tasa, :fecha, :plazo, :estado, :id);");

        $query->bindParam(":monto", $prestamo["monto_prestamo"]);
        $query->bindParam(":tasa", $prestamo["tasa_interes"]);
        $query->bindParam(":fecha", $prestamo["fecha_inicio"]);
        $query->bindParam(":plazo", $prestamo["plazo_mes"]);
        $query->bindParam(":estado", $prestamo["estado_prestamo"]);
        $query->bindParam(":id", $prestamo["id_cliente"]);

        $query->execute();
    }
    function update($prestamo)
    {
        $conect = $this->getConnect();
        $query = $conect->prepare("UPDATE prestamos SET monto_prestamo = :monto, tasa_interes = :tasa, fecha_inicio = :fecha, plazo_mes = :plazo, estado_prestamo = :estado, id_cliente = :id WHERE id_prestamo = :id_p");

        $query->bindParam(":monto", $prestamo["monto_prestamo"]);
        $query->bindParam(":tasa", $prestamo["tasa_interes"]);
        $query->bindParam(":fecha", $prestamo["fecha_inicio"]);
        $query->bindParam(":plazo", $prestamo["plazo_mes"]);
        $query->bindParam(":estado", $prestamo["estado_prestamo"]);
        $query->bindParam(":id", $prestamo["id_cliente"]);
        $query->bindParam(":id_p", $prestamo["id_prestamo"]);

        $query->execute();
    }

    function delete($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("DELETE FROM prestamos WHERE id_prestamo = :id");
        $query->bindParam(":id", $id);
        $query->execute();
    }

    function loadPrestamo($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM prestamos WHERE id_prestamo = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $prestamo = $query->fetch(PDO::FETCH_LAZY);

        return $prestamo;
    }
}