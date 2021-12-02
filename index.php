<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvinguda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["usuario"])){ 
    ?>
    <h2>Benvingut</h2>
     <form action="login.php" method="post">
        <div id="login">
            <br>
            <div id="textoLogin">Log in </div>
            <br>
            <input name="usuario" type="text" placeholder="Escribe tu nombre de usuario">
            <br><br>
            <input name="password" type="password" placeholder="Contraseña">
            <br><br>
            <input type="submit" value="Entrar">
            <br>
        </div>
    </form>
    <?php
        }
        else{
            header("Location: cataleg.php");
        }
    ?>
</body>
</html>