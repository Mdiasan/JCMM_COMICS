<?php
class Editorial{
    private $id;
    private $nombre;

    public function __construct($id="",$nombre=""){
        $this->id=$id;
        $this->nombre=$nombre;
    }

    public function __get($name){
        return $this->$name;
    }
    public function __set($name, $value){
        $this->$name=$value;
    }
}