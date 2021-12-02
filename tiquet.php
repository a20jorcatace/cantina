<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiquet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["usuario"])){     
            if(!empty($_POST)){   
    ?>
    <h2>Tiquet</h2>
    <div class="divTiquet">
        <h4>La teva comanda</h4>
        <?php
            require_once("items.php");
            $total = 0;
            foreach($items as $key => $item){            
                if(isset($_POST[$key])){
                    echo('                        
                        <div class="tiquetItem">
                            <div class="divTiquetNom"> - '.$item[0]. ': </div><div class="divTiquetPreu">   ' . $_POST[$key].' x ' . number_format($item[1],2) .' € </div>
                            
                        </div>
                    ');
                    $total += ($item[1] * $_POST[$key]);
                }
            }
            
            
            echo ('<div class="divTotal">-----------------------------------------------------</div>');
            echo ('<div class="divTotal" >Total: '.number_format($total,2).' €</div>');    
            echo '<br>'    ;
        ?>
    </div>
    <a href="logout.php" class="button">Tanca sesió</a>
    <a href="cataleg.php" class="button">Torna al menú</a>
    <?php
        }
        else{
            header("Location: cataleg.php");
         }
    }
    else{
       header("Location: index.php");
    }
    ?>
</body>
</html>