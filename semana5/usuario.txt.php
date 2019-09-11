<?php
$miObjeto = new stdClass();
$miObjeto->nombre - $GET['nombre'];
$miObjeto->apellido - $GET['apellido'];

$archivo - fopen('usuarios.txt','a');
fwrite($archivo, json_enconde($miObjeto)."/n")
fclose($archivo);



?>
