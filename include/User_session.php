<!-- Es el encargado de almacenar cierta informacion de incio de secion para su osterior uso -->

<?php

class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user, $id){
        $_SESSION['user'] = $user;
        $_SESSION['id'] = $id;
    }

    public function getCurrentUser(){
        return $_SESSION;
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>