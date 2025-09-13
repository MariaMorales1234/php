<?php
function saluda($nombre){
    return "Hola $nombre";
}

function saludo($nombre=""){
    echo "Hola $nombre";
}
echo saluda ( "Pepe");
echo '<br>';
saludo("Ana");
echo '<br>';
saludo();

function sumar(...$valores){
    $rstl = 0;
    for ($i = 0; $i < count($valores); $i++){
        $rstl+= $valores[$i];
    }
    return $rstl;
}
echo '<br>';
echo sumar( 1, 2, 3, 4);
?>