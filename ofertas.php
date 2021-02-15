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

            <div class=" col-sm-9 mt-3 ">

                <div class="row">
                    <div class="col  bg-dark text-center ">
                        <h4>ultimas ofertas</h4>
                    </div>
                </div>
                <div class="col mt-5 mb-5">
                    <div class="card-deck">
                    <?php $arrayNovedades= ComicController::getOfertas(4);
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
                  <a href="precio2.php?articulo=<?php echo $value->id; ?>"><img class="card-img-top img-fluid" src="media/images/<?php echo $value->imagen ?>" alt="Card image"> </a>
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






       
        <div class="row"></div>


        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>