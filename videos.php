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
				<div class="col text-center ">
					Avengers: Endgame (Vengadores: Endgame en España)3​ es una película de superhéroes estadounidense de 2019 basada en el grupo Los Vengadores de Marvel Comics,
				</div>
				<div class="col">
					<div id="video-container">

						<!-- Video -->
						<video id="video" width="680" height="365">
							<source src="media/Player/videos/Vengadores_ Endgame - Trailer español (HD).mp4" type="video/mp4">
						</video>
						<!-- Video Controls -->
						<div id="video-controls">
							<button type="button" id="play-pause" class="play">Play</button>
							<input type="range" id="seek-bar" value="0">
							<button type="button" id="mute">Mute</button>
							<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
							<button type="button" id="full-screen">Full-Screen</button>
						</div>

					</div>

				</div>


			</div>
		










		<?php include("includes/footer.php"); ?>

</div>

</body>

<script src="js/video.js"></script>

</html>