<?php include 'conexionApi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeApi prueba Tecnica</title>
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="navBar">
            <ul>
                <li><a href="">Registrarse</a></li>
                <li><a href="">Loguearse</a></li>
                <li><a href="">Desloguearse</a></li>
            </ul>
        </div>
        <div class="container_nombre">
            <?php renderPokemons(150, $datos)?>
        </div>
    </div>
</body>
</html>