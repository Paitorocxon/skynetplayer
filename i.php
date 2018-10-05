<?php
                $files = glob('*.{mp3,wav}', GLOB_BRACE);
                $i = 0;
                foreach($files as $file) {
                        $i++;
                }

		echo $i;


