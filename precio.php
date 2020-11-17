<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head-tag-contents.php");?>
<link rel="stylesheet" href="css/mystyle.css">
</head>
<body id="cuerpoPrecio">

<?php include("includes/design-top.php");?>

<div class="container" id="main-content">
    <div class="row">
        <div class="col-6 ">
            <img id="imagenComic" src="media/images/comicEjemplo.png" alt="">
        </div>
        
        <div class="col-6 border border-secondary">
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            <div id="precio" class="row border border-secondary">
                precio 3,45€
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
</body>
</html>