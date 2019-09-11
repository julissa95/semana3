<?php
//echo "Hola";
//var_dump($_GET);
echo "Su nombre es ".$_GET['Nombre'];
echo "Su apellido es ".$_GET['Apellido'];
$archivo=fopen('usuario.txt','a');
//fwrite($archivo,$_GET['Nombre']."\n");

//vamos a testear que nos muestra esto
$MiObjeto=new stdClass();
//Lo que hicimos fue crear un Objeto
//Ese obejto creado es un standard class que me indica 
//cuantos valores hay en cada uno.
$MiObjeto->Nombre=$_GET['Nombre'];
$MiObjeto->Apellido=$_GET['Apellido'];
var_dump(json_encode($MiObjeto));
//Notación de obejto de java script
//deja la escritura de un obejto para
// 
//fomra de transmitir datos
fwrite($archivo,json_encode($MiObjeto)./n);
fclose($archivo);

//var_dump($MiObjeto);

$archivo = fopen("usuario.txt", "r") or die("Unable to open file!");
echo fread($archivo,filesize("usuario.txt"));
fclose($myfile);


$myfile = fopen("usuario.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);














?>