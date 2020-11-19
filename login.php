<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>
    <div class="container">
<?php include("includes/design-top.php");?>

<main>
  
    <div class="row">
        <div class="col-sm-6 p-0 ">
            <h1>crear usuario</h1>
            <form action="" class="form-group bg-primary  ">
                <label for="usuario">usuario</label>
                <input type="text" name="usuario" class="form-control">
                <label for="nombre" >nombre</label>
                <input type="text" name="nombre" class="form-control">
                <label for="apellidos">apellidos</label>
                <input type="text" name="apellidos" class="form-control">
                <label for="contraseña" >contraseña</label>
                <input type="password" name="contraseña" class="form-control" >
                <label for="recontraseña">repite la contraseña</label>
                <input type="password" name="recontraseña" class="form-control" >
                <input type="submit" class="form-control-3 btn btn-warning" value="enviar">
            </form>

        </div>
        <div class="col-sm-6 p-0">
            <h1>logueate</h1>
        <form action="" class="form-group   bg-danger  ">

                <label for="usuario">usuario</label>
                <input type="text" name="usuario" class="form-control">
                <label for="contraseña" >contraseña</label>
                <input type="password" name="contraseña" class="form-control" >
                <input type="submit" class="form-control-3 btn btn-warning" value="enviar">

        </form>

        </div>



    </div>

    
</main>



<?php include("includes/footer.php");?>
</div>
</body>
</html>