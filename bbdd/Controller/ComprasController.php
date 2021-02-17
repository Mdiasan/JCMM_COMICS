<?php 
require_once 'Conexion.php';
require_once './bbdd/model/Comic.php';
require_once './bbdd/model/Compras.php';

require_once './bbdd/Controller/ComicController.php';
class ComprasController {
    static function comprar($idUsuario,$idCommic){
        $c = new Conexion();
        $c->beginTransaction();
        $b = $c->prepare('insert into compras values(?,?,?)');
        $id = ComprasController::getSiguienteId();
        
       
        $b->bindParam(1,$id);
        $b->bindParam(2,$idCommic);
        $b->bindParam(3,$idUsuario);
        

        $b->execute();
       $result = $c->commit();
        
        ComicController::restarUnidades($idCommic);
        return $result;
    }

    
    static function getSiguienteId(){
        $c =  new Conexion();
        $result=$c->query("select idcompras from compras order by idcompras desc limit 1");

       $id = $result->fetchColumn();
       $id ++;

       return $id;
    }


    static function getComprasUsuario($idUsuario){
        $c =  new Conexion();
        $result=$c->query("select * , count(idcompras) cantidad from compras where usuario_id=$idUsuario  group by comic_id");
        $compra = new Compras();
        if($result->rowCount()){
            while ($a=$result->fetchObject()) {
                $compra->nuevaCompra($a->idcompras,$a->comic_id,$a->usuario_id,$a->cantidad);
                $compras[]=clone($compra);
            }

            return $compras;
        }else{
            return false;
        }
    }
}