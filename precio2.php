<?php include("includes/a_config.php"); 
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/model/Comic.php';

session_start();
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
              <img id="imagenComic" src="media/images/archivo de las tormentas.png" alt="">
            </div>

          </div>
          <div class="col">
            <div class="row">
              <div class="col">
                <div class="bg-danger text-center">
                  <h4>BRANDON ANDERSON</h4>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <div class="bg-danger text-center">
                      <h4>palabras radiantes</h4>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h3>35$</h3>
                  </div>
                  <div class="col">
                    <form id="form">
                      <p class="clasificacion">
                        
                        <input id="radio1" type="radio" name="estrellas" value="5"  disabled checked >
                        <!--
    --><label for="radio1">★</label>
                        <!--
    --><input id="radio2" type="radio" name="estrellas" disabled value="4" >
                        <!--
    --><label for="radio2">★</label>
                        <!--
    --><input id="radio3" type="radio" name="estrellas" disabled  value="3" >
                        <!--
    --><label for="radio3">★</label>
                        <!--
    --><input id="radio4" type="radio" name="estrellas" disabled value="2">
                        <!--
    --><label for="radio4">★</label>
                        <!--
    --><input id="radio5" type="radio" name="estrellas" disabled value="1">
                        <!--
    --><label for="radio5">★</label>

                      </p>
                    </form>
                  </div>

                </div>
                <div class="row">
                  <div class="col">
                    <p>La aclamada continuación de El camino de los reyes es, como el primer volumen de "El Archivo de las Tormentas", el resultado de más de una decada de construcción y escritura de universos, convertida en una obra maestra de la fantasía contemporánea en diez volúmenes.</p>
                  </div>
                </div>

              </div>

            </div>

            <hr>

            <div class="row">
              <div class="col">
                <form action="carrito.php">
                  <button class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </form>
              </div>
            </div>

          </div>

        </div>
        <div class="row mt-5">
          <div class="col">
            <div class="row">
              <div class="col">
                <div class="text-center bg-dark">
                  <h1 class=" text-white">productos relacionados</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card-deck">

                  <div class="card">
                    <img class="card-img-top" src="media/images/spiderman negro.png" alt="Card image">
                    <div class="card-body text-center">
                      <h2 class="card-title">Superior Spider-man</h2>
                      <p class="card-text">Spider-Man: El último deseo fue el final del volumen uno de El Asombroso Spider-Man y el inicio de El Spider-Man Superior, una controvertida versión del personaje, en la que el Doctor Octopus poseía el cuerpo de Peter Parker.</p>
                    </div>
                    <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                  </div>


                  <div class="card">
                    <img class="card-img-top" src="media/images/thanos.png" alt="Card image">
                    <div class="card-body text-center">
                      <h2 class="card-title">El Guantelete Del Infinito</h2>
                      <p class="card-text">El Guantelete del Infinito: Héroes Marvel es un tomo que recoge las historias de Doctor Extraño, Quasar y Spider-man durante los eventos del crossover de El Guantelete del Infinito.</p>
                    </div>
                    <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                  </div>

                  <div class="card">
                    <img class="card-img-top" src="media/images/spiderman ultimate.png" alt="Card image">
                    <div class="card-body text-center">
                      <h2 class="card-title">Ultimate Spider-man</h2>
                      <p class="card-text">Ultimate Spider-man: Origen es el tomo con el que arranca la reedición de la colección Ultimate Spider-man que Panini está publicado actualmente. Así fue el origen y actualización de Spider-man, si hubiera nacido en el siglo XXI.</p>
                    </div>
                    <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include("includes/Editor.php"); ?>
        <div style="margin-top: 5%; " name="comentarios" >
          <h5 class="text-dark">Nombre Usuario</h5>
          <hr>
          <textarea style="width: 100%; resize: none;" disabled>comentario...</textarea>
        </div>

        <div style="margin-top: 5%;" name="comentarios" >
          <h5 class="text-dark">Nombre Usuario</h5>
          <hr>
          <textarea style="width: 100%; resize: none;" disabled>comentario...</textarea>
        </div>
        <div style="margin-top: 5%; display: none; " name="comentarios" >
          <h5 class="text-dark">Nombre Usuario</h5>
          <hr>
          <textarea style="width: 100%; resize: none;" disabled>comentario...</textarea>
        </div>

        <div style="margin-top: 5%; display: none;" name="comentarios" >
          <h5 class="text-dark">Nombre Usuario</h5>
          <hr>
          <textarea style="width: 100%; resize: none;" disabled>comentario...</textarea>
        </div>
        <div style="margin-top: 5%; display: none; " name="comentarios" >
          <h5 class="text-dark">Nombre Usuario</h5>
          <hr>
          <textarea style="width: 100%; resize: none;" disabled>comentario...</textarea>
        </div>

        <div style="margin-top: 5%; display: none;" name="comentarios" >
          <h5 class="text-dark">Nombre Usuario</h5>
          <hr>
          <textarea style="width: 100%; resize: none;" disabled>comentario...</textarea>
        </div>
        <div style="margin-top: 5%; display: none; " name="comentarios" >
          <h5 class="text-dark">Nombre Usuario</h5>
          <hr>
          <textarea style="width: 100%; resize: none;" disabled>comentario...</textarea>
        </div>

        <div style="margin-top: 5%; display: none;" name="comentarios" >
          <h5 class="text-dark">Nombre Usuario</h5>
          <hr>
          <textarea style="width: 100%; resize: none;" disabled>comentario...</textarea>
        </div>
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