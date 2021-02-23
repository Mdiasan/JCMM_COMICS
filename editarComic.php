<?php include("includes/a_config.php");
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/Controller/EditorialController.php';
require_once 'bbdd/model/Comic.php';

session_start();
if(!isset($_GET['editar'])){
    header("Location:./zona.php");
}else{
    $comic= ComicController::getComicById($_GET['editar']);
}

$arrayEditorial=EditorialController::getAll();
$modificado=false;

if(!isset($_SESSION['usuario']) || $_SESSION['usuario']->rol!='admin'){
    
    header("Location:./index.php");
}
if(isset($_POST['cancelar'])){
    header("Location:./zonaAdmin.php");
}
if(isset($_POST['crearNuevo'])){
    
    
    if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
        $fich_unic=time().$_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'],"media/images/".$fich_unic);

        $comic1=new Comic($comic->id,$_POST['titulo'],$_POST['descripcion'],$_POST['precio'],$fich_unic,$_POST['editorial'],$_POST['stock']);
        ComicController::editar($comic1);
        $comic= ComicController::getComicById($comic1->id);
        $modificado=true;
    }
    else{
        $comic2=new Comic($comic->id,$_POST['titulo'],$_POST['descripcion'],$_POST['precio'],$comic->imagen,$_POST['editorial'],$_POST['stock']);
        ComicController::editar($comic2);
        $comic= ComicController::getComicById($comic2->id);
        $modificado=true;
    } 
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

        <div class="row">
            <div class="col">
            <form action="" method="POST">
            <br>
            <input type="submit" name="cancelar" class="btn btn-primary" value="volver">
            </form>
<br>
                <div class="card formLogeo">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Editar Comic</h4>
                    </div>



                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="card-body">
                        <div class=" text-center " style="width: 100%;">  <button class="btn btn-primary " id="btnImagen" style="border: none;" ><img style="  width:300px;
    height:300px;
    border-radius:150px;" src="media/images/<?php echo $comic->imagen ?>" alt=""></button> </div>
                         <br>
                            <div class="text-center"> click en la imagen para cambiarla</div>
                            <br>
                            Titulo: <input type="text" class="form-control" name="titulo" value="<?php echo $comic->titulo ?>">
                            <br>
                            <br>
                            Descripcion: <input type="text"  class="form-control" name="descripcion" value="<?php echo $comic->descripcion ?>">
                            <br>
                            <br>
                            Precio: <input type="number"  class="form-control" name="precio" value="<?php echo $comic->precio ?>">
                            <br>
                            
                         <input type="file" id="InputImage"  hidden class="form-control" name="imagen" >
                            Editorial: 
                            <select name="editorial" id="">


                            <?php foreach ($arrayEditorial as $key => $value) {  ?>
                                <option value="<?php echo $value->id ?>" <?php if($comic->editorial == $value->id){echo "selected";} ?>><?php echo $value->nombre ?></option>                          
                            <?php  } ?>


                               
                            </select>
                           
                            
                            
                            
                            
                            
                            <br>
                            <br>
                            Stock: <input type="number"  class="form-control" name="stock" value="<?php echo $comic->stock ?>">
                            <br>
                            <br>
                            <input type="submit" name="crearNuevo" class="btn btn-warning" value="Editar">
                            <input type="submit" name="cancelar" class="btn btn-danger" value="Cancelar">
                        </div>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </div>
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="success alert-success alert-dismissible fade show">
    		 <button type="button" class="close" data-dismiss="modal">&times;</button>
    		<strong>bien!</strong> comic editado
  			</div>
        </div>
               
        
      </div>
    </div>
  </div>
  <?php if($modificado){ ?>
          <script> $('#myModal').modal('show');</script>
        <?php }?>
</body>
<script>
var botonImagen = document.getElementById('btnImagen');
var input = document.getElementById('InputImage');
        botonImagen.addEventListener("click",function () {
            input.click();
    });
</script>
</html>