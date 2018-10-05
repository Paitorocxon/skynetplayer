<?php
/**
*	SkynetPlayer
*	Copyright 2018 Paitorocxon (Fabian Müller)
**/
?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="player.css">
		<script>
			function stop(){
				$('#player').load('play.php?command=stop');
			}
			function download(){
				$('#player').load('download.php?url='+ document.getElementById("link").value);
			}

			function play(track){
                                $('#player').load('play.php?track='+track);
			}
			function refresher() {
			setInterval(
                        	function(){
                        	        $('#tracks').load('refresh.php');
                        	        $('#i').load('i.php');
                        	},1000);
			}
			function refresh(){
				$('#tracks').load('refresh.php');
                                $('#i').load('i.php');

			}
		</script>
<?php
        echo '		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>'."\n";
?>
	</head>
	<body onload="refresher();">
		<video autoplay muted loop id="myVideo">
			<source src="back.mov" type="video/mp4">
		</video>

		<div class="menu"><h3>SkynetPlayer</h3><i><div class="frag" id="i"><?php echo $i . '</div> title in total'; ?></i></div>
		<div class="control"><form><input name="link" type="text" id="link" class="url"/></form><div class="button" onclick="download();">Download</div></div>
		<div class="control"><div class="button" onclick="stop();">Stop</div> <div class="button" onclick="refresh();">Refresh</div></div>
		<div id="tracks" class="tracks">
	<?php

                $files = glob('*.{mp3,wav}', GLOB_BRACE);
                $i = 0;
                foreach($files as $file) {
                        echo '<div class="track" onclick="play(\''.$file.'\');">'.$file.'</div>';
                        $i++;
                }



	?>
		</div>
		<div id="player"></div>
	</body>
</html>
