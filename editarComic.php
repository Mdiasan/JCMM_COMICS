<?php include("includes/a_config.php");
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/Controller/EditorialController.php';
require_once 'bbdd/model/Comic.php';

session_start();
if(!isset($_GET['editar'])){
    header("Location:./index.php");
}else{
    $comic= ComicController::getComicById($_GET['editar']);
}

$arrayEditorial=EditorialController::getAll();


if(!isset($_SESSION['usuario']) || $_SESSION['usuario']->rol!='admin'){
    
    header("Location:./index.php");
}
if(isset($_POST['cancelar'])){
    header("Location:./index.php");
}
if(isset($_POST['crearNuevo'])){
    
    
    if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
        $fich_unic=time().$_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'],"media/images/".$fich_unic);

        $comic1=new Comic($comic->id,$_POST['titulo'],$_POST['descripcion'],$_POST['precio'],$fich_unic,$_POST['editorial'],$_POST['stock']);
        ComicController::editar($comic1);
        $comic= ComicController::getComicById($comic1->id);
    
    }
    else{
        $comic2=new Comic($comic->id,$_POST['titulo'],$_POST['descripcion'],$_POST['precio'],$comic->imagen,$_POST['editorial'],$_POST['stock']);
        ComicController::editar($comic2);
        $comic= ComicController::getComicById($comic2->id);
    
    } 
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <?php include("includes/design-top.php"); ?>

        <div class="row">
            <div class="col">
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
                            Titulo: <input type="text" class="form-control" name="titulo" value="<?php echo $comic->titulo ?>">
                            <br>
                            <br>
                            Descripcion: <input type="text"  class="form-control" name="descripcion" value="<?php echo $comic->descripcion ?>">
                            <br>
                            <br>
                            Precio: <input type="int"  class="form-control" name="precio" value="<?php echo $comic->precio ?>">
                            <br>
                            <br>
                         <input type="file" id="InputImage"  hidden class="form-control" name="imagen" >
                            <br>
                            <br>
                            Editorial: 
                            <select name="editorial" id="">


                            <?php foreach ($arrayEditorial as $key => $value) {  ?>
                                <option value="<?php echo $value->id ?>" <?php if($comic->editorial == $value->id){echo "selected";} ?>><?php echo $value->nombre ?></option>                          
                            <?php  } ?>


                               
                            </select>
                           
                            
                            
                            
                            
                            
                            <br>
                            <br>
                            Stock: <input type="int"  class="form-control" name="stock" value="<?php echo $comic->stock ?>">
                            <br>
                            <br>
                            <input type="submit" name="crearNuevo" class="btn btn-warning" value="Editar">
                            <input type="submit" name="" class="btn btn-danger" value="Cancelar">
                        </div>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </div>

</body>
<script>
var botonImagen = document.getElementById('btnImagen');
var input = document.getElementById('InputImage');
        botonImagen.addEventListener("click",function () {
            input.click();
    });
</script>
</html>