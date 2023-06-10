<?php

/*
* This is template of database config.
* Fill out database configuration options below and rename this file to 'database.php'
*/

$database = array(
	'address' 	=> $_ENV['DB_ADDRESS'],
	'username'	=> $_ENV['DB_USERNAME'],
	'password'	=> $_ENV['DB_PASSWORD'],
	'database'	=> $_ENV['DB_DATABASE']
);
