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
     
        <?php if(!isset($_SESSION['usuario'])){ ?>
          <li class="nav-item active"><a class="nav-link" href="login.php"><i class="fas fa-user"></i> Iniciar Sesion <span class="sr-only"></span></a></li>
        <?php }else{ ?>

          <li class="nav-item active dropdown">
          <a class="nav-link" href="usuario.php"  data-toggle="dropdown"><i class="fas fa-user"></i> <?php echo $_SESSION['usuario']->nombre ?> <span class="sr-only"></span></a>

        <div class="dropdown-menu">
        <?php if($_SESSION['usuario']->rol=='admin'){  ?>
            <a class="dropdown-item" href="zonaAdmin.php">Zona Administrador</a>
        <?php } ?>
          <a class="dropdown-item" href="usuario.php">Mis Datos</a>
          <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
          
          
        </div>
      </li>
        <?php } ?>
       
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
          <a class="dropdown-item" href="videos.php">Video</a>

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
      <form class="form-inline "  action="resultadoBusqueda.php" method="POST">
        <div class="mr-3"> <a class="fas fa-shopping-cart text-white" href="carrito.php"><span class="sr-only" >carrito</span></a>
          <a class="text-white" href="carrito.php"> <?php 
          if(isset($_SESSION['carrito'])){
            echo $total ."€";}else
            { echo " 0,00€"; 
            } ?>
            </a></div>
          <label for="buscar" class="d-none">busqueda comic</label>
          <input type="text" class="form-control" name="buscar" id="buscar">
          <button class="btn btn-warning" name="busqueda">buscar</button>
      </form>

    </div>
</nav>