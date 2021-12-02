<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cataleg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["usuario"])){                           
    ?>
    <h2>Carta</h2>
    <div id="carta">
        <?php
            require_once("items.php");
            echo ('<form id="form" action="tiquet.php" method="post">');
            echo ('<div id="graella">');
            foreach($items as $key => $item){
            /*  echo('
                    <div class="item">                 
                        <img src="' . $item[2] . ' " ></div>
                        <div class="container_nom">'. $item[0] . '</div>
                        <div class="container_preu">' . $item[1] . ' € </div>
                        <div class="container_select">
                            <input type="number" name="' . $key . '"id="' .$key. '" value="0">
                            <input type="button" onclick="resta1(\''.$key.'\')" value="-">
                            <input type="button" onclick="suma1(\''.$key.'\')" value="+">
                        </div>
                    </div>
                    '
                );*/
                echo('
                <div class="item">
                    <br>
                    <input type="checkbox" id="'.$key.'"name="'.$key.'" value="1">
                        <label class="producte" for="'.$key.'">'.$item[0].'
                            <br>
                            <img src="'.$item[2].' "alt="">
                            <div class="preu">'.$item[1].' €  </div>
                        </label>
                        
                </div>
                ');              
            }
            echo ('</br><input id="botonSubmit" type="submit" value="Fer comanda">');
            echo  ('</div>'); 
        ?>
    </div>
    </br>
    <a href="logout.php" class="button">Tanca sesió</a>
    
    <?php        
    }
    else{
       header("Location: index.php");
    }
    ?>
</body>
</html>