<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset='utf-8'>
	<title>@yield('title')</title>
	<link rel='shortcut icon' type='image/png' href='/storage/src/logos/favicon.png'>
	@stack('styles')
	<link rel='stylesheet' type='text/css' href='{{ asset("/css/min.css") }}'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	@stack('scripts')
	<script src='{{ asset("/js/main.js") }}'></script>
	<script src='{{ asset("/js/jquery-3.3.1.js") }}'></script>
</head>
<script type="text/javascript">
	$(document).ready(function() {
		navBarActive();
	});
</script>
<body>
	<div class='header'>
		<img id='Banner' src='/storage/src/logos/banner100.png' alt='tuforonetlogo'>
		<div class='userDiv'>
			@if (Auth::check())
				<div class="userLoged">
					Bienvenido
				  	<a href="/profile/{{ Auth::user()->remember_token}}">
				  		<b class="dropbtn">{{ Auth::user()->name }}</b>
				  	</a>!&#8194;
				  <a href="/logout"><i class="fas fa-power-off"></i></a>
				</div>
			@else
			<form action='/login' method='POST'>
				@csrf
				<input type='text' name='user' maxlength='20' placeholder='Usuario'>
				<input type='password' name='password' maxlength='48' placeholder='Contraseña'>
				<input type='submit' value='Entrar'>
			</form>
		<br>
		@endif
		</div>
	</div>
	<div class='navBar'>
		<a href='/' id='startingPoint'>Inicio</a>
		<a href='/foro' id='forumEntry'>Foro</a>
		<a href='/registro' id="registerPage">Registro</a>
		@if (Auth::check())
			<a href='/newthread' id="newThreadButton">Crear Tema</a>
		@else
			<a onclick="alert('Debes estar logeado para crear un nuevo tema.\nSerás redirigido a la página de inicio.')" href='/' id="newThreadButton">Crear Tema</a>
		@endif
	</div>
	<div class='headerAdsContainer'>
		<a href="https://www.livingroomofsatoshi.com/" target='_blank'>
			<img src='/storage/src/other/ad4.gif'>
		</a>
	</div>
	@section('postSection')
    @show
	<div id='footer'>
		<div class='socialDiv'>
			<a href='https://twitter.com/?lang=es' target='_blank'><img src='/storage/src/logos/social/tw_logo.png' class='socialNetwork' alt='twitter_logo'></a>
			<a href='https://www.facebook.com/' target='_blank'><img src='/storage/src/logos/social/fb_logo.png' class='socialNetwork' alt='facebook_logo'></a>
			<a href='https://www.instagram.com/' target='_blank'><img src='/storage/src/logos/social/ig_logo.png' class='socialNetwork' alt='instagram_logo'></a>
		</div>
	</div>	
</body>
</html>