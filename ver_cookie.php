<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
if(!isset($_COOKIE["idioma_seleccionado"])){

	header("location:inicio.php");


}else if($_COOKIE["idioma_seleccionado"]=="es"){

	header("location:espa.php");


}else if($_COOKIE["idioma_seleccionado"]=="in"){
	header("location:ingles.php");

}




	?>

</body>
</html>