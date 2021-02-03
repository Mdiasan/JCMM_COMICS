<?php 
require_once 'Conexion.php';
require_once '../model/Valoracion.php';
class ValoracionController {

    static function getAll($comic){
        $c = new Conexion();
        $resultado = $c->query("select * from valoracion where comics_id='$comic->id'");
        if($resultado->rowCount()){
            $valoracion =  new Valoracion();
            while($a=$resultado->fetchObject()){
             $valoracion = $valoracion->nuevaValoracion($resultado->id,$resultado->valoracion,$resultado->comentario,$resultado->usuario_id,$resultado->comics_id);
             $arrayValoraciones[]=clone($valoracion);
             
            }
            return $arrayValoraciones;
         }else{
             return false;
         }
    
    }

}
    