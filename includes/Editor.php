<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="language" content="english">
<meta name="viewport" content="width=device-width">

<meta property="og:type" content="website">
<meta property="og:url" content="https://quilljs.com/standalone/snow/">
<meta property="og:image" content="https://quilljs.com/assets/images/brand-asset.png">
<meta property="og:title" content="Snow Theme - Quill">
<meta property="og:site_name" content="Quill">
 
<link rel="canonical" href="https://quilljs.com/standalone/snow/">
<link type="application/atom+xml" rel="alternate" href="https://quilljs.com/feed.xml" title="Quill - Your powerful rich text editor" />
  
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />

<link rel="stylesheet" href="../quill/quill.snow.css" />

<style>
  .standalone-container {
    margin: 25px auto;
    max-width: 1200px;
  }
  #snow-container {
    height: 100px;
  }
</style>


</head>
<body>
  
<div class="standalone-container">
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
  <button type="button" class="btn btn-primary btn-sm" aria-label="Close" onclick="JavaScript: alert(quill.root.innerHTML);">
    Enviar Reseña
  </button>
</div>

</body>
</html>
