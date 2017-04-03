# class.clarity

A php class to connect to Clarity LIMS API

Requires config file, `config.php` with credentials for accessing LIMS API:

	<?php
	$CONFIG=array(
		'clarity'	=> array(
				'user' 		=> '', 
				'pass' 		=> '',
				'uri' 		=> ''
			)
	);
	?>
