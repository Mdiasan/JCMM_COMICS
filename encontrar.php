<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head-tag-contents.php"); ?>

    <title>Videojuego</title>
    <link rel="stylesheet" href="media/Videojuegos/Videojuego Miguel_Angel_Diaz/style.css">

    <script src="media/Videojuegos/Videojuego Miguel_Angel_Diaz/memory.js" charset="utf-8"></script>

</head>

<body>

    <div class="container-fluid">

        <?php include("includes/navigation.php"); ?>
        <div class="Juegos">

            <h2>Puntuación:<span id="result"></span></h2>

            <div class="grid"></div>
            <h3><span id="result2"></span></h3><br>

            <h4 class="text-center text-dark">Encuentra todas las parejas haciendo click con el <i class="fas fa-mouse-pointer"></i></h4>
            <form action="encontrar.php" class="form-group">
                <input type="submit" class="form-control-3 btn btn-warning mt-3" value="Volver a Jugar">
            </form>
        </div>

        <?php include("includes/footer.php"); ?>
    </div>
</body>


</html>