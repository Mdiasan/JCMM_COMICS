<?php 
if(isset($_SESSION['carrito'])){
  $total=0;
  foreach ($_SESSION["carrito"] as $key => $value) {
    $total += $value->precio * $value->cantidad;
  }
 
}

?>
<nav class="navbar navbar-dark bg-danger navbar-expand-lg">
  <a class="navbar-brand" href="index.php">
    <img src="/media/images/logo-jcmm-128x128.png" width="30" height="30" alt="logo">

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-2">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <?php if(!isset($_SESSION['usuario'])){ ?>

        <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Iniciar Sesion <span class="sr-only"></span></a>
        <?php }else{ ?>
          <a class="nav-link" href="usuario.php"><i class="fas fa-user"></i> <?php echo $_SESSION['usuario']->nombre ?> <span class="sr-only"></span></a>

        <?php } ?>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Comics
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="ZonaMarvel.php">Zona Marvel</a>
          <a class="dropdown-item" href="ZonaDC.php">Zona DC</a>
        </div>
      </li>

      <li class="nav-item dropdown d-none d-md-block">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Juegos
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="mistborn.php">Nacidos de la bruma</a>
          <a class="dropdown-item" href="encontrar.php">Parejas superheroes</a>
          <a class="dropdown-item" href="pong.php">Pong</a>

        </div>
      </li>      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Otros
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="juegosMesa.php">Juegos mesa/rol</a>
          <a class="dropdown-item" href="figuras.php">Figuras</a>
          <a class="dropdown-item" href="videos.php">Videos</a>

        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="manga.php">Manga</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="fantasia.php">Libros</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="ofertas.php">Ofertas</a>
      </li>

      
    </ul>

    <div class="ml-auto">
      <form class="form-inline">
        <div class="mr-3"> <a class="fas fa-shopping-cart text-white" href="carrito.php"></a>
          <a class="text-white" href="carrito.php"> <?php 
          if(isset($_SESSION['carrito'])){
            echo $total ."€";}else
            { echo " 0,00€"; 
            } ?>
            </a></div>

        <input class="form-control mr-3 " type="text" placeholder="Busca aqui tu cómic">
        <button class="btn btn-warning  d-block d-sm-inline" type="submit">Buscar</button>
      </form>

    </div>
</nav>