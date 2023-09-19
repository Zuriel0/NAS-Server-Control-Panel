<?php 
function sepWay ($arg, $seps){
    $sep = $seps;
    $cad = $arg;
    $Separador = explode($sep, $cad);
    return $Separador;
}
$name = $_POST['Nombre'];
$pass = $_POST['Contraseña'];
$grupo = $_POST['Grupo'];
$counter = 1;
$flag = true;
$myfile = fopen("./../bash/users.txt", "r") or die("Unable to open file!");
$res = fread($myfile,filesize("./../bash/users.txt"));
$res = sepWay($res,"|");
fclose($myfile);

for($i=0; $i < count($res) ; $i++ ) {
    $key = sepWay($res[$i], " ");
    if ($key[1] == $name){
        $flag = false;
    }
}

?>