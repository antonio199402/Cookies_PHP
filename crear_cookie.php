<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
setcookie("idioma_seleccionado", $_GET["idioma"],time()+86400);

header("location:ver_cookie.php");


?>
</body>
</html>