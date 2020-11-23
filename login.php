<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <div class="container">
        <?php include("includes/design-top.php"); ?>

        <main>

            <div class="row">

                <div class="col p-0">

                    <h1>logueate</h1>
                    <div class="p-1">
                        <form action="" class="form-group">

                            <label for="usuario">usuario</label>
                            <input type="text" name="usuario" class="form-control">
                            <label for="contraseña">contraseña</label>
                            <input type="password" name="contraseña" class="form-control">
                            <input type="submit" class="form-control-3 btn btn-warning mt-3" value="enviar">
                            <a href="crearUsuario.php">no tienes cuenta registrate aquí!</a>
                        </form>
                    </div>

                </div>


            </div>


        </main>



        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>