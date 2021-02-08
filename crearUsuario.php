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

            <div class="col ">
                <h1>Crear usuario</h1>
                <div class="formLogeo">

                    <form action=""  class="needs-validation"   method="POST" novalidate  >
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Mail</label>
                        <input type="text" name="mail" class="form-control" required>
                    </div>
                    <div class="form-group"> 
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control"    id="contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="recontraseña">Repite la contraseña</label>
                        <input type="password" name="recontraseña"   id="recontraseña"class="form-control"     required>
                       
                        <div class="invalid-feedback"></div>
                        <div class="errorDiv" id="error"> Las contraseñas no coinciden por favor revisalo </div>
                        

                    </div>
                    <div class="form-group">
                        <?php include("includes/captcha.php"); ?>
                    
                    </div>
                        <div class="text-center"> 
                            <input class="form-control-3 btn btn-warning mt-3"  onclick="ValidaWeb()" type="submit" id="btn"  value="Enviar"  disabled >

                        
                        </div>
                    </form>
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
   function validarContraseña(){
        var contrasena= document.getElementById('contraseña').value;
        var repite = document.getElementById('recontraseña').value;
        var btn = document.getElementById('btn');


        if(contrasena!=''){

       
        if(contrasena == repite){
            document.getElementById('error').style.display='none';
            btn.disabled=  false;
        }else{
            document.getElementById('error').style.display='block';
            btn.disabled=  true;
        }

    }else{
        document.getElementById('error').style.display='none';
    }
    }


    setInterval('validarContraseña()',10);


</script>
</html>