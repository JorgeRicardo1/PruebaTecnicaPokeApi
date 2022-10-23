<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigup</title>
</head>
<body>
    <form action="../includes/registrar.php" method= "POST">
        
        <h2>Ingrese su nuevo nombre de usuario y nueva contraseña</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <input type="submit" value="registrate" name="registro">
    </form>
</body>
</html>