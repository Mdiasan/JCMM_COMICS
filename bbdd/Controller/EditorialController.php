<?php
require_once 'Conexion.php';
require_once './bbdd/model/Editorial.php';
class EditorialController
{
    static function getNombre($id)
    {
        $c =  new Conexion();
        $result = $c->query("select nombre from editorial where id = $id");

        $nombre = $result->fetchColumn();

        return $nombre;
    }

    static function getAll()
    {
        $c =  new Conexion();
        $result = $c->query("select * from editorial ");
        if ($result->rowCount()) {

            $editorial = new Editorial();
            while ($a = $result->fetchObject()) {
                $editorial->nuevaEditorial($a->id,$a->nombre);
                $arrayEditorial[]=clone($editorial);
            }

            
        } 
        return $arrayEditorial;
    }
}
