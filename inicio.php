<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_COOKIE["idioma_seleccionado"])){

	if($_COOKIE["idioma_seleccionado"]=="es"){

	header("location:espa.php");


}else if($_COOKIE["idioma_seleccionado"]=="in"){
	header("location:ingles.php");

}
}



?>
	<table width="25%" border="0" align="center">
	<tr>
<td colspan="2" align="center"><h1>ELIGE IDIOMA</h1></td>
    </tr>
	
		<tr>
		<td align="center"><a href="crear_cookie.php?idioma=es"><img src="espa.png" width="300" height="120"></a></td>
		<td align="center"><a href="crear_cookie.php?idioma=in"><img src="ing.jpg" width="300" height="120"></a></td>
		</tr>


	</table>

</body>
</html>