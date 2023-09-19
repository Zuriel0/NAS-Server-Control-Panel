<?php
function sepWay ($arg, $seps){
    $sep = $seps;
    $cad = $arg;
    $Separador = explode($sep, $cad);
    return $Separador;
}
function multi($arg, $nom){
    if($nom="K"){
        $arg = $arg*1000;
        return $arg;
    }
    if($nom="M"){
        $arg = $arg*1000000;
        return $arg;
    }
    if($nom="G"){
        $arg = $arg*1000000000;
        return $arg;
    }
}
function tres($total,$par){
    $res = ($par*100)/$total;
    return $res;
}
?>