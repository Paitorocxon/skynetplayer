<?php

	if(isset($_REQUEST['track'])) {
		shell_exec('sudo pkill mpg123');
		shell_exec('sudo mpg123 '.$_REQUEST['track']);
		die();
	} elseif (isset($_REQUEST['command']) && $_REQUEST['command'] == 'stop') {
		shell_exec('sudo pkill mpg123');
		die('<b>stop!</b>');
	}
