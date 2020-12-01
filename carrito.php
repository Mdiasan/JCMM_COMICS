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
            <div class="col">
            <h1 class="text-dark">logueate</h1>
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
            <div class="col">
                <div class="row">
                    <div class="col text-center "><h1 class="text-dark">carrito</h1></div>
                </div>
                <div class="row  mt-5">
                        <div class="col"><img src="media/images/spiderman negro.png" alt="" class="imagencarrito "></div>
                        <div class="col"><p>nombre comic</p></div>
                        <div class="col">precio:0,0€</div>
                       
                </div>
                <hr>
                <div class="row  mt-5">
                        <div class="col "><img src="media/images/spiderman negro.png" alt="" class="imagencarrito "></div>
                        <div class="col"><p>nombre comic</p></div>
                        <div class="col">precio:0,0€</div>
                       
                </div>
                <hr>
                <div class="row">
                    <div class="col"> </div>
                    <div class="col"> </div>
                    <div class="col text-inline"><form action="" class=" form-inline">total : 0,00€<button class="btn btn-orange form-control" disabled>pagar</button> </form></div>
                </div>
            </div>
          </div>

        </main>



        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>