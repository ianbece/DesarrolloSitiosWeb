<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Refugios</title>
<meta name="keywords" content="">
<meta name="description" content="">

<link href="default.css" rel="stylesheet" type="text/css" media="all">
<link href="hsc.css" rel="stylesheet" type="text/css" media="all">

<link rel="icon" type="image/ico" href="favicon.ico">
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
	
		<div id="sidebar">
			<div>
				<h2><center>Refugios disponibles</center></h2><br>
				
				<table border="10" cellspacing="10" bordercolor="#A9A9A9" bgcolor="#DBDBDB"> 

				<?php 
				include("includes/pdoConexion.php");
				$linkDB = conexion();
				

				$salida = '';

				try{
				$sql = $linkDB->prepare('Select * from refugios');
			        $sql->execute();

				$resultado = $sql->fetchAll();
				$cont = 0;
				if(count($resultado) > 0)
			    		foreach ($resultado as $listadoDK) 
					{
						if($cont%2 == 0)
							$salida .= '<tr>
				<td width="468">
				<div class="imagen" align="center" style="background-image:url(images/'.$listadoDK['imagen'].');">
					 <div class="info">
					 	<br><p>
					    <a href="'.$listadoDK['link'].'">
					    <strong>'.$listadoDK['nombre'].'</strong></a></p><br>
				 	 		<p class="info">'.$listadoDK['descripcion'].'</p>
					 </div>
				</div></td>';
						else
							$salida .= '<td width="468">
				<div class="imagen" align="center" style="background-image:url(images/'.$listadoDK['imagen'].');">
					 <div class="info">
					 	<br><p>
					    <a href="'.$listadoDK['link'].'">
					    <strong>'.$listadoDK['nombre'].'</strong></a></p><br>
				 	 		<p class="info">'.$listadoDK['descripcion'].'</p>
					 </div>
				</div></td>

				</tr> ';
					$cont++;
			    		}

				}

				catch(PDOException $e){}
				$linkDB = null;				
				echo $salida;
				?>
				</table>

			</div>
		
		</div>
	</div>
	</div>
</div>


</body></html>
