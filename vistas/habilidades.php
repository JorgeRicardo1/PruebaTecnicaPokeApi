<?php
    include "../includes/conexionApi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades</title>
</head>
<body>
    <?php
        if(isset($_GET["name"])){
            
            $name = $_GET["name"];
            $pokemon = getPokemon($name);
            echo '<img src="'. $pokemon->sprites->front_default.'">';
            
        }
        
    ?>
    
</body>
</html>