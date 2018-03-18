$(document).ready(function(){
	$('#form').submit(function(){
		$('.signup').post('url', $('.signup').serialize(), function(data){
				//aqui 
		})
		return false
	})

	signIn() //mostrando signIn al principio
})
// function que muestra el formulario de signIn
function signIn(){
	var animation = setInterval(function(){
		$('.loads').load('js/formAnimation.css')
		clearInterval(animation);
	}, 200)
}

// function que muestra el formulario de signup
function signUp(){
	$('.loads2').load('js/loginAnimation.css')
	var animation = setInterval(function(){
		$('#form').css('display', 'none')
		$('.signup').css('display','block')
		$('.signup').load('js/signup.php')
		$('.loads2').load('js/signupAnimation.css')
		localStorage.setItem('registro', 1);
		clearInterval(animation)
	}, 700)
}