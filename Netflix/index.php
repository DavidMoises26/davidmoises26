<?php
   if(isset($_POST['url'])):
      $nombre = uniqid() . ".jpg";
      $dir    = "IMAGENES/";

      $imagen = file_get_contents($_POST['url']);
      file_put_contents($dir . $nombre, $imagen);


   	endif;

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Imagenes</title>	
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="url" placeholder="URL de la imagen">
		<input type="submit" value="Guardar Imagen">
	</form>
</body>
</html>