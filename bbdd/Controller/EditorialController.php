<?php 
require_once 'Conexion.php';
require_once './bbdd/model/Editorial.php';
class EditorialController {
 static function getNombre($id){
        $c =  new Conexion();
        $result=$c->query("select nombre from editorial where id = $id");

       $nombre = $result->fetchColumn();

       return $nombre;
    }
}