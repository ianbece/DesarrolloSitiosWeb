<?php

function conexion(){

$conn = NULL;

$server = "localhost";
$user = "root";
$pass = "";
$mainDataBase = "refugios";

$servidorBase = 'mysql:host='.$server.';dbname='.$mainDataBase;
	try{
	    $conn = new PDO($servidorBase, $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));   
	    
	}
	catch(PDOException $e){
	    echo "ERROR: " . $e->getMessage();
	}

	return $conn;
}

?>
