<?php
function sepWay ($arg, $seps){
    $sep = $seps;
    $cad = $arg;
    $Separador = explode($sep, $cad);
    return $Separador;
}

$slot_1 = false;
if(isset($resp[1])){
    //print "yes";
    $slot_1 = true;
    $status_1 = '<i class="bi bi-circle-fill" style="color: green;"></i>';
}else{
    //print "No";
    $slot_1 = false;
    $status_1= '<i class="bi bi-circle" style="color: orange;"></i>';   
}


?>