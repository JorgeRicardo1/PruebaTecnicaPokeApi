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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4><?php echo $pokemon->name; ?></h4>
                <?php echo $imagenPokemon; ?>
            </div>

        <div class="col">
            <h4>Habilidades</h4>
            <?php renderHabilidades($pokemon); ?>
        </div>
        </div>
    </div>
    <a href="http://localhost/ejercicios/pruebatecnica/">Volver</a>
    
</body>
</html>