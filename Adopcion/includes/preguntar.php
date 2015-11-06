<?php
include("pdoConexion.php");

$respuesta=false;
$contenido="";

$linkDB = conexion();
if($linkDB != NULL) {
	$cadena="INSERT INTO foro SET pregunta=?, respuesta=?";
	$sql = $linkDB->prepare($cadena);
	$sql->execute(array($_POST['pregunta'],$_POST['adicional']));
	
	$contenido = '<p class="date"></p><h3><a>'.$_POST['pregunta'].'</a></h3>'.$_POST['adicional'].'<p></p>';
	$respuesta=true;
	
}

$json = array("respuesta"=>$respuesta,"contenido"=>$contenido);

echo json_encode($json);

?>