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

            <div class="col p-0 ">
                <h1>Crear usuario</h1>
                <div class="p-1">

                    <form action="" class="form-group   ">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" class="form-control">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control">
                        <label for="recontraseña">Repite la contraseña</label>
                        <input type="password" name="recontraseña" class="form-control">
                        <input type="submit" class="form-control-3 btn btn-warning mt-3" value="Enviar">
                    </form>
                </div>
            </div>

        </main>

        <?php include("includes/footer.php"); ?>
    </div>
</body>
</html>