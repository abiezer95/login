<style>
/*up animation swipe*/
	.login #form {
		position: absolute;
		margin-top: -250px;
		opacity: 0.2;
		-webkit-transition:0.5s;
	}
	.signup{

	}
</style>
<script>
	$(document).ready(function(){
		// cambiando nombre y onclick del boton iniciar sesion 
		$('.showMore input').val('Iniciar Sesión'),	
		$('.showMore input').attr('onclick', 'sign_In()')
		// sigup post
		$('.signup').submit(function(){
			$('.signup').post('url', $('.signup').serialize(), function(data){

			})
			return false
		})	
	})
	function sign_In(){
		$('.signup').css({'display': 'none'})
		$('#form').css({'display': 'block', 'margin-top': '43%', 'opacity': '1'}),
		$('.showMore input').val('Crear Cuenta'),	
		$('.showMore input').attr('onclick', 'signUp()')
	}

</script>
<!-- signup form -->
		<img src="images/as.jpg" id='logo'>
			<h2>Registrate</h2><br>
			<h4>Para obtener una cuenta de usuario de la Asociación Cibao</h4>
				<input type="email" name="user" placeholder="Correo Electronico" required><br><br>
				<input type="email" name="password" placeholder="Confirmar Correo Electrónico" required>

				<br><br>
				<input type="text" name="password" placeholder="Contraseña" required><br><br>

				<a href="http://www.acap.com.do/site2/terminos_de_uso.pdf" target="_blank">
					<input type="checkbox" name="acept" style='width:15px'> Aceptar terminos y condiciones
				</a>
				<br><br>

			<input type="submit" value="Registrarme" id='submit'>