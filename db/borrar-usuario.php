<?php
$id = $_GET["cod"];

$hostDb = "localhost";
$nameDb = "";
$userDb = "";
$pwdDb = "";

$conexDb = new mysqli(
    $hostDb,
    $userDb,
    $pwdDb,
    $nameDb
);

$sql = "delete from users where id=$id";
$result = $conexDb->query($sql);
if ($result) {
    header("Location: ../dashboard.php");
} else {
    echo "Error al borrar los datos";
}

$conexDb->close();
?>