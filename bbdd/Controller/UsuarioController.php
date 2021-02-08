<?php 
require_once 'Conexion.php';
require_once './bbdd/model/Usuario.php';
class UsuarioController {
    static function logueoCliente($usu,$pass){
        $c= new Conexion();
        $result = $c->query("select * from usuario where usuario='$usu' and password = '$pass'");

        if($result->rowCount()){
            $a = $result->fetchObject();
            $cliente = new Usuario($a->id,$a->usuario,"",$a->nombre,$a->apellido,$a->fecha_creacion);
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
}