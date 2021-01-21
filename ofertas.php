<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <?php include("includes/design-top.php"); ?>


        <div class="row">

            <div class=" col-sm-3 mt-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="index.php">Inicio</a></li>
                    <li class="list-group-item"><a href="ZonaMarvel.php">Zona Marvel</a></li>
                    <li class="list-group-item"><a href="ZonaDC.php">Zona DC</a></li>
                    <li class="list-group-item"><a href="fantasia.php">Rincón de la fantasía</a></li>
                    <li class="list-group-item"><a href="juegos.php">Juegos de mesa/rol</a></li>
                    <li class="list-group-item"><a href="productos.php">Figuras</a></li>
                    <li class="list-group-item"><a href="productos.php">Manga</a></li>
                    <li class="list-group-item"><a href="ofertas.php">Ofertas</a></li>
                </ul>

            </div>
            <div class=" col-sm-9 mt-3 ">

                <div class="row">
                    <div class="col  bg-dark text-center ">
                        <h4>ultimas ofertas</h4>
                    </div>
                </div>
                <div class="col mt-5 mb-5">
                    <div class="card-deck">

                        <div class="card">
                            <img class="card-img-top" src="media/images/spiderman negro.png" alt="Card image">
                            <div class="card-body text-center">
                                <h4 class="card-title">Ultimate Spider-man</h4>
                                <p class="card-text">Ultimate Spider-man: Origen es el tomo con el que arranca la reedición de la colección Ultimate Spider-man que Panini está publicado actualmente. Así fue el origen y actualización de Spider-man, si hubiera nacido en el siglo XXI</p>
                                <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> comprar</a>
                            </div>
                        </div>


                        <div class="card">
                            <img class="card-img-top" src="media/images/thanos.png" alt="Card image">
                            <div class="card-body text-center">
                                <h4 class="card-title">El Guantelete del Infinito</h4>
                                <p class="card-text">Para Thanos, el Guantelete del Infinito es el Santo Grial, el premio definitivo por su adoración hacia la muerte. Con él, lo controla todo. Liderados por Adam Warlock, los superhéroes de la Tierra representan la última esperanza del Universo.</p>
                                <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> comprar</a>
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="media/images/spiderman ultimate.png" alt="Card image">
                            <div class="card-body text-center">
                                <h4 class="card-title">Spiderman</h4>
                                <p class="card-text">El mayor acontecimiento arácnido del año continúa, de la mano de J.J. Abrams (Star Trek, Perdidos), Henry Abrams y Sara Pichelli (Spider-Man, Los 4 Fantásticos). El primer choque con Cadavérico no sale bien. ¿Cuál será el impacto de este villano?</p>
                                <a href="precio2.php" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="row"></div>


        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>