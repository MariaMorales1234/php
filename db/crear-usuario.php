<?php
$user = $_POST["user"];
$pwd = $_POST["pwd"];

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
$sql = "insert into users (userName, password)values";
$sql .= "('$user','$pwd')";
$result = $conexDb->query($sql);
if ($result) {
    header("Location: ../dashboard.php");
} else {
    echo "Error al guardar los datos";
}

$conexDb->close();
?>