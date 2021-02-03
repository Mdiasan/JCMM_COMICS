<?php

class Usuario {
    private $id;
    private $usuario;
    private $password;
    private $nombre;
    private $apellidos;
    private $fechaCreacion;

    function __construct($id="",$usuario="",$password="",$nombre="",$apellidos="",$fechaCreacion=""){
        $this->id =$id;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->fechaCreacion = $fechaCreacion;
    }

    public function __get($name){
      return $this->$name;  
    }
    public function __set($name, $value) {
       $this->$name=$value; 
    }
}