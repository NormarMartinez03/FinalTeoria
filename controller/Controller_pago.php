<?php
include_once("Conexion.php");

class Controller_pago extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM pagos ");
        $query->execute();
        $pago = $query->fetchAll(PDO::FETCH_ASSOC);

        return $pago;
    }
    
    function insert($pago)
    {
        /* print_r($pago);exit; */
        $conect = $this->getConnect();
        $query = $conect->prepare("INSERT INTO pagos(metodo_pago, monto_pago, id_prestamo) VALUES(:metodo_pago, :monto_pago, :id_prestamo);");

        $query->bindParam(":metodo_pago", $pago["metodo_pago"]);
        $query->bindParam(":monto_pago", $pago["monto_pago"]);
        $query->bindParam(":id_prestamo", $pago["cod_prestamo"]);

        $query->execute();
    }
    function update($pago)
    {
    /*     print_r($pago);    */
        $conect = $this->getConnect();
        $query = $conect->prepare("UPDATE pagos SET metodo_pago = :metodo_pago, monto_pago = :monto_pago, id_prestamo = :id_prestamo WHERE id_pago = :id_pago");

        $query->bindParam(":metodo_pago", $pago["metodo_pago"]);
        $query->bindParam(":monto_pago", $pago["monto_pago"]);
        $query->bindParam(":id_prestamo", $pago["cod_prestamo"]);
        $query->bindParam(":id_pago", $pago["id_pago"]);

        $query->execute();
    }

    function delete($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("DELETE FROM pagos WHERE id_pago = :id");
        $query->bindParam(":id", $id);
        $query->execute();
    }

    function loadPago($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM pagos WHERE id_pago = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $pago = $query->fetch(PDO::FETCH_LAZY);

        return $pago;
    }
}