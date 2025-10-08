<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Registrar usuarios</h1>
    <a href="dashboard.php">Volver</a>
    <br>
    <form action="operaciones/crear-usuarios.php" method="post">
        <fieldset>
            <legend>Registrar usuarios</legend>
            <div>
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user">
            </div>
            <div>
                <label for="pwd">Password</label>
                <input type="password" name="pwd" id="pwd">
            </div>
        </fieldset>
        <button type="submit">Crear</button>
    </form>
</body>
</html>