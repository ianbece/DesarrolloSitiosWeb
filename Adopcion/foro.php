<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0063)file:///C:/Users/Troy/AppData/Local/Temp/Rar$EXa0.775/foro.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Refugios</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="default.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" type="image/ico" href="favicon.ico">

<script type="text/javascript" src="jquery.1.8.1.js"></script>
<script type="text/javascript" src="pregunta.js"></script>
</head>
<body>



<div id="wrapper" class="container">

	<div id="barra-lateral"></div>
	
	<div id="contenido">

	<div id="header">
		<div id="logo" class="alignright">
			<h1><a>Adopción de perros</a></h1>
			<p>El hogar que necesitan</p>
		</div>
		<div id="banner"><a href="index.php"><img src="images/logo.png" width="340" height="185" alt="" class="alignleft"></a></div>
	</div>
	


	<div id="menu">
		<ul>
			<li class="first"><a href="index.php" accesskey="1" title="">Inicio</a></li>
			<li><a href="informacion.html" accesskey="2" title="">Informacion</a></li>
			<li><a href="adopcion.php" accesskey="3" title="">Adopcion</a></li>
			<li><a href="consejos.html" accesskey="4" title="">Consejos</a></li>
			<li><a href="foro.php" accesskey="5" title="">Foro</a></li>
			<li><a href="contacto.html" accesskey="6" title="">Contacto</a></li>
		</ul>
	</div>
	<div id="page">
		<div id="content-center">
			<div id="content">
				<div id="box2">
				<form action="" method="POST" id="formulario">
					<p></p><h2>Foro</h2>
					Aquí puedes dejar tus dudas o preguntas<p></p>
					<p style="text-align: left">Ingresa el tu pregunta: <br><input type="text" name="pregunta">
					<br>Ingresa información adicional: <br><textarea rows="7" cols="50" name="adicional"></textarea></p>
					<input type="submit" value="Enviar" id="boton">
				</form>
				</div>
			</div>
			<div id="sidebar-right" class="scroll">
				<h2>Preguntas</h2>
				
				<?php 
				include("includes/pdoConexion.php");
				$linkDB = conexion();
				

				$salida = '';

				try{
				$sql = $linkDB->prepare('Select * from foro');
			        $sql->execute();

				$resultado = $sql->fetchAll();
				$cont = 0;
				if(count($resultado) > 0)
			    		foreach ($resultado as $listadoDK) 
					{
						$salida.='<p class="date"></p><h3><a>'.$listadoDK['pregunta'].'</a></h3>'.$listadoDK['respuesta'].'<p></p>';
					$cont++;
			    		}
				}

				catch(PDOException $e){}
				$linkDB = null;				
				echo $salida;
				?>
				
			</div>
		</div>
		
	</div>
	</div>
</div>


</body></html>
