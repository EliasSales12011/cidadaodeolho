<?php 
	require "environment.php";

	$config = array();

	if(ENVIRONMENT == 'development') {
		define("BASE_URL", "http://localhost/cidadaodeolho");
		$config['dbname'] = "cidadaodeolho";
		$config['host'] = "localhost";
		$config['dbuser'] = "root";
		$config['dbpass'] = "";
	} else {
		define("BASE_URL", "");
		$config['dbname'] = "";
		$config['host'] = "";
		$config['dbuser'] = "";
		$config['dbpass'] = "";
	}

	global $pdo;

	try {
		$pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
	} catch(PDOException $e) {
		echo "Erro: ".$e->getMessage();
		exit;
	}
 ?>
