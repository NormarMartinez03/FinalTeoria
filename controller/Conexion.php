<?php

class Conexion{
    const HOME = 'https://localhost/propuesta/';
    private $server="localhost";
    private $database = "investigacion";
    private $user="root";
    private $pass = "";

    public function getConnect(){
        try{
            $conect = new PDO("mysql:host=".$this->server.";dbname=".$this->database, $this->user, $this->pass);
        }catch(Exception $e){
        
            echo "Error: ". $e->getMessage() ."consulta coneccion";
        }

        return $conect;
    }

    public static function getHome(){
        return self::HOME;
    }
}


