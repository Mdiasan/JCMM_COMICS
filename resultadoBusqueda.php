<?php include("includes/a_config.php");
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/model/Comic.php';
require_once 'bbdd/Controller/UsuarioController.php';
require_once 'bbdd/Controller/ComprasController.php';
require_once 'bbdd/Controller/ComicController.php';



session_start();

if(!isset($_POST['busqueda'])){
    header('Location:index.php');
}else{
    $comics=ComicController::buscar($_POST['buscar']);
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
                <?php  if($comics!=false){?>
                <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">titulo</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">precio</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($comics as $key => $value) {
                            
                        ?>
                            <tr>
                            
                            <th scope="row"><a href="precio2.php?articulo=<?php echo  $value->id; ?>"><img src="media/images/<?php echo $value->imagen ?>" style="width: 100px, ; height: 100px; border-radius: 100px;" alt=""></a></th>
                            <td><?php echo $value->titulo ?></td>
                            <td><?php echo $value->descripcion ?></td>
                            <td><?php echo $value->precio ?></td>
                            </tr>
                        <?php  } ?>
                        </tbody>
                </table>

                <?php  }else{echo ' <div class="alert alert-danger alert-dismissible fade show">
    		 <button type="button" class="close" data-dismiss="alert">&times;</button>
          no hay resultados para la busqueda = '.$_POST['buscar'].'
  			</div>';}?>
                </div>

           </div>
               
            

           
        </main>

        <?php include("includes/footer.php"); ?>
    </div>
</body>
   

</html>