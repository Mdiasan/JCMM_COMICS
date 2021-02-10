<?php

class Usuario {
    private $id;
    private $usuario;
    private $password;
    private $nombre;
    private $apellidos;
    private $mail;
    private $rol;
    private $fechaCreacion;

    function __construct($id="",$usuario="",$password="",$nombre="",$apellidos="",$mail="",$rol="",$fechaCreacion=""){
        $this->id =$id;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->mail = $mail;
        $this->rol = $rol;
        $this->fechaCreacion = $fechaCreacion;
    }

    public function __get($name){
      return $this->$name;  
    }
    public function __set($name, $value) {
       $this->$name=$value; 
    }
}