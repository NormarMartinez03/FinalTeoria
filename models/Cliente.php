<?php
class Cliente{
    public $id;
    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $direccion;
    public $correo;

    public function getFullName(){
        return $this->nombre." ".$this->apellido;
    }
    function parseArray($obj){
        $this->id = $obj["id_cliente"];
        $this->nombre = $obj["nombre"]; 
        $this->apellido = $obj["apellido"]; 
        $this->cedula = $obj["cedula"]; 
        $this->direccion = $obj["direccion"]; 
        $this->telefono = $obj["telefono"]; 
        $this->correo = $obj["correo"];
    }

}