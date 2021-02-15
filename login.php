<?php include("includes/a_config.php"); ?>
<?php 
require_once 'bbdd/Controller/UsuarioController.php';
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/model/Comic.php';

session_start();
























// fin logueo google


$errorEnLogueo=false;

if(isset($_POST['Enviar'])){
    
    $pass =  md5($_POST['contraseña']);
    $cliente = UsuarioController::logueoCliente($_POST['usuario'],$pass);
    if(!$cliente){
        $errorEnLogueo=true;

    }else{
        $_SESSION['usuario']=$cliente;
        header("Location:./index.php");
    }
   

   
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

            <div class="row">

                <div class="col ">

                   
                    <div class="p-1 formLogeo">
                    <h1 class="text-dark">logueate</h1>
                    <div class="errorDiv">usuario o  contraseña incorrectos vuelva a intentarlo</div>
                        <form action=""  class="needs-validation"   method="POST" novalidate>


                            <div class="form-group"> <!--  DIV GROUP DE USUARIO-->
                               
                                <label for="usuario">Usuario</label>
                                <input type="text" name="usuario" class="form-control" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div> <!-- FIN  DIV GROUP DE USUARIO-->
                            <div class="form-group"> <!--  DIV GROUP DE CONTRASEÑA-->
                                <label for="contraseña">Contraseña</label>
                                <input type="password" name="contraseña" class="form-control" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>  <!-- fin DIV GROUP DE CONTRASEÑA-->
                         <div class="text-center">
                         <input type="submit" class="form-control-3 btn btn-warning mt-3" name="Enviar">
                        </div>




                        </form>
                    </div>
                    <br>
                    <div id="gSignInWrapper" class="formLogeo text-center">
                        <span>Inicia sesíon con Google:</span>
                        <br>
                        <div id="customBtn" class="customGPlusSignIn">
                            <span class="icon"></span>
                            <span class="buttonText" id="googleSignInBtn" ><a href="<?php echo $google_client->createAuthUrl() ?>">Google</a> </span>
                        </div>
                    </div>
                    <div class="text-center">
                         <br> ¿No tienes cuenta? registrate <a href="crearUsuario.php">AQUÍ!</a>
                    </div>

                </div>


            </div>
      
        </main>

        <div class="modal fade" id="errorLogueo">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="alert alert-danger alert-dismissible fade show">
    		 <button type="button" class="close" data-dismiss="modal">&times;</button>
    		<strong>Error!</strong> usuario o contraseña incorrectos
  			</div>
        </div>
        
       
        
      </div>
    </div>
  </div>
  <?php if($errorEnLogueo){ ?>
          <script> $('#errorLogueo').modal('show');</script>
        <?php }?>
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

</html>