<?php 
	global $user,$pass,$server,$db;
	$user="root";
	$pass="";
	$server="localhost";
	$db="kabo";
	@$conexion = mysqli_connect($server,$user,$pass, $db) or die("error en index");	
 ?>