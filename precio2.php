<?php include("includes/a_config.php"); 
require_once 'bbdd/model/Usuario.php';
require_once 'bbdd/Controller/ComicController.php';
require_once 'bbdd/Controller/UsuarioController.php';
require_once 'bbdd/Controller/ValoracionController.php';
require_once 'bbdd/model/Comic.php';
require_once 'bbdd/model/Valoracion.php';



session_start();

if(!isset($_GET["articulo"])){
  header("Location:/index.php");
}

$yaComentado=false;

if(isset($_POST['enviar'])){
  $c = ComicController::getComicById($_POST['enviar']);
  if(isset( $_SESSION['carrito'][$c->id])){
     $_SESSION['carrito'][$c->id]->cantidad ++ ;

  }else{
    $c->cantidad=1;
    $_SESSION['carrito'][$c->id]=$c;
  }

  header("Location:/carrito.php");
}
$comic = ComicController::getComicById($_GET['articulo']);

if(isset($_POST['resena'])){

$yaComentado=ValoracionController::buscarReseñaDelUsuarioAutenticado($_SESSION['usuario'],$comic);

 if(!$yaComentado){
  $v= new Valoracion(null,$_POST['hiddenEstrellas'],$_POST['resena'],$_SESSION['usuario']->id,$comic->id);
  ValoracionController::guardar($v);
}

}
$valoracion = ValoracionController::getMediaValoraciones($comic);

$arrayComentarios= ValoracionController::getAll($comic);



?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php"); ?>

</head>

