<?php
include_once("Conexion.php");

class Controller_cuota extends Conexion{

    function loadData(){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM cuotas WHERE estado <> 'cancelada'");
        $query->execute();
        $cuotas = $query->fetchAll(PDO::FETCH_ASSOC);

        return $cuotas;
    }
    
    function insert($cuotas, $idPrestamo)
    {
        $conect = $this->getConnect();
        
        foreach($cuotas as $cuota){
           /*  print_r($cuota);exit; */
            $query = $conect->prepare("INSERT INTO cuotas(fecha, periodo, interes, amortizacion, cuota, capital_pendiente, id_prestamo) VALUES(:fecha, :periodo, :interes, :amortizacion, :cuota, :capital_pendiente, :id);");

            $query->bindParam(":fecha", $cuota["fecha"]);
            $query->bindParam(":periodo", $cuota["periodo"]);
            $query->bindParam(":interes", $cuota["interes"]);
            $query->bindParam(":amortizacion", $cuota["amortizacion"]);
            $query->bindParam(":cuota", $cuota["cuota"]);
            $query->bindParam(":capital_pendiente", $cuota["capital_pendiente"]);
            $query->bindParam(":id", $idPrestamo);

            $query->execute();
        }
    }
    
    
    function loadCuota($id){
        $conect = $this->getConnect();

        $query = $conect->prepare("SELECT * FROM cuotas WHERE id_cuota = :id");
        $query->bindParam(":id", $id);

        $query->execute();
        $prestamo = $query->fetch(PDO::FETCH_LAZY);

        return $prestamo;
    }
}