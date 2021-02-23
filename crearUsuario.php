<?php include("includes/a_config.php");

require_once 'bbdd/Controller/UsuarioController.php';
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/model/Comic.php';

session_start();
if(isset($_SESSION['usuario'])){
    header('Location:./index.php');
}

    if(isset($_POST["usuario"])){
        
        $passwordCifrada =   md5($_POST['contraseña']);
        $usuario =  new Usuario("",$_POST['usuario'],$passwordCifrada,$_POST['nombre'],$_POST['apellidos'],$_POST['mail']);
        UsuarioController::registrar($usuario);
    }



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
                <h1 class="text-dark">Crear usuario</h1>
                <div class="formLogeo" id="formLogueo">

                    <form action=""  class="needs-validation"   method="POST" novalidate  >
                    <div class="form-group">
                        <label for="usuario" class="text-dark">Usuario</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="text-dark">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos" class="text-dark">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="text-dark">Mail</label>
                        <input type="text" id="mail" name="mail" class="form-control" required>
                    </div>
                    <div class="form-group"> 
                        <label for="contraseña" class="text-dark">Contraseña</label>
                        <input type="password" name="contraseña" id="contraseña" class="form-control"    id="contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="recontraseña" class="text-dark">Repite la contraseña</label>
                        <input type="password" name="recontraseña"   id="recontraseña"class="form-control"     required>
                       
                        <div class="invalid-feedback"></div>
                        <div class="errorDiv" id="error"> Las contraseñas no coinciden por favor revisalo </div>
                        

                    </div>
                    <div id="" class=" text-center formLogeo" >
                        
                                 <div  class="text-center formLogeo" id="mainCaptcha"></div>
                    

                    </div>
                    
                        <div class="text-center"> 
                            <input class="form-control-3 btn btn-warning mt-3"  type="submit" id="btn"  value="Enviar"   >

                        
                        </div>
                    </form>
                    
                    
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
   function validarContraseña(){
        var contrasena= document.getElementById('contraseña').value;
        var repite = document.getElementById('recontraseña').value;
        var btn = document.getElementById('btn');


        if(contrasena!=''){

       
        if(contrasena == repite){
            document.getElementById('error').style.display='none';
            return true;
        }else{
            document.getElementById('error').style.display='block';
           return false;
        }

    }else{
        document.getElementById('error').style.display='none';
    }
    }

    function comprobarValidacionCaptcha(){
        
        if(ValidaWeb()){
            chaptcha=true;
            return chaptcha;
        }else{
            chaptcha=false;
            return chaptcha;
        }
    }


   function valido(){
    console.log(chaptcha);
        if(chaptcha){


    }
    }

    $('#btn').click(function(event){
        console.log('hola')
        console.log('contraseñas correctas'+validarContraseña());
        if(comprobarValidacionCaptcha() && validarContraseña() ){
            
            console.log('correcto amigo')
            $('formLogueo').submit();

        }else{
            event.preventDefault();
        }
    });

    
   
    
    

</script>


</html>