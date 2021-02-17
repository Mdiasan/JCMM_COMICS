<?php 
class Compras{
    private $id;
    private $idComic;
    private $idUsuario;
    private $cantidad;
    
    function __construct($id="",$idComic="",$idUsuario="",$cantidad=""){
        $this->id =$id;
        $this->idComic = $idComic;
        $this->idUsuario = $idUsuario;
        $this->cantidad=$cantidad;
       
    }

    public function __get($name){
      return $this->$name;  
    }
    public function __set($name, $value) {
       $this->$name=$value; 
    }

    function nuevaCompra($id="",$idComic="",$idUsuario="",$cantidad=""){
        $this->id =$id;
        $this->idComic = $idComic;
        $this->idUsuario = $idUsuario;
        $this->cantidad=$cantidad;


  }
}