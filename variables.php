<?php
$nombre = "ana";//string
$apellido = 'Gomez';//string
echo $nombre, " ", $apellido, "<br>";//concatenar
echo "$nombre $apellido <br>";
echo '$nombre $apellido <br>';
$edad = 32;//int
$promedio = 3.5;//float
$mayorEdad = true; //false booleano
$ejemplo = null; //vacio para inicializar

$numero = array(1, 2, 3, 4, 5, 6);
$numero = [1, 2, 3, 4, 5, 6];
$lista = ["a", 12, 12.3, true, null, []];
echo $numero[0] ."". $numero[1] . "<br>";

$persona = [
    'nombre'=>"Juan",
    "apellida"=>'perez',
    "edad" => 25,
    "numero" => [2, 4, 6, 8],
    "jobs" => [
        "a" => "job 1",
        "b" => "job 2",
        "c" => "job 3"

    ]
];
echo $persona["nombre"] . '<br>';
echo $persona["numeros"][0] . '<br>';
echo $persona["jobs"]["b"] . '<br>';
define('TITULO','hola php');
echo TITULO . '<br>';

const sub_titulo = 'Subtitulo';
echo sub_titulo . "<br>";
?>