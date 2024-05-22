<?php
class Usuario{
    public $id;
    public $nombre;
    public $apellido;
    public $cedula;
    public $cargo;
    public $pass;

    function getFullname(){
        return $this->nombre." ".$this->apellido;
    }
    function parseArray($obj){
        $this->id = $obj["id_usuarios"];
        $this->nombre = $obj["nombre"]; 
        $this->apellido = $obj["apellido"]; 
        $this->cedula = $obj["cedula"]; 
        $this->cargo = $obj["cargo"]; 
        $this->pass = $obj["pass"];
    }

}