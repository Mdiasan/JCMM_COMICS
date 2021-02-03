<?php 
require_once 'Conexion.php';
class UsuarioController {
    static function logueoCliente($usu,$pass){
        $c= new Conexion();
        $result = $c->query("select * from usuario where usuario='$usu' and password = '$pass'");

        if($result->rowCount()){
            $a = $result->fetchObject();
            $cliente = $a;
            return $cliente;
        }else{
            return false;
        }
    }



    static function registrar($usuario){
        $c = new Conexion();
        $c->beginTransaction();
        $b = $c->prepare('insert into usuario values(?,?,?,?,?,?,?)');
        $id =1;
        $usu=$usuario->usuario;
        $pass=$usuario->password;
        $nombre=$usuario->nombre;
        $apellido=$usuario->apellido;
        $rol='cliente';
        //time()
        $fecha=$usuario->fecha;
        $b->bindParam(1,$id);
        $b->bindParam(2,$usu);
        $b->bindParam(3,$pass);
        $b->bindParam(4,$nombre);
        $b->bindParam(5,$apellido);
        $b->bindParam(6,$rol);
        $b->bindParam(7,$fecha);
        $b->execute();
        $c->commit();


    }
}