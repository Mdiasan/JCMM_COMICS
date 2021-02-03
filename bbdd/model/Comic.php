<?php

class Comic {
    private $id;
    private $titulo;
    private $descripcion;
    private $precio;
    private $editorial;
    private $stock;

    function __construct($id="",$titulo="",$descripcion="",$precio="",$editorial="",$stock=""){
        $this->id =$id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->editorial = $editorial;
        $this->stock = $stock;
    }

    public function __get($name){
      return $this->$name;  
    }
    public function __set($name, $value) {
       $this->$name=$value; 
    }

    function nuevoComic($id="",$titulo="",$descripcion="",$precio="",$editorial="",$stock=""){
      $this->id =$id;
      $this->titulo = $titulo;
      $this->descripcion = $descripcion;
      $this->precio = $precio;
      $this->editorial = $editorial;
      $this->stock = $stock;
  }
}