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
        <main>

            <h2>Puntuación:<span id="result"></span></h2>

            <div class="grid" ></div>
            <h3><span id="result2"></span></h3>
        </main>
        </div>
        
        <?php include("includes/footer.php"); ?>
    </div>
</body>


</html>