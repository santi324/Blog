<!DOCTYPE html>
<html>
<head>
	<title>Title of the website</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
</head>
<body>
	<header>
	
		<h1>Titulo del sitio</h1>
		<ul>
			<li><a class="active">Inicio</a></li>
			<li><a href="#">Contacto</a></li>
			<li><a href="panel.php">Iniciar sesion</a></li>
		</ul>
	</header>
	<!-- <div class="tags">
		<ul>
			<li><h2>Tags: </h2></li>
			<li><a href="#">Gramatica</a></li>
			<li><a href="#">Historia</a></li>
			<li><a href="#">Pasado perfecto</a></li>
			<li><a href="#">puntos</a></li>
		</ul>
	</div> -->
	<?php 
		// escribiendo los articulos desde la base de datos
		if (isset($_GET['id'])) {
			include 'conectar.php';
			$main_art = mysqli_query($conexion, "SELECT * FROM publicaciones WHERE id = ".$_GET['id']);
			while ($c = mysqli_fetch_array($main_art)) {
					echo "<section class=\"main\">
							<!--<ul class=\"interact\">
								<li><p>234 views</p></li>
								<li><p>345 shares</p></li>
								<li><p>948 votes</p></li>
							</ul>-->
							<h1>".$c['titulo']."</h1><br>
							<p>
							".$c['contenido']."
							</p>
						</section>";

				}
		} else {
			echo "<section class=\"main\">
					<h1>Title of the website</h1><br>
					<p>Be welcome to this website</p>
				</section>";
		}

	 ?>

	<aside>
		<h2>Articulos publicados</h2>
		
		<ul>
			<?php 
				include 'conectar.php';
				$lat_art = mysqli_query($conexion, "SELECT id, titulo FROM publicaciones ORDER BY id DESC");
				if (mysqli_num_rows($lat_art) < 1) {
					echo "<p>No se han publicado artuculos aun</p>";
				} else {
					while ($c = mysqli_fetch_array($lat_art)) {
						echo '<li><a href="index.php?id='.$c['id'].'">
									<b>'.$c['titulo'].'</b>
									<br>
									Leer articulo</a>
								</li>';
					}
				}
			 ?>
				
		</ul>
	</aside>

<footer>
	<ul>
		<li><p>Todos los derechos reservados - Santiago cano <a href="mailto:el34santiago@gmail.com">el34santiago@gmail.com</a></p></li>
	</ul>
</footer>
</body>
</html>
<style type="text/css">
	* {
	padding: 0px;
	margin: 0px;
	font-family: Helvetica;
}

body {
	background: #f7f7f7;
}

header {
	background:#f3f3f3 /* #1e7cd3*/;
	display: inline-block;
	width: 100%;
}
header h1 {
	display: inline-block;
	float: left;
	padding:20px 15px;
}
header ul {
	display: inline-block;
	float: right;
	padding: 20px 15px;
}
header ul li {
	display: inline-block;
	float: left;
}
header ul li a {
	padding: 10px 15px;
	color: #fff;
	margin: 3px;
	text-decoration: none;
	border-radius: 7px;
	display: inline-block;
}

header ul li a:hover {
	background: #1b40e5;
	transition: 1s;
}

header ul li a {
	background: #0c68bf;
	border-radius: 7px;
}

.main {
	display: inherit;
	width: 50%;
	margin: 10px 2%;
	float: left;
	padding: 1%;
	min-height: 500px;
	background: #fff; 
}
.main h1{ 
	font-size: 280%;
	animation-name: x001;
	animation-duration: 1s;
}



@keyframes x001 {
	from {
		transform: scale(1);
		margin-left: 0%;
	}
	25% {
		transform: scale(1.2);
		margin-left: 20%;
	}

	to {
		transform: scale(1);
		margin-left: 0%;

	}
}

.main p {
	font-size: 120%;
	font-family: Calibri;
	animation-name: x002;
	animation-duration: 1s;
}
@keyframes x002 {
	from {
		transform: rotateX(-100deg);
		margin-left: 0%;
	}
	to {
		transform: rotateX(0deg);
	

	}
}
.main .interact {
	display: inline-block;

}
.main .interact li {
	display: inline-block;
	float: left;
	padding: 10px;
}
header .slide {
	width: 100%;
	max-height: 300px;
	overflow: hidden;
}
header .slide img {
	width: 100%;
	margin-top: -10%;
}

.welcome {
	border: 1px solid #fff;
	display: inline-block;
	width: 40%;
	margin: 1%;
	padding: 2%;
}

aside {
	width: 30%;
	float: right;
	padding: 1%;
}

aside li {
	width: 88%;
	overflow: hidden;
	float: left;
	padding: 10px;
	max-height: 100px;
	margin: 2px;
	transition: .6s;
}

aside li:hover {
	background: #f3f3f3;
	border: 1px solid grey;
	transform: scale(1.2);
	position: relative;
	right: 10%;
}
aside li:hover b{
	color: #05c308;
}
aside li img {
	width: 30%;
	float: left;
}

aside li b{
	color: grey;
	font-size: 130%;
}
aside li a {
	padding: 10px 15px;
	display: inline-block;
	text-decoration: none;
	width: 90%;
}

footer {
	display: inline-block;
	width: 98%;
	background: #000;
	padding:3% 1%;

}
footer p {
	color: #fff;
	text-align: center;
}

.tags {
	display: inline-block;
	width: 90%;
	margin: 0px 5%;
}
.tags ul {
	padding: 10px;
	width: 40%;
	float: left;
}
.tags ul li {
	display: inline-block;

}
.tags ul li a {
	display: inline-block;
	padding: 10px;
	margin: 1px;
	background: #3f48cc;
	text-decoration: none;
	color: #fff;
}

a[href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website_triviaidiomas&utm_content=footer_img"] {
	display: none;
}
img[src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
	display: none;
}

@media (max-width: 450px) {
	.main {
		display: inline-block;
		width: 92%;
		clear: both;
		padding: 1%;
		min-height: 500px;
		background: #fff; 
	}
	aside {
		width: 90%;
		float: right;
		padding: 1%;
	}

	aside li:hover {
		transform: none;

	}
}

footer a{
	color: #4cd9ec;
}
</style>