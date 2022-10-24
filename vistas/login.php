<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container mt-4 p-5 bg-primary col-md-4 rounded">
        <div class="text-center">
            <h2>Iniciar sesion</h2>
            <form action="../index.php" method= "POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Nombre de usuario">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <input type="submit" value="Iniciar sesion" class="btn btn-info">
            </form>
        </div>

    </div>
    
    
</body>
</html>