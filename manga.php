<?php include("includes/a_config.php");
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/model/Comic.php';

session_start();
if (!isset($_POST['pagina'])) {
  $_POST['pagina'] = 0;
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


    <div class="row">

      <?php include("includes/navigation-2.php"); ?>

      <div class=" col-sm-9 mt-3 ">

        <div class="row">
          <div class="col  bg-dark text-center ">
            <h4>Manga</h4>
          </div>
        </div>
        <div class="col mt-5 ">
          <div class="card-deck mt-5 mb-5">
            <?php $arrayNovedades = ComicController::getComicPorTipoPaginado($_POST['pagina'], 3, "Manga");
            foreach ($arrayNovedades as $key => $value) {


            ?>

              <div class="w-100 d-none d-sm-block d-lg-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="card">
                <a href="precio2.php?articulo=<?php echo $value->id; ?>"><img class="card-img-top img-fluid" src="media/images/<?php echo $value->imagen ?>" alt="Card image"> </a>
                <div class="card-body text-center">
                  <h2 class="card-title"><?php echo $value->titulo ?></h2>
                  <p class="card-text"><?php echo $value->descripcion ?></p>
                </div>
                <a href="precio2.php?articulo=<?php echo $value->id ?>" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Comprar</a>
              </div>
            <?php  } ?>

          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">

              <li class="page-item ">
                <a class="page-link">
                  <form action="" method="POST"><button type="submit" class="btn btn-warning" name="pagina" value=0>Primera</button></form>
                </a>
              </li>
              <?php

              $numero = ComicController::getNumeroComicPorTipoPaginado("Manga");

              $numero = ceil(($numero / 3));
              for ($i = 0; $i < $numero; $i++) {

              ?>
                <li class="page-item"><a class="page-link">
                    <form action="" method="POST"><button type="submit" class="btn btn-warning" name="pagina" value=<?php echo ($i)  ?>><?php echo ($i + 1) ?></button></form>
                  </a></li>

              <?php } ?>
              <li>
                <a class="page-link">
                  <form action="" method="POST"><button type="submit" class="btn btn-warning" name="pagina" value=<?php echo $numero - 1  ?>>Última</button></form>
                </a>
              </li>
            </ul>
          </nav>

        </div>


      </div>
    </div>


    <div class="row"></div>


    <?php include("includes/footer.php"); ?>
  </div>
</body>

</html>