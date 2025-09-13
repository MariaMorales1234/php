<?php
$numero = $_POST['numero'];

$mod = $numero % 2;
if ($mod == 0){
    echo "El numero es par";
}else{
    echo "El numero es impar";
}
?>