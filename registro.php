<?php 
include("conexion.php");
if (isset($_GET['registrar'])) {
	if (strlen($_GET['nombres']) >= 1 && strlen($_GET['apellidos']) >= 1 && strlen($_GET['email']) >= 1){
		$nombres = trim($_GET['nombres']);
		$apellidos = trim($_GET['apellidos']);
		$email = trim($_GET['email']);
		$consulta = "INSERT INTO usuario(nombres, apellidos, email) VALUES ('$nombres', '$apellidos', '$email')";
		$resultado = mysqli_query($conn, $consulta);
		if ($resultado) {
			?>
			<script type="text/javascript">
				alert("Se ha registrado correctamente.");
			</script>
			<?php
		} else {
			?> 
			<script type="text/javascript">
				alert("Ocurrio un error durante el registro.");
			</script>
			<?php
		} 
	}	else {
			?>
			<script type="text/javascript">
				alert("Por favor complete todos los campos.");
			</script>
			<?php
		}
}


?>