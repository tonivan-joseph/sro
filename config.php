<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	//Aqui venha a conexão com meu servidor local
	define("BASE_URL", "http://sistemas/sorendaonline.com/");//normalmente quando aprece erro de carregamente apos intalação novo, configurar a URL do sisitemas para da acesso ao comaminho certo so sistemas
	define("BASE", "http://sistemas/sorendaonline.com/");
	$config['dbname'] = 'db_sro';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else {
	//Aqui vem as configurações do meu servidor de hospedagem
	define("BASE", "http://sorendaonline-mvc/");
	$config['dbname'] = 'db_sro';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;
try {
//Conexão com o banco de dado
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

}catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
}