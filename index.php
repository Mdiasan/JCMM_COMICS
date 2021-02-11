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
                   <a href="precio2.php?articulo=<?php echo $value->id; ?>" ><img class="card-img-top img-fluid" src="media/images/<?php echo $value->imagen ?>" alt="Card image"> </a>
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
                <a href="precio2.php?articulo=<?php echo $value->id; ?>" ><img class="card-img-top img-fluid" src="media/images/<?php echo $value->imagen ?>" alt="Card image"> </a>
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
                <a href="precio2.php?articulo=<?php echo $value->id; ?>" ><img class="card-img-top img-fluid" src="media/images/<?php echo $value->imagen ?>" alt="Card image"> </a>
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