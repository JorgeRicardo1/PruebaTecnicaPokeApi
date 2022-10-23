<?php
    include "../includes/conexionApi.php";
    include "../includes/user.php";
    include "../includes/user_session.php";

    $userSession = new UserSession();
    $user = new User();
    
    $name = $_GET["name"];
    $pokemon = getPokemon($name);
    $imagenPokemon = '<img src="'. $pokemon->sprites->front_default.'">';

    if(!isset($_SESSION['user'])){
        header ("Location: http://localhost/ejercicios/pruebatecnica/");
    }
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
    <?php //print_r ($pokemon->abilities[1]->ability->name); ?>
    <div class="container">
        <div class="imagen_pokemon">
            <?php echo $imagenPokemon; ?>
        </div>
        <div class="habilidades">
            <?php renderHabilidades($pokemon); ?>
        </div>
    </div>
    <a href="http://localhost/ejercicios/pruebatecnica/">Volver</a>
    
</body>
</html>