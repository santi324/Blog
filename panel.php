<!DOCTYPE html>
<html>
<head>
	<title>panel de control</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>


	<header>
	
		<h1>Titulo del sitio</h1>
		<ul>
			<li><a href="index.php" >Ir al inicio</a></li>
	
		</ul>
	</header>

	<div class="tags">
		<ul>
			<li><a href="#">Bienvenid@ a <b>Nombre del sitio</b></a></li>
		</ul>
	</div>
	<div class="login">
		<form>
			<h2>Inicie sesion</h2>
			<input type="text" name="user" placeholder="Usuario" />
			<input type="password" name="pass" placeholder="Password" />
			<input type="submit" value="Iniciar sesion" />
			<button>Registrarse</button>
		</form>
	</div>

</body>
</html>
<style type="text/css">
	* {
		padding: 0px;
		margin: 0px;
		font-family: Helvetica;
	}
	.login {
		display: inline-block;
		width: 30%;
		background: #c5c4d4;
		padding: 1%;
		margin:0px 5%;
	}

	.login input[type="text"], .login input[type="email"], .login input[type="password"] {
		padding: 10px 15px;
		width: 90%;
		margin: 3px;
	}
	.login button {
		padding: 7px 15px;
		float: right;
		margin: 10px;
		background: green;
		border: 2px solid darkgreen;
		border-radius: 4px;
		cursor: pointer;
		color: #fff;
	}

	.login button:hover {
		background: #63d551;
	}
	
	.login input[type="submit"] {
		margin: 10px; 
		padding: 7px 15px;
		background: #352fdd;
		float: right;
		color: #fff;
		border: 2px solid #100bb7;
		border-radius: 4px;
		cursor: pointer;
	}
	.login input[type="submit"]:hover {
		background: #5651d5;
	}
</style>