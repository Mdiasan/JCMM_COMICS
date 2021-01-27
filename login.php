<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <?php include("includes/design-top.php"); ?>

        <main>

            <div class="row">

                <div class="col p-0">

                    <h1>logueate</h1>
                    <div class="p-1">
                        <form action="" class="form-group" method="POST">

                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" class="form-control">
                            <label for="contraseña">Contraseña</label>
                            <input type="password" name="contraseña" class="form-control">
                            <input type="submit" class="form-control-3 btn btn-warning mt-3" value="Enviar">
                            ¿No tienes cuenta? registrate <a href="crearUsuario.php">AQUÍ!</a>
                        </form>
                    </div>

                </div>


            </div>

        </main>



        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>