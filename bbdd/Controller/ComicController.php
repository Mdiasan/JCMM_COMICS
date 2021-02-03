<?php 
require_once 'Conexion.php';
require_once '../model/Comic.php';
class ComicController {
    static function getComicPorEditorial($editorial, $numero=false){
        $c= new Conexion();
       
        if($numero){
            $result = $c->query("select * from comic where editorial='$editorial' limit $numero");

        }else{
            $result = $c->query("select * from comic where editorial='$editorial' ");
        }
      

        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->editorial,$a->stock);
            $arrayComic[]=clone($comic);
            
           }
           return $arrayComic;
        }else{
            return false;
        }
    }
    static function getNovedades( $numero=false){
        $c= new Conexion();
       
        if($numero){
            $result = $c->query("select * from comic limit $numero");

        }else{
            $result = $c->query("select * from comic ");
        }
      

        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->editorial,$a->stock);
            $arrayComic[]=clone($comic);
            
           }
           return $arrayComic;
        }else{
            return false;
        }
    }
    static function getOfertas( $numero=false){
        $c= new Conexion();
       
        if($numero){
            $result = $c->query("select * from comic order by precio desc limit $numero ");

        }else{
            $result = $c->query("select * from comic order by precio desc ");
        }
      

        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->editorial,$a->stock);
            $arrayComic[]=clone($comic);
            
           }
           return $arrayComic;
        }else{
            return false;
        }
    }

    static function insertarComic($comic){
        $c = new Conexion();
        $c->beginTransaction();
        $b = $c->prepare('insert into comic values(?,?,?,?,?,?,?)');
        $id =1;
        $titulo=$comic->titulo;
        $des=$comic->descripcion;
        $precio=$comic->precio;
        $img=$comic->imagen;
        $editorial=$comic->editorial;
        $stock=$comic->stock;
        $b->bindParam(1,$id);
        $b->bindParam(2,$titulo);
        $b->bindParam(3,$des);
        $b->bindParam(4,$precio);
        $b->bindParam(5,$img);
        $b->bindParam(6,$editorial);
        $b->bindParam(7,$stock);
        $b->execute();
        $c->commit();


    }
}