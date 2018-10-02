<?php 
	include 'conectar.php';
	if (isset($_POST['tit'])) {
		mysqli_query($conexion, "INSERT into publicaciones (id_usuario, titulo, contenido) values ('adm','".$_POST['tit']."' ,'".$_POST['cont']."')");
	}
 ?>