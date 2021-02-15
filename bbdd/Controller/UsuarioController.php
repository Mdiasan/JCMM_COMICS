<?php 
require_once 'Conexion.php';
require_once './bbdd/model/Usuario.php';
class UsuarioController {
    static function logueoCliente($usu,$pass){
        $c= new Conexion();
        $result = $c->query("select * from usuario where usuario='$usu' and password = '$pass'");

        if($result->rowCount()){
            $a = $result->fetchObject();
            $cliente = new Usuario($a->id,$a->usuario,"",$a->nombre,$a->apellido,$a->mail,$a->rol);
            return $cliente;
        }else{
            return false;
        }
    }



    static function registrar($usuario){
        $c = new Conexion();
        $c->beginTransaction();
        $b = $c->prepare('insert into usuario values(?,?,?,?,?,?,null,?)');
        $id = UsuarioController::getSiguienteId();
        $usu=$usuario->usuario;
        $pass=$usuario->password;
        $nombre=$usuario->nombre;
        $apellido=$usuario->apellidos;
        $mail = $usuario->mail;
        $rol='cliente';
        //time()
        $fecha=time();
        $b->bindParam(1,$id);
        $b->bindParam(2,$usu);
        $b->bindParam(3,$pass);
        $b->bindParam(4,$nombre);
        $b->bindParam(5,$apellido);
        $b->bindParam(6,$rol);
        
        $b->bindParam(7,$mail);
        $b->execute();
        $c->commit();


    }


    static function getSiguienteId(){
        $c =  new Conexion();
        $result=$c->query("select id from usuario order by id desc limit 1");

       $id = $result->fetchColumn();
       $id ++;

       return $id;
    }

    static function getNombre($id){
        $c =  new Conexion();
        $result=$c->query("select nombre from usuario where id = $id");

       $nombre = $result->fetchColumn();

       return $nombre;
    }


    static function update($usuario){
        $c = new Conexion();
        $c->beginTransaction();
        $b = $c->prepare('update   usuario set nombre=? ,  apellido=?, mail=? ,usuario=? where id=?');
        $id = $usuario->id;
        $usu=$usuario->usuario;
        
        $nombre=$usuario->nombre;
        $apellido=$usuario->apellidos;
        $mail = $usuario->mail;
       ;
        //time()
        $fecha=time();
        $b->bindParam(5,$id);
        $b->bindParam(1,$nombre);
        $b->bindParam(2,$apellido);
        $b->bindParam(3,$mail);
        $b->bindParam(4,$usu);
      
        
       
        $b->execute();
        $c->commit();


    }

    static function cambiarPassword($usuario,$pass,$passNueva){
        $c = new Conexion();
        if(UsuarioController::comprobarPass($usuario,$pass)){
            $c->beginTransaction();
            $b = $c->prepare('update usuario set password=? where id=?');
            $id = $usuario->id;
           
           
           ;
            
            $b->bindParam(2,$id);
            $b->bindParam(1,$passNueva);
            $b->execute();
            $c->commit();
            return true;
        }
        
        return false;
      
        
       
     

    }


    static function comprobarPass($pass,$usuario){
        $c= new Conexion();
        $result = $c->query("select * from usuario where  password = '$pass' and usuario=$usuario->id");

        if($result->rowCount()){
           
            return true;
        }else{
            return false;
        }


        
    }
    static function BuscarMail($mail){
        $c= new Conexion();
        $result = $c->query("select * from usuario where  mail = '$mail' ");

        if($result->rowCount()){
           
            return true;
        }else{
            return false;
        }

    }

    static function logeoConMail($mail){
        $c= new Conexion();
        $result = $c->query("select * from usuario where  mail = '$mail' ");
        if($result->rowCount()){
            $a = $result->fetchObject();
            $cliente = new Usuario($a->id,$a->usuario,"",$a->nombre,$a->apellido,$a->mail,$a->rol);
            return $cliente;
        }else{
            return false;
        }
    }



    
 
}