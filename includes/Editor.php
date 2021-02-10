



<div class="standalone-container" id="valorar" onkeyup=darValorReseña()>
<form id="form">
  <p class="clasificacion">
    <input id="radio1" type="radio" name="valoracion"  value="5"><!--
    --><label for="radio1" class="dinamico">★</label><!--
    --><input id="radio2" type="radio" name="valoracion" value="4"><!--
    --><label for="radio2" class="dinamico">★</label><!--
    --><input id="radio3" type="radio" name="valoracion"  value="3"><!--
    --><label for="radio3" class="dinamico">★</label><!--
    --><input id="radio4" type="radio" name="valoracion" value="2"><!--
    --><label for="radio4" class="dinamico">★</label><!--
    --><input id="radio5" type="radio" name="valoracion" value="1"><!--
    --><label for="radio5" class="dinamico">★</label>
  </p>
</form>
  <div id="snow-container"></div>
</div>

  
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

<script src="../quill/quill.min.js"></script>

<script>
  var quill = new Quill('#snow-container', {
    placeholder: 'Escribe tu reseña aqui...',
    theme: 'snow'
  });
</script>

<div style="width: 100%; text-align: center;">
<form action="" method="POST">
<button type="submit" class="btn btn-primary btn-sm" aria-label="Close"  name="resena" id="resena">
    Enviar Reseña
  </button>
  <input type="hidden" name="hiddenEstrellas" id="hiddenEstrellas">
</form>
  
</div>




