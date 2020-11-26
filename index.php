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
                <img src="media/images/novedad.png" alt="">
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
      <!-- MARVEL -->


      <div class="row mt-5">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="text-center bg-dark">
                <h1 class=" text-white">novedades</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <div class="card-deck">

              <div class="card">
                <img class="card-img-top" src="media/images/spiderman negro.png" alt="Card image">
                <div class="card-body text-center">
                <h2 class="card-title">comic 1</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                  <a href="precio2.php" class="btn btn-warning">comprar</a>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top" src="media/images/thanos.png" alt="Card image">
                <div class="card-body text-center">
                <h2 class="card-title">comic 1</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                  <a href="precio2.php" class="btn btn-warning">comprar</a>
                </div>
              </div>

              

              <div class="card">
                <img class="card-img-top" src="media/images/spiderman ultimate.png" alt="Card image">
                <div class="card-body text-center">
                <h2 class="card-title">comic 1</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                  <a href="precio2.php" class="btn btn-warning">comprar</a>
                </div>
              </div>
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

              <div class="card">
                <img class="card-img-top" src="media/images/la broma asesina.png" alt="Card image">
                <div class="card-body text-center">
                <h2 class="card-title">comic 1</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                  <a href="precio2.php" class="btn btn-warning">comprar</a>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top" src="media/images/el caballero blancp.png" alt="Card image">
                <div class="card-body text-center">
                  <h2 class="card-title">comic 1</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                  <a href="precio2.php" class="btn btn-warning">comprar</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="media/images/muerte de la familia.png" alt="Card image">
                <div class="card-body text-center">
                <h2 class="card-title">comic 1</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                  <a href="precio2.php" class="btn btn-warning">comprar</a>
                </div>
              </div>
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