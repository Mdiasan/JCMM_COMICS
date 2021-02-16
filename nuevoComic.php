<?php include("includes/a_config.php");
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/model/Comic.php';

session_start();
if (!isset($_POST['pagina'])) {
    $_POST['pagina'] = 0;
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



                    <form action="" method="post">

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
                            Imagen: <input type="file"  class="form-control" name="imagen">
                            <br>
                            <br>
                            Editorial: <input type="int"  class="form-control" name="editorial">
                            <br>
                            <br>
                            Stock: <input type="int"  class="form-control" name="editorial">
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