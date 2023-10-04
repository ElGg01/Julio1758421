<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Formulario</title>
</head>

<body>
    <?php include "sources/nav.php" ?>
    <main>
        <h1>Formulario con PHP</h1>
        <div class="container-form">
            <form action="get.php" method="get">
                <div class="form-row">
                    <i class="fi fi-sr-user"></i>
                    <div class="input-data">
                        <input type="text" required name="txtname">
                        <div class="underline"></div>
                        <label for="">Nombre:</label>
                    </div>
                </div>
                <div class="form-row">
                    <i class="fi fi-sr-tally"></i>
                    <div class="input-data">
                        <input type="number" required name="txtage">
                        <div class="underline"></div>
                        <label for="">Edad:</label>
                    </div>
                </div>
                <div class="form-row">
                    <i class="fi fi-sr-envelope"></i>
                    <div class="input-data">
                        <input type="email" required name="txtemail">
                        <div class="underline"></div>
                        <label for="">Correo:</label>
                    </div>
                </div>
                <div class="form-row">
                    <i class="fi fi-sr-key"></i>
                    <div class="input-data">
                        <input type="password" required name="txtpassword">
                        <div class="underline"></div>
                        <label for="">Contraseña:</label>
                    </div>
                </div>
                <div class="form-row submit-btn">
                    <div class="input-data">
                        <div class="inner"></div>
                        <input type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php include "sources/footer.php" ?>
</body>
</html>