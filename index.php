<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Didesweb, llamar a un archivo PHP por AJAX</title>
	<!-- Didesweb -->  
	<!-- Diseño y desarrollo web -->  
	<!-- http://didesweb.com/-->  
	<!-- Este obra está protegida bajo licencia Creative Commons Attribution --> 
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
		$(document).ready(function(){ 
			$("#llamar_AJAX").on("click", function(e){
				e.preventDefault();
				$("#contenido_php").load("contenido_php.php");
			});
		});
	</script>
</head>
<body>
	<h1>Didesweb, llamar a un archivo PHP por AJAX</h1>
	<a href="#" id="llamar_AJAX">Llamar al contenido PHP</a>
	<div id="contenido_php"></div>
	<br>
	<form name="formulario" id="form_id" action="devuelve.php">
	Introduce tu edad: <input type="number" name="valor" value=" ">
	<input type="submit" value="Enviar">
	</form>
	<br>
	<div id="contenido"></div>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
		$("#form_id").on("submit", function(e){
			e.preventDefault();
			$.post("devuelve.php", $("#form_id").serialize(), function(respuesta){
				$("#contenido").html(respuesta);
			});
		});
	</script>
</body>
</html>
