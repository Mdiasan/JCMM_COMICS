<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
    <?php include("includes/head-tag-contents.php"); ?>

    <title>Ping Pong</title>
  </head>
  <body>
  <div class="container-fluid">

        <?php include("includes/design-top.php"); ?>

        <h1 class="text-center text-dark">PONG</h1>

   <div class=Juegos>
   <canvas id="canvas" width="800" height="500"></canvas>
   </div>
   <h4 class="text-center text-dark">Pulsa click para comenzar</h4><br>
   <h4 class="text-center text-dark">Controla tu ladrillo con el  <i class="fas fa-mouse-pointer"></i></h4>
   
    <script src="/media/Videojuegos/videojuego Juan Carlos Cubero/juego.js" charset="utf-8"></script>
    <?php include("includes/footer.php"); ?>

    </div>
  </body>
</html>