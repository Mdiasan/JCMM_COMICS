<?php include("includes/a_config.php");

require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/Controller/ComprasController.php';

require_once 'bbdd/model/Comic.php';
session_start();
$resultado=null;
$demasiado=null;



if(isset($_POST['mas'])){
    $c = ComicController::getComicById($_POST['mas']);
    
    $a=ComicController::GetStock($_POST['mas']);
    $a= $a-$_SESSION['carrito'][$c->id]->cantidad;
  if($a>0){
    $c = ComicController::getComicById($_POST['mas']);
    if(isset( $_SESSION['carrito'][$c->id])){
       $_SESSION['carrito'][$c->id]->cantidad ++ ;
  
    }else{
      $c->cantidad=1;
      $_SESSION['carrito'][$c->id]=$c;
    }
  
  }else{
    $demasiado=true;
  }
 
  
}
if(isset($_POST['menos'])){
    $c = ComicController::getComicById($_POST['menos']);
    
    if(isset( $_SESSION['carrito'][$c->id])){
       $_SESSION['carrito'][$c->id]->cantidad -- ;

       if( $_SESSION['carrito'][$c->id]->cantidad<=0){
           unset( $_SESSION['carrito'][$c->id]);
           if(count($_SESSION['carrito'])<=0){
                unset($_SESSION['carrito']);
           }
       }
  
    }
  
    
  }

if(isset($_POST['pagar'])){
    $resultado=true;
    foreach ($_SESSION["carrito"] as $key => $value) {
        for ($i=0; $i < $value->cantidad ; $i++) { 
            if(!ComprasController::comprar($_SESSION['usuario']->id,$value->id)){
                $resultado=false;
            }
        }
        
    }
    $_SESSION['carrito']="";
  
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <?php include("includes/design-top.php"); ?>

        <main>

            <div class="row">
                <?php if(!isset($_SESSION['usuario'])){ ?>

              
                <div class="col-12  col-sm-6">
                    <h1 class="text-dark">logueate</h1>
                    <div class="p-1">
                        <form action="" class="form-group">

                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" class="form-control">
                            <label for="contraseña">Contraseña</label>
                            <input type="password" name="contraseña" class="form-control">
                            <input type="submit" class="form-control-3 btn btn-warning mt-3" value="Enviar">
                            <a href="crearUsuario.php">¿No tienes cuenta? registrate aquí!</a>
                        </form>
                    </div>
                </div>

                <?php   } ?>
                <div class="col-12  col-sm-<?php if(isset($_SESSION['usuario'])){ echo 12 ;}else{echo 6;} ?>">
                    <div class="row">
                        <div class="col text-center ">
                            <h1 class="text-dark">carrito</h1>
                        </div>
                    </div>
                    <?php if (isset($_SESSION['carrito'])) {
                        foreach ($_SESSION['carrito'] as $key => $value) {
                    ?>


                            <div class="row  mt-5">
                                <div class="col"><img src="media/images/<?php echo $value->imagen ?>" alt="" class="imagencarrito "></div>
                                <div class="col">
                                    <p><?php echo $value->titulo ?></p>
                                </div>

                                <div class="col">
                               
                                
                                    <form action="" method="POST" class="d-inline"><button  name="menos" class="btn btn-orange" value="<?php echo $value->id ?>">-</button>  X <?php echo $value->cantidad ?> <button name="mas" class="btn btn-orange" value="<?php echo $value->id ?>" >+</button> </form>
                                    
                                   
                                   
                                   
                                   
                                    
                                 

                                
                               
                               
                               
                                </div>
                                <div class="col">Precio: <?php echo ($value->precio * $value->cantidad) ?> €</div>

                            </div>
                            <hr>


                        <?php
                        }
                    } else {
                        ?>

                        <div class="row">
                            <div class="col text-center"> No has seleccionado ningun articulo </div> 
                        </div>
                       



                    <?php      } ?>


                    <div class="row">
                        <div class="col">
                            <form action="/index.php" class=" form-inline"><button class="btn btn-orange form-control">Seguir Comprando</button> </form>
                        </div>
                        <div class="col"> </div>
                        <div class="col text-inline">
                            <form action="" class=" form-inline" method="POST">
                                <?php if (isset($_SESSION["carrito"])) {
                                    $total = 0;
                                    foreach ($_SESSION["carrito"] as $key => $value) {
                                        $total += $value->precio * $value->cantidad;
                                    }

                                    echo "Total : $total € ";
                                } else {
                                    echo "Total : 0,00€ ";
                                } ?>




                                <button name="pagar" class="btn btn-orange form-control" <?php if (!isset($_SESSION["carrito"])) {
                                                                                echo "disabled";
                                                                            } ?>>Pagar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </main>

   <div class="modal fade" id="modalcompra">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="alert alert-success alert-dismissible fade show">
    		 <button type="button" class="close" data-dismiss="modal">&times;</button>
    		<strong>Gracias!</strong> Pago realizado con exito 
  			</div>
        </div>
        
       
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="demasiado">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="alert alert-danger alert-dismissible fade show">
    		 <button type="button" class="close" data-dismiss="modal">&times;</button>
    		<strong>upss!</strong>no se puede añadir al carrito, por que no hay más unidades
  			</div>
        </div>
        
       
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="error">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="alert alert-danger alert-dismissible fade show">
    		 <button type="button" class="close" data-dismiss="modal">&times;</button>
    		<strong>Error!</strong> no se ha podido realizar el pago 
  			</div>
        </div>
        
       
        
      </div>
    </div>
  </div>


        <?php include("includes/footer.php"); ?>
    </div>

    <?php if(!$resultado){ ?>
          <script> $('#myModal').modal('show');</script>
        <?php }?>
        <?php if($resultado){ ?>
          <script> $('#modalcompra').modal('show');</script>
        <?php }?>
        <?php if($demasiado){ ?>
          <script> $('#demasiado').modal('show');</script>
        <?php }?>
</body>

</html>