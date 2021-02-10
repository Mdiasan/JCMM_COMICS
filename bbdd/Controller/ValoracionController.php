<?php 
require_once 'Conexion.php';
require_once './bbdd/model/Valoracion.php';
class ValoracionController {

    static function getAll($comic){
        $c = new Conexion();
        $resultado = $c->query("select * from valoracion where comics_id=$comic->id  order by id desc");
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

    static function guardar($valoracion){
        $c = new Conexion();
        $c->beginTransaction();
        $b = $c->prepare('insert into valoracion values(?,?,?,?,?)');
        $id= ValoracionController::getSiguienteId();
        $v=$valoracion->valoracion;
        $coment=$valoracion->comentario;
        $usu=$valoracion->usuario;
        $comic=$valoracion->comic;
        $b->bindParam(1,$id);
        $b->bindParam(2,$v);
        $b->bindParam(3,$coment);
        $b->bindParam(4,$usu);
        $b->bindParam(5,$comic);
        $b->execute();
        $c->commit();
    }


    


    static function getSiguienteId(){
        $c =  new Conexion();
        $result=$c->query("select id from valoracion order by id desc limit 1");

       $id = $result->fetchColumn();
       $id ++;

       return $id;
    }

}
    