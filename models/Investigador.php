<?php
class Investigador{
    public $id;
    public $nombre;
    public $codigo;
    public $telefono;
    public $email;
    public $id_categoria;
    public $id_instituto;

    function parseArray($obj){
        $this->id = $obj["id_investigador"];
        $this->nombre = $obj["nombre"]; 
        $this->codigo = $obj["codigo"]; 
        $this->telefono = $obj["telefono"]; 
        $this->email = $obj["email"]; 
        $this->id_categoria = $obj["id_categoria"]; 
        $this->id_instituto = $obj["id_instituto"];
    }

}