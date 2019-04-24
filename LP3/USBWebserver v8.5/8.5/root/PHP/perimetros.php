<?php   

function rectangle($base, $altura){
     $resul = 2*($base+$altura);
     return $resul;
}

function square($lado){
    $resul = 4*$lado;
    return $resul;
}

function paralelo($ladoUm,$ladoDois){
    $resul = 2*($ladoUm+$ladoDois);
    return $resul;
}

function trap($ladoUm,$ladoDois,$ladoTres,$ladoQuatro){
    $resul = $ladoUm+$ladoDois+$ladoTres+$ladoQuatro;
    return $resul;
}

?>



