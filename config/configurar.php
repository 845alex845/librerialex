<?php
	
	//configuracion de acceso a la base d edatos
	define('DB_HOST', '35.222.65.165');
	define('DB_USUARIO', 'root');
	define('DB_PASSWORD', 'digitalbook');
	define('DB_NOMBRE', 'mydb');


	//Ruta de la aplicacion :C:\xampp\htdocs\sis_libreria_php\app (1)
	//Ruta de la aplicacion :C:\xampp\htdocs\sis_libreria_php (2)

	define('RUTA_APP', dirname(dirname(__FILE__)).'\app');

	// define('RUTA_URL','http://localhost/sis_libreria_php');
	define('RUTA_URL',dirname(RUTA_APP).'/public');
	//C:\xampp\htdocs\sis_libreria_php/public

	define('NOMBRESITIO', 'DigitalBook');