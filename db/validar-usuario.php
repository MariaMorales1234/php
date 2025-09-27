<?php
$hostDb = "localhost";
$nameDb = "grupo_2_avanzada";
$userDb = "root";
$pwdDb = "";

$conexDb = new mysqli(
    $hostDb,
    $userDb,
    $pwdDb,
    $nameDb
);

if ($conexDb->connect_error) {
    die("Error de conexion db" . $conexDb->connect_error);
}

echo "Conexion exitosa!!!";


$user = $_POST["user"];
$pwd = $_POST["pwd"];

$sql = "select * from users where userName='$user' and password='$pwd'";

$result = $conexDb->query($sql);
if ($result->num_rows > 0) {//tiene que estar dentro del if por que se inicia si existe la sesion
    session_start();
    while ($row = $result->fetch_assoc()) {
        $_SESSION["idUser"] = $row["id"];
        $_SESSION["user"] = $row["userName"];
    }
    header("Location: ../dashboard.php");
}else{
    header("Location: ../index.html");
}

$conexDb->close();

?>