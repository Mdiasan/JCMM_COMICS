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
        <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Iniciar Sesion <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Comics
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="ZonaMarvel.php">zona Marvel</a>
          <a class="dropdown-item" href="ZonaDC.php">zona DC</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="libros.php" id="navbardrop" data-toggle="dropdown">
          libros
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="fantasia.php">Rincon de la fantasia</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="libros.php" id="navbardrop" data-toggle="dropdown">
          otros
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="productos.php">juegos mesa/rol</a>
          <a class="dropdown-item" href="productos.php">figuras</a>
          <a class="dropdown-item" href="productos.php">manga</a>
          <a class="dropdown-item" href="mistborn.php">juego nacidos de la bruma</a>
          <a class="dropdown-item" href="">parejas superheroes</a>
          <a class="dropdown-item" href="pong.php">pong</a>

        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="ofertas.php">ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="videos.php">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contacto</a>
      </li>

      
    </ul>

    <div class="ml-auto">
      <form class="form-inline">
        <div class="mr-3"> <a class="fas fa-shopping-cart text-white" href="carrito.php"></a>
          <a class="text-white" href="carrito.php"> 0,00€</a></div>

        <input class="form-control mr-3 " type="text" placeholder="Busca aqui tu cómic">
        <button class="btn btn-warning  d-block d-sm-inline" type="submit">Buscar</button>
      </form>

    </div>
</nav>