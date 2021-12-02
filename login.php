<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Incorrecta</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <?php

    $usuario_correcto = "ausias";
    $password_correcta = "ausias";


    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if ($usuario === $usuario_correcto && $password === $password_correcta) {
        session_start();    
        $_SESSION["usuario"] = $usuario;
        header("Location: cataleg.php");
    } else {
        echo "<h2>ERROR</h2>";
        echo "<br/>";
        echo '<div id="errorMsg">Usuario o contraseña incorrectos</div>';
        echo "<br>";
        echo '<a href="logout.php" class="button">Tornar</a>';
    }
    ?>
</body>
</html>