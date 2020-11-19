<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head-tag-contents.php");?>
<link rel="stylesheet" href="css/mystyle.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            aqui ira un texto de descripcion<br>
            <div id="precio" class="row border border-secondary bg-primary">
                precio 3,45€
                <input id="boton" type="button" value="comprar" name="comprar">
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
</body>
</html>