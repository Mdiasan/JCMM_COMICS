<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
<div class="container-fluid">

	<head>
		<?php include("includes/head-tag-contents.php"); ?>
	</head>

	<body>

		<?php include("includes/design-top.php"); ?>
		
		<div>
			<div class="row">
				<div class="col  bg-dark text-center ">
					<h4>Trailer ENDGAME</h4>
				</div>
			</div>

		</div>

		

			<div class="row">
				<div class="col text-justify ">
					<br><br>Avengers: Endgame (Vengadores: Endgame en España)​ es una película de superhéroes estadounidense de 2019 basada en el grupo Los Vengadores de Marvel Comics, fue producida por Marvel Studios y distribuida por Walt Disney Studios Motion Pictures. Es la vigesimosegunda película del Universo cinematográfico de Marvel (MCU por sus siglas en inglés) y secuela directa de la película de 2018 Avengers: Infinity War. Está dirigida por Anthony y Joe Russo, con un guion escrito por Christopher Markus y Stephen McFeely, y cuenta con un reparto coral de múltiples actores que anteriormente habían estado en otras franquicias del Universo cinematográfico de Marvel.
				</div>
				<div class="col">
					<div id="video-container">

						<!-- Video -->
						<video id="video" width="680" height="365">
							<source src="media/Player/videos/Vengadores_ Endgame - Trailer español (HD).mp4" type="video/mp4">
						</video>
						<!-- Video Controls -->
						<div id="video-controls">
							<button type="button" id="play-pause" class="play">></button>
							<input type="range" id="seek-bar" value="0">
							<button type="button" id="mute"><i class="fas fa-volume-off"></i></button>
							<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
							<button type="button" id="full-screen"><i class="fas fa-compress"></i></button>
						</div>

					</div>

				</div>


				
			</div>
			
			<?php include("includes/contenedorCookie.php"); ?>
		<?php include("includes/footer.php"); ?>


</div>

</body>

<script src="js/video.js"></script>


</html>