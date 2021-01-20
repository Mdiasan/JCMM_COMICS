<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head-tag-contents.php"); ?>

    <title>juego</title>
    <style>
        .hierro{
            color: blue;
        }
        .acero{
            color:red;
        }
        
    </style>
   
</head>
<body onload="game.init()">

<div class="container-fluid">

<?php include("includes/design-top.php"); ?>

        <h1 class="text-center text-dark">Nacidos de la bruma</h1>


    <div class='Juegos'>
        <canvas  id='canvas' width='460px' height='460px'>
            
        </canvas>
        <p class="hierro"> el hierro te ayuda a moverte hacia abajo y hacia atras </p>
        <p class="acero">el acero te ayuda a moverte hacia arriba y  de frente  </p>
    
    </div>

    
    <?php include("includes/footer.php"); ?>

</div>
    </body>
    <script src="media/Videojuegos/videojuegoMiguelAngelRamirez/elemento.js"></script>
<script src="media/Videojuegos/videojuegoMiguelAngelRamirez/juego.js"></script>
<script src="media/Videojuegos/videojuegoMiguelAngelRamirez/app.js" ></script>

</html>