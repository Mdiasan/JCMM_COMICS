<?php 
class Compras{
    private $id;
    private $idComic;
    private $idUsuario;
    
    function __construct($id="",$idComic="",$idUsuario=""){
        $this->id =$id;
        $this->idComic = $idComic;
        $this->idUsuario = $idUsuario;
       
    }

    public function __get($name){
      return $this->$name;  
    }
    public function __set($name, $value) {
       $this->$name=$value; 
    }

    function nuevaCompra($id="",$idComic="",$idUsuario=""){
        $this->id =$id;
        $this->idComic = $idComic;
        $this->idUsuario = $idUsuario;

  }
}