<body>


  <div class="container-fluid">
    <?php include("includes/design-top.php"); ?>


    <div class="row">

      <?php include("includes/navigation-2.php"); ?>

      <div class="col-sm-9 mt-5">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <img id="imagenComic" src="media/images/<?php echo $comic->imagen ?>" alt="">
            </div>

          </div>
          <div class="col">
            
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <div class="bg-danger text-center">
                      <h4><?php echo $comic->titulo ?></h4>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h3><?php echo $comic->precio ?>€</h3>
                    <?php if ($comic->stock <=0){ ?>
                    <p class="noStock">no disponible en este momento  </p>

                   <?php } ?>
                  </div>
                  <div class="col">
                    <form id="form">
                      <p class="clasificacion">
                        
                        <input id="radio11" type="radio" name="estrellas" value="5" disabled   <?php if($valoracion == 5){echo 'checked';} ?> >
                        <!--
    --><label for="radio11">★</label>
                        <!--
    --><input id="radio21" type="radio" name="estrellas" disabled value="4"  <?php if($valoracion == 4){echo 'checked';} ?>>
                        <!--
    --><label for="radio21">★</label>
                        <!--
    --><input id="radio31" type="radio" name="estrellas" disabled  value="3"<?php if($valoracion == 3){echo 'checked';} ?> >
                        <!--
    --><label for="radio31">★</label>
                        <!--
    --><input id="radio41" type="radio" name="estrellas"  disabled value="2"<?php if($valoracion == 2){echo 'checked';} ?>>
                        <!--
    --><label for="radio41">★</label>
                        <!--
    --><input id="radio51" type="radio" name="estrellas" disabled  value="1"<?php if($valoracion == 1){echo 'checked';} ?>>
                        <!--
    --><label for="radio51">★</label>

                      </p>
                    </form>
                  </div>

                </div>
                <div class="row">
                  <div class="col">
                    <p><?php echo $comic->descripcion ?></p>
                  </div>
                </div>

              </div>

            </div>

            <hr>

            <div class="row">
              <div class="col">
                <form action="" method="POST">
                  <button class="btn btn-warning" type="submit" name="enviar" value=<?php echo $comic->id ?> <?php if ($comic->stock <=0){ echo "disabled";} ?>><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </form>
              </div>
            </div>

          </div>

        </div>
        
        <?php include("includes/Editor.php"); ?>

       
        
        <?php 
        if($arrayComentarios==false){
        ?>
        
        <h3 class="text-center">Aún no hay comentarios puedes escribir el primero </h3>
        
        <?php 


        }else{

          for ($i=0; $i < count( $arrayComentarios) ; $i++) { 
            
          
          
            
            ?>
            
            <div style="margin-top: 5%; <?php if($i>=2 ) {echo "display:none" ;}?>" name="comentarios" >
               <h5 class="text-dark"><?php  echo  UsuarioController::getNombre($arrayComentarios[$i]->usuario)  ?></h5>
               
                <form >
                <p class="clasificacion">
                  
                  <input id="radio12" type="radio"  value="5"   disabled  <?php if( $arrayComentarios[$i]->valoracion == 5){echo 'checked';}  ?> >
                  <!--
--><label for="radio12" >★</label>
                  <!--
--><input id="radio22" type="radio"  disabled value="4"  <?php if( $arrayComentarios[$i]->valoracion == 4){echo 'checked';} ?>>
                  <!--
--><label for="radio22">★</label>
                  <!--
--><input id="radio32" type="radio"  disabled  value="3"<?php if( $arrayComentarios[$i]->valoracion== 3){echo 'checked';} ?> >
                  <!--
--><label for="radio32">★</label>
                  <!--
--><input id="radio42" type="radio"  disabled value="2"<?php if( $arrayComentarios[$i]->valoracion == 2){echo 'checked';} ?>>
                  <!--
--><label for="radio42">★</label>
                  <!--
--><input id="radio52" type="radio" disabled value="1"<?php if( $arrayComentarios[$i]->valoracion == 1){echo 'checked';} ?>>
                  <!--
--><label for="radio52">★</label>
</p>
                
              </form>
               
               
               
               
                
               
              <hr>
              <textarea style="width: 100%; resize: none;" disabled><?php echo $arrayComentarios[$i]->comentario ?></textarea>
            </div>

            
            
            <?php
          }
        }
        
        ?>


        
        <div class="text-center">
          <button class="btn btn-primary"  style="margin: auto; <?php if($arrayComentarios==false){echo "display:none";} ?>" onclick="verTodosLosComentarios()" id="mas">ver más</button>
          <button class="btn btn-primary " style="display: none; margin: auto;" onclick="verMenosComentarios()" id="menos" >ver menos</button>
        
      
        </div>
        
      </div>
    </div>

    <?php include("includes/footer.php"); ?>
  </div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="alert alert-danger alert-dismissible fade show">
    		 <button type="button" class="close" data-dismiss="modal">&times;</button>
    		<strong>error!</strong> ya has realizado un comentario de este comic
  			</div>
        </div>
        
       
        
      </div>
    </div>
  </div>





  <?php if($yaComentado){ ?>
          <div class="alert alert-danger text-center" role="alert">Ya has realizado una reseña de este comic</div>
          <script> $('#myModal').modal('show');</script>
        <?php }?>

</body>
<script>
  function verTodosLosComentarios(){
    var arrayDiv = document.getElementsByName("comentarios");
    arrayDiv.forEach(element => {
      element.style.display= 'block';
    });

    document.getElementById('mas').style.display='none';
    document.getElementById('menos').style.display='block';
    
  }
  function verMenosComentarios(){
    var arrayDiv = document.getElementsByName("comentarios");
      for (let index = 0; index < arrayDiv.length; index++) {
        if(index != 1 && index!= 0){
          arrayDiv[index].style.display='none';
        }
        
       
        
      }
    document.getElementById('mas').style.display='block';
    document.getElementById('menos').style.display='none';
  }


  function darValorReseña(){
    var btnResena= document.getElementById("resena");
    var radios= document.getElementsByName("valoracion");
    var estrella= document.getElementById("hiddenEstrellas");
    radios.forEach(element => {
      
      if(element.checked==true){
          estrella.value=element.value;
          console.log(estrella)
      }
    });
    btnResena.value=quill.root.innerText;
    
  }

  
</script>
</html>