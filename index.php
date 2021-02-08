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

    <main>


      <div class="row">
        <div class="col">
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- indicadores -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="media/images/novedad.png" alt="">
              </div>
              <div class="carousel-item">
                <img src="media/images/novedad_vdi.png" alt="">
              </div>
              <div class="carousel-item">
                <img src="media/images/novedad.png" alt="">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div>
        </div>
      </div>

      <!-- PRODUCTOS ORDENADOS POR CATEGORIAS -->
      <!-- NOVEDADES -->


      <div class="row mt-5">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="text-center bg-dark">
                <h1 class=" text-white">Novedades</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card-deck">
                <?php $arrayNovedades= ComicController::getNovedades(4);
                  foreach ($arrayNovedades as $key => $value) {
                  
                
                  ?>
                  <?php 
                      if($key ==2){
                        ?>
                        
                        <div class="w-100 d-none d-sm-block d-md-none">
                  <!-- wrap every 2 on sm-->
                </div>

                        
                        
                        <?php
                      }
                      ?>
                  
                  
                  <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/<?php echo $value->imagen ?>" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title"><?php echo $value->titulo ?></h2>
                    <p class="card-text"><?php echo $value->descripcion ?></p>
                  </div>
                  <a href="precio2.php?articulo=<?php echo $value->id?>" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>
                      
                  <?php  } ?>
  <!--              <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/guantelete del infinito.png" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title">El Guantelete del infinito</h2>
                    <p class="card-text">Cuando Jim Starlin decidió resucitar a Thanos, que llevaba veinte años muerto (unos diez en tiempo Marvel) lo hizo en la colección de Estela Plateada, la cual era perfecta para narrar eventos de índole cósmica, pero el problema, más por suerte que por desgracia, era que lo que Starlin había pensado para Thanos tenía que incluir por fuerza a casi todos los héroes Marvel del momento.</p>
                  </div>
                  <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>


                <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/spiderman ultimate.png" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title">Ultimate Spider-man</h2>
                    <p class="card-text">Ultimate Spider-man: Origen es el tomo con el que arranca la reedición de la colección Ultimate Spider-man que Panini está publicado actualmente. Así fue el origen y actualización de Spider-man, si hubiera nacido en el siglo XXI.</p>
                  </div>
                  <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>

                <div class="w-100 d-none d-sm-block d-md-none">
                  S
                </div>


                <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/muerte de la familia.png" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title">Una Muerte En La Familia</h2>
                    <p class="card-text">Publicado originalmente en diciembre de 1983. La primera aparición de Jason Todd como Robin. El nuevo compañero de Batman acudirá en su rescate en plena batalla contra el Joker en Guatemala.</p>
                  </div>
                  <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>
                <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/la broma asesina.png" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title">la broma asesina</h2>
                    <p class="card-text">La broma asesina es una historia centrada en el Joker, la antítesis de Batman por definición, y en la relación que éste y Batman han llegado a desarrollar a lo largo de los años.</p>
                  </div>
                  <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="text-center bg-dark">
                <h1 class=" text-white">merchandising</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card-deck">
              <?php $arrayNovedades= ComicController::getComicPorTipo('figura',4);
                  foreach ($arrayNovedades as $key => $value) {
                  
                
                  ?>
                  <?php 
                      if($key ==2){
                        ?>
                        
                        <div class="w-100 d-none d-sm-block d-md-none">
                  <!-- wrap every 2 on sm-->
                </div>

                        
                        
                        <?php
                      }
                      ?>
                <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/<?php echo $value->imagen ?>" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title"><?php echo $value->titulo ?></h2>
                    <p class="card-text"><?php echo $value->descripcion ?></p>
                  </div>
                  <a href="precio2.php?articulo=<?php echo $value->id?>" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>
                <?php  } ?>
<!--

                <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/deku.jpg" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title">deku</h2>
                    <p class="card-text">Protagonista de la serie de heroes my hero academia en una mitica pose </p>
                  </div>
                  <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>

                <div class="w-100 d-none d-sm-block d-md-none">
                 
                </div>


                <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/figura de goku.jpg" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title">son goku</h2>
                    <p class="card-text">Protagonista de la serie de dragon ball en una fantastica pose.</p>
                  </div>
                  <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>
                <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/broly ssj4.jpg" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title">broly super saiyan 4</h2>
                    <p class="card-text">Broly en una mitica transformacion dentro del no canon </p>
                  </div>
                  <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="text-center bg-dark">
                <h1 class=" text-white">DC</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card-deck">
              <?php $arrayNovedades= ComicController::getComicPorNombreEditorial("DC",4);
                  foreach ($arrayNovedades as $key => $value) {
                  
                
                  ?>
                  <?php 
                      if($key ==2){
                        ?>
                        
                        <div class="w-100 d-none d-sm-block d-md-none">
                  <!-- wrap every 2 on sm-->
                </div>

                        
                        
                        <?php
                      }
                      ?>
                <div class="card">
                  <img class="card-img-top img-fluid" src="media/images/<?php echo $value->imagen ?>" alt="Card image">
                  <div class="card-body text-center">
                    <h2 class="card-title"><?php echo $value->titulo ?></h2>
                    <p class="card-text"><?php echo $value->descripcion ?></p>
                  </div>
                  <a href="precio2.php?articulo=<?php echo $value->id?>" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
                </div>
                <?php  } ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include("includes/footer.php"); ?>
  </div>


</body>

</html>