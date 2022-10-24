<?php 
    include_once 'includes/conexionApi.php';
    include_once 'includes/db.php';
    include_once 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeApi prueba Tecnica</title>
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
        if (isset($errorLogin)){
            echo $errorLogin;
        }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PokeApi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="vistas/singup.php">Registrarse</a>
                <a class="nav-item nav-link" href="vistas/login.php">Loguearse</a>
                <a class="nav-item nav-link" href="includes/logout.php">Desloguearse</a>
            </div>
        </div>
    </nav>
    
    <div class="container_nombre">
        <?php 
            renderPokemons(150, $datos);
        ?>

    </div>
</body>

</html>