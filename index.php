<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();
// $db = new DB();
// $db->connect();

if(isset($_SESSION['user'])){
    echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
    // echo "Validacion de login";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if ($user->userExists($userForm, $passForm)){
        echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'vistas/home.php';
    }else {
        $errorLogin = "nombre de usuario y/o password incorrecto";
        include_once 'vistas/home.php';
    }
}else{
    echo "login";
    include_once 'vistas/home.php';
}

?>