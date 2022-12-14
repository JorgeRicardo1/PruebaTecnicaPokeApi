<?php
include_once 'db.php';

class User extends DB{
    // private $nombre;
    private $username;

    public function userExists($user, $pass){
        // $password = $pass;

        $query = $this->connect()->prepare('SELECT * FROM infologin WHERE username = :user AND `password` = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM infologin WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach($query as $currentUser){
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->username;
    }

}

?>