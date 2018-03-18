<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<script src='js/jquery-3.3.1.min.js'></script>
	<script src='js/login.js'></script>
</head>
<body>
	<div class="login">
		<center>
		<form id='form'>
			<img src="images/as.jpg" id='logo'>
			<h2>Acceder</h2><br>
			<h4>Usa tu cuenta de la Asociación Cibao </h4>
				<input type="text" name="user" placeholder="Correo Electronico"><br><br>
				<input type="text" name="password" placeholder="Contraseña"><br><br>
				<a href="">¿Olvidaste tu contraseña?</a>
				<br><br>
			<input type="submit" value="Siguiente" id='submit'>
		</form>
		<form class="signup">
			<!-- registrar -->
		</form>
		<div class="showMore">
			<input type="submit" value="Crear Cuenta" id='more' onclick="signUp()">
		</div>
		<div class="getApp">
			<tt>Descargar Nuestra App</tt><br>
			<img src="images/googleplay.png">
		</div>
		</center>
	</div>

	<footer>
		<tt>Copyright © 2018 Todos los derechos reservados.</tt><a href="http://www.acap.com.do/site2/terminos_de_uso.pdf" target="_blank"> Terminos y Uso</a>
	</footer>


	<div class="loads" style='display:none'>Asociación Cibao</div>
	<div class="loads2" style='display:none'>Ahorros y Prestamos</div>
</body>
</html>