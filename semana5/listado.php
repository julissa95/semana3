


<!DOCTYPE html>
<html>
<body>

<h2>Listado de usuarios</h2>

<ol>
	<?php

$miArchivo = fopen("usuario.txt", "r");
while(!feof($miArchivo)) {
  //echo fgets($miArchivo) . "<br>";
  var_dump($miArchivo);
  $objeto =json_encode(fgets($miArchivo));
  //var_dump($objeto);
  echo "<li>".$objeto->Nombre."</li>";
}
fclose($miArchivo);

?>

<ol>

</body>
</html>


















