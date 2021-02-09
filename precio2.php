<?php include("includes/a_config.php"); 
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/Controller/UsuarioController.php';
require_once 'bbdd/Controller/ValoracionController.php';
require_once 'bbdd/model/Comic.php';
require_once 'bbdd/model/Valoracion.php';



session_start();

if(!isset($_GET["articulo"])){
  header("Location:/index.php");
}


if(isset($_POST['enviar'])){
  $c = ComicController::getComicById($_POST['enviar']);
  if(isset( $_SESSION['carrito'][$c->id])){
     $_SESSION['carrito'][$c->id]->cantidad ++ ;

  }else{
    $c->cantidad=1;
    $_SESSION['carrito'][$c->id]=$c;
  }

  header("Location:/carrito.php");
}
$comic = ComicController::getComicById($_GET['articulo']);

$valoracion = ValoracionController::getMediaValoraciones($comic);
$arrayComentarios= ValoracionController::getAll($comic);



?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php"); ?>

</head>

<body>


  <div class="container-fluid">
    <?php include("includes/design-top.php"); ?>


    <div class="row">

      <?php include("includes/navigation-2.php"); ?>

      <div class="col-sm-9 mt-5">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <img id="imagenComic" src="media/images/<?php echo $comic->imagen ?>" alt="">
            </div>

          </div>
          <div class="col">
            
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <div class="bg-danger text-center">
                      <h4><?php echo $comic->titulo ?></h4>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h3><?php echo $comic->precio ?>€</h3>
                  </div>
                  <div class="col">
                    <form id="form">
                      <p class="clasificacion">
                        
                        <input id="radio1" type="radio" name="estrellas" value="5"  disabled <?php if($valoracion == 5){echo 'checked';} ?> >
                        <!--
    --><label for="radio1">★</label>
                        <!--
    --><input id="radio2" type="radio" name="estrellas" disabled value="4"  <?php if($valoracion == 4){echo 'checked';} ?>>
                        <!--
    --><label for="radio2">★</label>
                        <!--
    --><input id="radio3" type="radio" name="estrellas" disabled  value="3"<?php if($valoracion == 3){echo 'checked';} ?> >
                        <!--
    --><label for="radio3">★</label>
                        <!--
    --><input id="radio4" type="radio" name="estrellas" disabled value="2"<?php if($valoracion == 2){echo 'checked';} ?>>
                        <!--
    --><label for="radio4">★</label>
                        <!--
    --><input id="radio5" type="radio" name="estrellas" disabled value="1"<?php if($valoracion == 1){echo 'checked';} ?>>
                        <!--
    --><label for="radio5">★</label>

                      </p>
                    </form>
                  </div>

                </div>
                <div class="row">
                  <div class="col">
                    <p><?php echo $comic->descripcion ?></p>
                  </div>
                </div>

              </div>

            </div>

            <hr>

            <div class="row">
              <div class="col">
                <form action="" method="POST">
                  <button class="btn btn-warning" type="submit" name="enviar" value=<?php echo $comic->id ?>><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </form>
              </div>
            </div>

          </div>

        </div>
        
        <?php include("includes/Editor.php"); ?>


        <?php 
        if($arrayComentarios==false){
        ?>
        
        <p>Aún no hay comentarios puedes escribir el primero </p>
        
        <?php 


        }else{
          foreach ($arrayComentarios as $key => $valora) {
            
            ?>
            
            <div style="margin-top: 5%; " name="comentarios" >
               <h5 class="text-dark"><?php  echo  UsuarioController::getNombre($valora->usuario)  ?></h5>
              <hr>
              <textarea style="width: 100%; resize: none;" disabled><?php echo $valora->comentario ?></textarea>
            </div>

            
            
            <?php
          }
        }
        
        ?>


       
        
        <div class="text-center">
          <button class="btn btn-primary"  style="margin: auto;" onclick="verTodosLosComentarios()" id="mas">ver más</button>
          <button class="btn btn-primary " style="display: none; margin: auto;" onclick="verMenosComentarios()" id="menos" >ver menos</button>
        
      
        </div>
      </div>
    </div>

    <?php include("includes/footer.php"); ?>
  </div>


</body>
<script>
  function verTodosLosComentarios(){
    var arrayDiv = document.getElementsByName("comentarios");
    arrayDiv.forEach(element => {
      element.style.display= 'block';
    });

    document.getElementById('mas').style.display='none';
    document.getElementById('menos').style.display='block';
    
  }
  function verMenosComentarios(){
    var arrayDiv = document.getElementsByName("comentarios");
      for (let index = 0; index < arrayDiv.length; index++) {
        if(index != 1 && index!= 0){
          arrayDiv[index].style.display='none';
        }
        
       
        
      }
    document.getElementById('mas').style.display='block';
    document.getElementById('menos').style.display='none';
  }
</script>
</html>