<?php include("includes/a_config.php"); ?>
<?php 
require_once 'bbdd/Controller/UsuarioController.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/Controller/EditorialController.php';
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/model/Comic.php';

session_start();


if(!isset($_SESSION['usuario']) || $_SESSION['usuario']->rol!='admin'){
    header("Location:./index.php");
}

if(isset($_POST['anadir'])){
    ComicController::sumarUnidades($_POST['anadir']);
}  
if(isset($_POST['retirar'])){
    ComicController::restarUnidades($_POST['retirar']);
}  
$arrayComics=ComicController::getAll();

 
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
                
                <div class="col">
                <br>
                <form action="nuevoComic.php"><button class="btn btn-warning">Añadir comic</button></form>
                <br>
                    <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                
                                <th scope="col">Editorial</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Añadir</th>
                                <th scope="col">Retirar</th>
                                <th scope="col">editar</th>    
                                </tr>
                            </thead>
                    <tbody>
                    <?php foreach ($arrayComics as $key => $value) {
                       
                     ?>
                        <tr>
                        <th scope="row"><?php echo $value->id ?></th>
                        <td><img src="media/images/<?php echo $value->imagen ?>" style="height: 40px; width: 40px;" alt=""></td>
                        <td><?php echo $value->titulo ?></td>
                        <td><?php echo $value->descripcion ?></td>
                        <td><?php echo $value->precio ?>€</td>
                        <td><?php echo EditorialController::getNombre( $value->editorial) ?></td>
                        <td><?php echo $value->stock ?></td>
                        <td><form action="" method="POST" ><button class="btn btn-orange" name="anadir" value=<?php echo $value->id ?>>+1</button></form></td>
                        <td><form action="" method="POST" ><button class="btn btn-danger" name="retirar"  value=<?php echo $value->id ?>>-1</button></form></td>
                        <td><form action="editarComic.php" ><button class="btn btn-warning" name="editar"  value=<?php echo $value->id ?>>Editar</button></form></td>
                        </tr>
                    <?php } ?> 
                    </tbody>
                    </table>
                </div>
            </div>

        </main>



        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>