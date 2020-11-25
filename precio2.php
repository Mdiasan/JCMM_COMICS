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
            <div class="col-sm-3 mt-5">
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
            <div class="col-sm-9 mt-5">
               <div class="row">
                    <div class="col">
                        <div class="text-center">
                          <img id="imagenComic" src="media/images/archivo.png" alt="">
                        </div>
                   
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="bg-primary text-center">
                                <h3>ficha</h3>
                                </div>
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                               <div class="row">
                                   <div class="col">
                                       <div class="bg-primary text-center"><h4>palabras radiantes</h4></div>
                                       
                                    </div>
                                </div>
                               <div class="row">
                                   <div class="col">
                                       <p>35$</h4>
                                    </div>
                                </div>
                               <div class="row">
                                   <div class="col">
                                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, reiciendis.</h4>
                                    </div>
                                </div>
                               
                            </div>

                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col">
                                <form action="">
                                    <button class="btn btn-warning">añadir al carro</button>
                                </form>
                            </div>
                        </div>
                    </div>
               </div> 
               <div class="row mt-5">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="text-center bg-dark">
                <h1 class=" text-white">productos relacionados</h1>
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
                  <a href="#" class="btn btn-warning">comprar</a>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top" src="media/images/thanos.png" alt="Card image">
                <div class="card-body text-center">
                <h2 class="card-title">comic 1</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                  <a href="#" class="btn btn-warning">comprar</a>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="media/images/spiderman ultimate.png" alt="Card image">
                <div class="card-body text-center">
                <h2 class="card-title">comic 1</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente magni facere doloribus dolor possimus asperiores neque dolorum illo ad.</p>
                  <a href="#" class="btn btn-warning">comprar</a>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
            </div>
        </div>
      
        <?php include("includes/footer.php"); ?>
    </div>


</body>

</html>