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
                    <li class="list-group-item"><a href="index.php">inicio</a></li>
                    <li class="list-group-item"><a href="ZonaMarvel.php">Zona Marvel</a></li>
                    <li class="list-group-item"><a href="ZonaDC.php">zona DC</a></li>
                    <li class="list-group-item"><a href="fantasia.php">Rincón de la fantasía</a></li>
                    <li class="list-group-item"><a href="juegos.php">juegos de mesa/rol</a></li>
                    <li class="list-group-item"><a href="productos.php">figuras</a></li>
                    <li class="list-group-item"><a href="productos.php">manga</a></li>
                    <li class="list-group-item"><a href="ofertas.php">ofertas</a></li>
                </ul>

            </div>
            <div class=" col-sm-9 mt-3 ">

                <div class="row">
                    <div class="col  bg-dark text-center ">
                        <h4>productos</h4>
                    </div>
                </div>
                <div class="col mt-5 mb-5">
                    <div class="card-deck">

                        <div class="card">
                            <img class="card-img-top" src="media/images/spiderman negro.png" alt="Card image">
                            <div class="card-body text-center">
                                <h4 class="card-title">comic 1</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                                <a href="#" class="btn btn-warning">comprar</a>
                            </div>
                        </div>


                        <div class="card">
                            <img class="card-img-top" src="media/images/thanos.png" alt="Card image">
                            <div class="card-body text-center">
                                <h4 class="card-title">comic 1</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                                <a href="#" class="btn btn-warning">comprar</a>
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="media/images/spiderman ultimate.png" alt="Card image">
                            <div class="card-body text-center">
                                <h4 class="card-title">comic 1</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                                <a href="#" class="btn btn-warning">comprar</a>
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