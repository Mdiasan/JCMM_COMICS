<?php include("includes/a_config.php");

require_once 'bbdd/Controller/UsuarioController.php';
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/model/Comic.php';

session_start();

    if(isset($_SESSION['usuario'])){
        header('Location:./index.php');
    }
    if(isset($_POST["usuario"])){
        
       
        $usuario =  new Usuario("",$_POST['usuario'],"",$_POST['nombre'],$_POST['apellidos'],$_POST['mail']);
        UsuarioController::registrar($usuario);
        $_SESSION['usuario']=UsuarioController::logeoConMail($usuario->mail);
        header('Location:./index.php');
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

            <div class="col ">
                <h1>Crear usuario</h1>
                <div class="formLogeo">

                    <form action=""  class="needs-validation"   method="POST"  novalidate  >
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?php if(isset($_SESSION['google'])){ echo $_SESSION['google']->nombre;}   ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" value="<?php if(isset($_SESSION['google'])){ echo $_SESSION['google']->apellidos;}  ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Mail</label>
                        <input type="text" name="mail" class="form-control" value="<?php if(isset($_SESSION['google'])){ echo $_SESSION['google']->mail;}  ?>" required>
                    </div>
           
                    </div>
                        <div class="text-center"> 
                            <input class="form-control-3 btn btn-warning mt-3"  type="submit" id="btn"  value="Enviar"  disabled >

                        
                        </div>
                    </form>
                    <div class="form-group text-center formLogeo" >
                        
                    <div id="mainCaptcha">
                    

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
<?php include("includes/captcha.php"); ?>

<script>
var chaptcha= false;
  

    function comprobarValidacionCaptcha(){
        
        if(ValidaWeb()){
            chaptcha=true;
            console.log(chaptcha);
        }else{
            chaptcha=false;
        }
    }

    setInterval("valido()",10);

   function valido(){
    console.log(chaptcha);
        if(chaptcha){
            var btn = document.getElementById('btn');
            btn.disabled=false;
    }
    }
   
    
    

</script>


</html>