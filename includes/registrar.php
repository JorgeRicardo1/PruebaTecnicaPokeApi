<?php

    include 'user.php';

    if(!empty($_POST["registro"])){
        // echo "Estamos registrando";
        if(empty($_POST["username"])){
            echo "Por favor llene todos los datos";
        }else{

            $user = new User();
            $username=$_POST["username"];
            $password=$_POST["password"];


            try{
                $query = $user->connect()->query("INSERT INTO infologin(username,`password`)VALUES('$username','$password')");
                echo "Se añadio exitosamente <br/>";
                echo '<a href="http://localhost/ejercicios/pruebatecnica/">Volver</a>';
            }catch(PDOException $e){
                print_r("Error connection " . $e->getMessage());
            }

        }
    }


?>