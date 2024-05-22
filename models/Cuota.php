<?php

class Cuota{
    public $id;
    public $fecha;
    public $periodo;
    public $interes;
    public $amortizacion;
    public $cuota;
    public $capital_pendiente;
    public $estado;
    public $id_prestamo;

    function parseArray($obj){
        $this->id = $obj["id_cuota"];
        $this->fecha = $obj["fecha"]; 
        $this->periodo = $obj["periodo"]; 
        $this->interes = $obj["interes"]; 
        $this->amortizacion = $obj["amortizacion"]; 
        $this->cuota = $obj["cuota"];
        $this->capital_pendiente = $obj["capital_pendiente"];
        $this->estado = $obj["estado"];
        $this->id_prestamo = $obj["id_prestamo"];
    }
}