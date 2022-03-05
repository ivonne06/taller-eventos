<?php	
//Utilizando autocarga de clases
function __autoload($classname){
    require "class/" . $classname . ".class.php";
}

//Condicional - si existen datos por medio $_POST se hace
if ($_POST) {
	$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : '';
	$pass = isset($_POST["pass"]) ? $_POST["pass"] : '';

	//Instaciamos clases
	$Usuario = new Usuario($nombre, $pass);
	$Login = new Login( $nombre, $pass );

	$filaUsuario = $Usuario->obtener_datos();
	$login = $Login->verificarUsuario($filaUsuario);

	if($login) {
		//direccionar
		header("Location: index.php?usuario=" . $Usuario->getNombre());
	} else {
		//direccionar
		header("Location: login.php?error=1");
	}	
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
	<!--[if lt IE 9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<section id="login">

		<form method="post" action="login.php">
			
			<h1 class="animate__animated animate__backInLeft">Iniciar sesion</h1>
			<dl>
				<dt><label for="nombre">Nombre:</label></dt>
				<dd><input type="text" name="nombre" value=""></dd><br>
				<dt><label for="pass">Password:</label></dt>
				<dd><input type="password" name="pass" value=""></dd><br>
			</dl>
			<input type="submit" value="Login">
		</form>

		<?php
			if (isset($_GET["error"]) and $_GET["error"] == 1){
		?>
			<h3>Error al intentar iniciar sesión</h3>
		<?php
            }
		?>
	</section>
</body>
</html>
