<?php include("includes/a_config.php");
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/Controller/EditorialController.php';

require_once 'bbdd/model/Comic.php';

session_start();


if(!isset($_SESSION['usuario']) || $_SESSION['usuario']->rol!='admin'){
    header("Location:./index.php");
}
$arrayEditorial=EditorialController::getAll();

if(isset($_POST['crearNuevo'])){
    if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
        $fich_unic=time().$_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'],"media/images/".$fich_unic);

        $comic=new Comic(null,$_POST['titulo'],$_POST['descripcion'],$_POST['precio'],$fich_unic,$_POST['editorial'],$_POST['stock']);
        ComicController::insertarComic($comic);
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
                        <h4 class="mb-0">Añade un nuevo Comic</h4>
                    </div>



                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            Titulo: <input type="text" class="form-control" name="titulo">
                            <br>
                            <br>
                            Descripcion: <input type="text"  class="form-control" name="descripcion">
                            <br>
                            <br>
                            Precio: <input type="int"  class="form-control" name="precio">
                            <br>
                            <br>
                            Imagen: <input type="file"  class="form-control" name="imagen" required>
                            <br>
                            <br>
                            Editorial:
                            <select name="editorial" id="">


                            <?php foreach ($arrayEditorial as $key => $value) {  ?>
                                <option value="<?php echo $value->id ?>"><?php echo $value->nombre ?></option>                          
                            <?php  } ?>


                               
                            </select>
                            <br>
                            <br>
                            Stock: <input type="int"  class="form-control" name="stock">
                            <br>
                            <br>
                            <input type="submit" name="crearNuevo" class="btn btn-success" value="Añadir">
                            <input type="submit" name="" class="btn btn-danger" value="Cancelar">
                        </div>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </div>

</body>

</html>