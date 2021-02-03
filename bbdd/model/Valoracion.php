<?php
class Valoracion{
    private $id;
    private $valoracion;
    private $comentario;
    private $usuario;
    private $comic;

    public function __construct($id="",$valoracion="",$comentario="",$usuario="",$comic=""){
        $this->id=$id;
        $this->valoracion=$valoracion;
        $this->comentario=$comentario;
        $this->usuario=$usuario;
        $this->comic=$comic;
    }

    public function __get($name){
        $this->$name;
    }

    public function __set($name, $value){
        $this->$name=$value;
    }

    public function nuevaValoracion($id="",$valoracion="",$comentario="",$usuario="",$comic=""){
        $this->id=$id;
        $this->valoracion=$valoracion;
        $this->comentario=$comentario;
        $this->usuario=$usuario;
        $this->comic=$comic;
    }
}