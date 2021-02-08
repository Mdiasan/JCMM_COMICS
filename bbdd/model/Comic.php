<?php

class Comic {
    private $id;
    private $titulo;
    private $descripcion;
    private $precio;
    private $imagen;
    private $editorial;
    private $stock;
    private $cantidad;

    function __construct($id="",$titulo="",$descripcion="",$precio="", $imagen="", $editorial="",$stock="",$cantidad=""){
        $this->id =$id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->editorial = $editorial;
        $this->stock = $stock;
        $this->imagen=$imagen;
        $this->cantidad=$cantidad;
        
    }

    public function __get($name){
      return $this->$name;  
    }
    public function __set($name, $value) {
       $this->$name=$value; 
    }

    function nuevoComic($id="",$titulo="",$descripcion="",$precio="",$imagen="",$editorial="",$stock="",$cantidad=""){
      $this->id =$id;
      $this->titulo = $titulo;
      $this->descripcion = $descripcion;
      $this->precio = $precio;
      $this->editorial = $editorial;
      $this->stock = $stock;
      $this->imagen=$imagen;
      $this->cantidad=$cantidad;

  }
}