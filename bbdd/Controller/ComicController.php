<?php 
require_once 'Conexion.php';
require_once './bbdd/model/Comic.php';
class ComicController {
    static function getComicPorTipo($tipo, $numero=false){
        $c= new Conexion();
       
        if($numero){
            $result = $c->query("select c.* FROM comic as c , editorial  as e where e.tipo='$tipo' and e.id=c.editorial_id limit $numero");

        }else{
            $result = $c->query("select c.* FROM comic as c , editorial  as e where e.tipo='$tipo' and e.id=c.editorial_id ");
        }
      

        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock);
            $arrayComic[]=clone($comic);
            
           }
           return $arrayComic;
        }else{
            return false;
        }
    }

    static function getComicPorNombreEditorial($nombre, $numero=false){
        $c= new Conexion();
       
        if($numero){
            $result = $c->query("select c.* FROM comic as c , editorial  as e where e.nombre='$nombre' and e.id=c.editorial_id limit $numero");

        }else{
            $result = $c->query("select c.* FROM comic as c , editorial  as e where e.nombre='$nombre' and e.id=c.editorial_id  ");
        }
      

        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock);
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
            $result = $c->query("SELECT * FROM comic  order by id  desc limit $numero");

        }else{
            $result = $c->query("select * from comic  order by id  desc ");
        }
      

        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock);
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
            $result = $c->query("select * from comic order by precio asc limit $numero ");

        }else{
            $result = $c->query("select * from comic order by precio desc ");
        }
      

        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock);
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


    static function getComicPorTipoPaginado($pagina , $numeroPorPagina , $tipo){
        $c= new Conexion();
       
            $pagina = $pagina * $numeroPorPagina;
            $result = $c->query("select c.* FROM comic as c , editorial  as e where e.tipo='$tipo' and e.id=c.editorial_id  limit $numeroPorPagina offset $pagina");

       
      


        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock);
            $arrayComic[]=clone($comic);
            
           }
           return $arrayComic;
        }else{
            return false;
        }
    }

    static function getComicPorNombreEditorialPaginado($pagina , $numeroPorPagina , $editorial){
        $c= new Conexion();
        $pagina=$pagina*$numeroPorPagina;
       
        $result = $c->query("select c.* FROM comic as c , editorial  as e where e.nombre='$editorial' and e.id=c.editorial_id limit $numeroPorPagina offset $pagina");
       
      


        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock);
            $arrayComic[]=clone($comic);
            
           }
           return $arrayComic;
        }else{
            return false;
        }
    }
    static function getNumeroComicPorNombreEditorialPaginado($editorial){
        $c= new Conexion();
       
       
        $result = $c->query("select count(*) from comic as c , editorial  as e where e.nombre='$editorial' and e.id=c.editorial_id ; ");
       
    


        
           return $result->fetchColumn();
       
    }


    static function getNumeroComicPorTipoPaginado($tipo){
        $c= new Conexion();
       
       
        $result = $c->query("select count(*) from comic as c , editorial  as e where e.tipo='$tipo' and e.id=c.editorial_id ; ");
       
    


        
           return $result->fetchColumn();
       
    }

    static function getComicById($id){

        $c= new Conexion();
       
       
        $result = $c->query("select c.* FROM comic as c  where c.id=$id");
       
      


        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock);
           
            
           }
           return $comic;
        }else{
            return false;
        }
    }

    static function getAll(){
        $c= new Conexion();
       
       
        $result = $c->query("select c.* FROM comic as c  ");
       
      


        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock);
            $arrayComic[]=clone($comic);
            
           }
           return $arrayComic;
        }else{
            return false;
        }
    }


    static function sumarUnidades($id){
        $c= new Conexion();
       
       
        $result = $c->query("select c.* FROM comic as c  where c.id=$id");
       
      


        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock +1);
           
            
           }
        }

        ComicController::editar($comic);
    }

    static function restarUnidades($id){
        $c= new Conexion();
       
       
        $result = $c->query("select c.* FROM comic as c  where c.id=$id");
       
      


        if($result->rowCount()){
           $comic= new Comic();
           while($a=$result->fetchObject()){
            $comic->nuevoComic($a->id,$a->titulo,$a->descripcion,$a->precio,$a->imagen,$a->editorial_id,$a->stock -1);
           
            
           }
        }

        ComicController::editar($comic);
    }




static function editar($comic){
    $c = new Conexion();
    $c->beginTransaction();
    $b = $c->prepare('update  comic set titulo=?, descripcion=?,precio=?,imagen=?,editorial_id=?,stock=? where id=?');
    $id =$comic->id;
    $titulo=$comic->titulo;
    $des=$comic->descripcion;
    $precio=$comic->precio;
    $img=$comic->imagen;
    $editorial=$comic->editorial;
    $stock=$comic->stock;
    $b->bindParam(7,$id);
    $b->bindParam(1,$titulo);
    $b->bindParam(2,$des);
    $b->bindParam(3,$precio);
    $b->bindParam(4,$img);
    $b->bindParam(5,$editorial);
    $b->bindParam(6,$stock);
    $b->execute();
    $c->commit();
}
}