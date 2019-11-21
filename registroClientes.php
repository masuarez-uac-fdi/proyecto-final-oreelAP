<!DOCTYPE html>
<html>
<head>
	<title>Registro de clientes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
  	<header>
    	<div style="background-color: #2681B3;">
      		<center>
        		<h1 style="color: white;text-shadow: 3px 3px 3px #87CAF0; font-family: Brush Script MT; font-size: 120px;">#New Life Style</h1>
     	 	</center>
    	</div>
  	</header>
  	<div>
		<form method="get">
			<center>
				<h1>¡Inscribete al reto del mes!</h1>
				<p>Nombres: <input type="text" name="nombres" placeholder="Nombre(s)" style=" margin-bottom: 30px; margin-left: 60px;"><br></p>
				<p>Apellidos: <input type="text" name="apellidos" placeholder="Apellidos" style=" margin-bottom: 30px; margin-left: 60px;"><br></p>
				<p>Correo Electrónico: <input type="email" name="email" placeholder="Correo Electrónico" style=" margin-bottom: 30px;"><br></p>
				<input type="submit" name="registrar" style="text-decoration: none; padding: 10px; font-weight: 600; font-size: 20px; color:black; background-color: #1883ba; border-radius: 6px; border: 2px solid #0016b0;">
			</center>
		</form>
		<a href="index.php">Regresar a la página de inicio.</a>
		</div>
	<?php 
	include("registro.php");
	?>	
</body>
</html>