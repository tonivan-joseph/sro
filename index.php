<meta charset="UTF-8"/>
<?php
session_start();
require 'config.php';

//Aqui carrega nosso auto-lood que carrega cada class em modulos diferentes de cada arquivo do sistema
spl_autoload_register(function($class){

	if(file_exists('controllers/'.$class.'.php')){
		require 'controllers/'.$class.'.php';

	}else if(file_exists('models/'.$class.'.php')){
		require 'models/'.$class.'.php';

	}else if(file_exists('core/'.$class.'.php')){
		require 'core/'.$class.'.php';
	}

});

$core = new Core();
$core->run();