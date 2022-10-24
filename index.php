<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();
// $db = new DB();
// $db->connect();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    $currentUser = $user->getNombre();
    echo "Hola ". $currentUser;
    include_once 'vistas/home.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if ($user->userExists($userForm, $passForm)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        echo "usuario validado, hola ". $user->getNombre();
        include_once 'vistas/home.php';
    }else {
        $errorLogin = "nombre de usuario y/o password incorrecto";
        include_once 'vistas/home.php';
    }
}else{
    echo "No hay un usuario logueado";
    include_once 'vistas/home.php';
}

?>