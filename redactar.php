<!DOCTYPE html>
<html>
<head>
	<title>Escribiendo articulo...</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<h2>Area de redaccion</h2>
	<form action="guardar.php" method="post">
		<input type="text" name="tit" placeholder="Titulo del articulo" />
		<ul>
			<li>
				<button class="salto">Salto de linea</button>
				<button class="bold">Bold</button>
			</li>
		</ul>
		<textarea name="cont" placeholder="Escribe el articulo"></textarea> 
		<input type="submit" name="pub" class="pub" value="Publicar"> 
	</form>
	<div class="preview">
		<i class="estado"></i>
		<h2 class="h"></h2>
		<p class="p_txt"></p>
	</div>

</body>
<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
</html>
<style type="text/css">
	* {
		padding: 0px;
		margin: 0px;
	}
	body {
		background: #f7f7f7;
	}
	form {
		width: 40%;
		background: grey;
		padding: 10px;
		margin: 10px;
		float: left;
	}

	input[type="text"] {
		display: inline-block;
		padding: 10px 5px;
		width: 90%;
		}
	textarea {
		display: inline-block;
		width: 90%;
		margin: 5px;
		padding: 1%;
		font-family: Calibri;
		min-height: 300px;
		font-size: 130%;
	}
	input[type="submit"] {
		padding: 5px;
		float: right;
		background: #433ee5;
		color: #fff;
		border: 1px solid #211da9;
	}
	form li {
		list-style: none;
	}
	form button {
		padding: 5px;
		margin: 5px;
		color: #fff;
	}


	form button.salto {
		background: green;
		border: 1px solid darkgreen;
	}
	form button.bold {
		background: #d56151;
		border: 1px solid #872417;
	}
	.preview {
		background: #fff;
		padding: 10px;
		float: right;
		min-width: 600px;
		min-height: 400px;
		max-width: 600px;
		margin:0px 4%;
		font-family: calibri;
	}
	.h {
		font-size: 280%;
		font-family: Helvetica;
	}
	.p_txt {
		font-size: 120%;
		font-family: Calibri;
	}
	.v {
		color: green;
	}
	.r {
		color: red;
	}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	setInterval(function () {
		var tit = $('input[type="text"]').val()
		var text = $('textarea').val()
		$('.h').text(tit);
		$('.p_txt').html(text);

	}, 100)
	$('.salto').click(function () {
		var a = $('textarea');
		var substring = a.val();
		var start = a.get(0).selectionStart;
		var end = a.get(0).selectionEnd;
		console.log(start, end)
		console.log(substring.substring(0, start)+' '+substring.substring(end ))
		m1 = substring.substring(0, start);
		m2 = substring.substring(end);

		a.val(m1+'<br />'+m2)

		return false;
	})
	$(".bold").click(function(){
		var u = $('textarea');
		var a = u.val();
  		var start = u.get(0).selectionStart;
  		var end   = u.get(0).selectionEnd;
		var m1 = a.substring(0, start);
		var m2 = a.substring(end);
		var m3 = a.substring(start, end)
		$('textarea').val(m1 + '<b>'+ m3 + '</b>' + m2);
		return false
	});

	setInterval(function () {
	
	}, 4000)

	

//
// function getSelected()
// {
//   var start = editor.get(0).selectionStart;
//   var end   = editor.get(0).selectionEnd;

//   return [u.substring(0, start), u.substring(end), u.substring(start, end)];
// }

// $("#negrita").click(function(){
//   var select = getSelected();
// 	editor.html(select[0]+'<b>'+select[2]+'</b>'+select[1]);
// });

// $("#cursiva").click(function(){
//   var select = getSelected();
//   editor.val(select[0] + '<i>'+ select[2] + '</i>' + select[1]);

// });



</script>
