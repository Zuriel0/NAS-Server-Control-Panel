<?php
    require ("include/query.php");
    include_once ("include/User.php");
    include_once ("include/User_session.php");    
    $userSession = new UserSession();
    $user = new User();
    if(isset($_SESSION['Mail'])){
        $user->setUser($userSession->getCurrentUser());
        include_once 'home/Home.php';
    }else if(isset($_POST['Mail']) && isset($_POST['password'])){
        $userForm = $_POST['Mail'];
        $passForm = $_POST['password'];
        $user = new User();
        if($user->userExists($userForm, $passForm)){
            $user->setUser($userForm);
            $id=$user->getNombre();
            $userSession->setCurrentUser($userForm,$id);
            header ('location: home/Home.php');
        }else{
            $errorLogin = "Nombre de usuario y/o password incorrecto";
            include_once 'home/Login.php';
        } 
    }else{
        include_once 'home/Login.php';
    }  
?>



