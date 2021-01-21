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
					<h4>Trailers Marvel</h4>
				</div>
			</div>

		</div>

		

			<div class="row">
				<div class="col text-justify ">
					Avengers: Endgame (Vengadores: Endgame en España) es una película de superhéroes estadounidense de 2019 basada en el grupo Los Vengadores de Marvel Comics
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
				<div class="row">
				<div class="col text-justify ">
				Spider-Man: Lejos de casa (en inglés: Spider-Man: Far From Home) es una película estadounidense de superhéroes de 2019 basada en el personaje de Spider-Man, perteneciente a Marvel Comics, producida por Columbia Pictures y Marvel Studios y distribuida por Sony Pictures Entertainment. Es la secuela de Spider-Man: Homecoming(2017)
				</div>

				<div class="col">
					<div id="video-container">

						<!-- Video -->
						<video id="video2" width="680" height="365">
							<source src="media/Player/videos/SPIDER-MAN LEJOS DE CASA .mp4" type="video/mp4">
						</video>
						<!-- Video Controls -->
						<div id="video-controls">
							<button type="button" id="play-pause2" class="play">></button>
							<input  type="range" id="seek-bar2" value="0">
							<button type="button" id="mute2"><i class="fas fa-volume-off"></i></button>
							<input  type="range" id="volume-bar2" min="0" max="1" step="0.1" value="1">
							<button type="button" id="full-screen2"><i class="fas fa-compress"></i></button>
						</div>

					</div>

				</div>
				</div>


			</div>

		<?php include("includes/footer.php"); ?>

</div>

</body>

<script src="js/video.js"></script>

</html>