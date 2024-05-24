<?php

class Pago{
    public $id;
    public $cambio;
    public $cod_pago;
    public $fecha_pago;
    public $metodo_pago;
    public $monto_pago;
    public $id_cuota;
    public $id_prestamo;

    function parseArray($obj){
        $this->id = $obj["id_pago"];
        $this->cambio = $obj["cambio"] != null ? $obj["cambio"]: null ; 
        $this->cod_pago = $obj["cod_pago"] != null ? $obj["cod_pago"]:"" ; 
        $this->fecha_pago = $obj["fecha_pago"]; 
        $this->metodo_pago = $obj["metodo_pago"]; 
        $this->monto_pago = $obj["monto_pago"];
        $this->id_cuota = $obj["id_cuota"] != null ? $obj["cambio"]:null;
        $this->id_prestamo = $obj["id_prestamo"];
    }
}