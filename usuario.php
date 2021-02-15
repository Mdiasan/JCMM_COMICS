<?php include("includes/a_config.php");
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/model/Comic.php';
require_once 'bbdd/Controller/UsuarioController.php';


session_start();

if(!isset($_SESSION['usuario'])){
    header('Location:login.php');
}


if(isset($_POST["usuario"])){
        
   
    $usuario =  new Usuario("",$_POST['usuario'],"",$_POST['nombre'],$_POST['apellidos'],$_POST['mail']);
    $_SESSION['usuario']->usuario=$usuario->usuario;
    $_SESSION['usuario']->nombre=$usuario->nombre;
    $_SESSION['usuario']->apellidos=$usuario->apellidos;
    $_SESSION['usuario']->mail=$usuario->mail;
    
    UsuarioController::update($_SESSION['usuario']);
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

        <main>
            <div class=row>
                <div class="col-8 ">
                    
                    <div class="formLogeo">
                                <div class="text-center"><h1 class=" text-dark">Modificar mis datos </h1></div>
                        <form action="" class="needs-validation" method="POST" novalidate>
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" name="usuario" class="form-control" value="<?php echo $_SESSION['usuario']->usuario ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" value="<?php echo $_SESSION['usuario']->nombre ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" value="<?php echo $_SESSION['usuario']->apellidos ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Mail</label>
                                <input type="text" name="mail" class="form-control" value="<?php echo $_SESSION['usuario']->mail ?>" required>
                            </div>                       
                            <div class="text-center">
                                <input class="form-control-3 btn btn-warning mt-3  " type="submit" id="btn" value="Enviar" >

                            </div>
                        </form>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                    <?php if(isset($_SESSION['user_image'])){ ?> 
                        <img class=" card-body-user bg-white img-fluid" src="<?php echo $_SESSION['user_image'] ?>" alt="Card image">
                 <?php   }else{ ?>
                  <img class=" card-body-user bg-white img-fluid" src="media/images/user.png" alt="Card image">

                 <?php } ?>
                  <div class="card-body-user  text-center">
                    <h2 class="card-title text-white"><?php echo $_SESSION['usuario']->usuario ?></h2>
                    <p class="card-text text-white"> <?php echo $_SESSION['usuario']->mail ?></p>
                  </div>
                </div>
                </div>
            </div>

        </main>

        <?php include("includes/footer.php"); ?>
    </div>
</body>
<script>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script>
    function validarContraseña() {
        var contrasena = document.getElementById('contraseña').value;
        var repite = document.getElementById('recontraseña').value;
        var btn = document.getElementById('btn');


        if (contrasena != '') {


            if (contrasena == repite) {
                document.getElementById('error').style.display = 'none';
                btn.disabled = false;
            } else {
                document.getElementById('error').style.display = 'block';
                btn.disabled = true;
            }

        } else {
            document.getElementById('error').style.display = 'none';
        }
    }


    setInterval('validarContraseña()', 10);
</script>

</html>