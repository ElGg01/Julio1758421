<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/get.css">
    <title>Tus datos</title>
</head>
<body>
    <?php include "sources/nav.php" ?>
    <main>
        <div>
        <h1>Tus datos son:</h1>
            <div class="card">
                <?php
                    $name = $_GET["txtname"];
                    $age = $_GET["txtage"];
                    $email = $_GET["txtemail"];
                    $password = $_GET["txtpassword"];

                    echo "<h2>Tu nombre es:</h2>";
                    echo "<h3>$name</h3>";
                    echo "<h2>Tu edad es:</h2>";
                    echo "<h3>$age</h3>";
                    echo "<h2>Tu correo es:</h2>";
                    echo "<h3>$email</h3>";
                    echo "<h2>Tu contraseña es:</h2>";
                    echo "<h3>$password</h3>";
                ?>
            </div>
        </div>
    </main>
    <?php include "sources/footer.php" ?>
</body>
</html>