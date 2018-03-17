$(document).ready(function(){
	$('#form').submit(function(){

		return false
	})
	var animation = setInterval(function(){
		$('.loads').load('js/formAnimation.css')
		clearInterval(animation);
	}, 200)
})

function sign_Up(){
	$('.loads2').load('js/loginAnimation.css'),
	$('.signup').load('js/signup.php')
	var animation = setInterval(function(){
		$('.loads2').load('js/signupAnimation.css')
		clearInterval(animation)
	}, 700)
}