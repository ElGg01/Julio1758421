<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Hola <?php session_start(); echo $_SESSION['username']; ?> desde una pagina, si entraste </h1>
    <a href="./index.php">Salir</a>
</body>
</html>