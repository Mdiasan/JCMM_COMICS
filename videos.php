<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>

</head>

<body>


    <div class="container-fluid">
        <?php include("includes/design-top.php"); ?>
        <div>
            <h2>Marvel</h2>
            <div id="video-container">
		<!-- Video -->
		<video id="video" width="680" height="365">
		  <source src="media/Player/videos/mikethefrog.mp4" type="video/mp4">
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

	<script src="js/video.js"></script>
        </div>
        <?php include("includes/footer.php"); ?>
    </div>


</body>

</html>