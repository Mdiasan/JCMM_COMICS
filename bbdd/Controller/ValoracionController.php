<?php 
require_once 'Conexion.php';
require_once './bbdd/model/Valoracion.php';
class ValoracionController {

    static function getAll($comic){
        $c = new Conexion();
        $resultado = $c->query("select * from valoracion where comics_id=$comic->id");
        if($resultado->rowCount()){
            $valoracion =  new Valoracion();
            while($a=$resultado->fetchObject()){
             $valoracion->nuevaValoracion($a->id,$a->valoracion,$a->comentario,$a->usuario_id,$a->comics_id);
             $arrayValoraciones[]=clone($valoracion);
             
            }
            return $arrayValoraciones;
         }else{
             return false;
         }
    
    }

    static function getMediaValoraciones($comic){
        $c = new Conexion();
        $resultado = $c->query("select avg(valoracion) from valoracion where comics_id=$comic->id");

        $media =$resultado->fetchColumn(0);
        $numero = ceil(($media));
         return $numero;
         
    }

}
    