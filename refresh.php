<?php
                $files = glob('*.{mp3,wav}', GLOB_BRACE);
                $i = 0;
                foreach($files as $file) {
			echo '<div class="track" onclick="play(\''.$file.'\');">'.$file.'</div>';
                        $i++;
                }

echo time();
