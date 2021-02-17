<?php include("includes/a_config.php"); 

require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/Controller/UsuarioController.php';

require_once 'bbdd/model/Comic.php';

session_start();
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();
  $usuario = new Usuario();
  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
    $usuario->nombre = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $usuario->apellidos = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $usuario->mail = $data['email'];
  }



  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }

  $_SESSION['google']=$usuario;
  if(UsuarioController::BuscarMail($_SESSION['google']->mail)){
      $_SESSION['usuario']=UsuarioController::logeoConMail($_SESSION['google']->mail);
  }else {
    header('Location:./registroGoogle.php');
  }
  
 }
}

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
                <img src="media/images/estreno.jpg" alt="">
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