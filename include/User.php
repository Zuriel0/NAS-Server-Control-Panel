<!--Este archivo permite comparar la informacion de incio de secion y obtener informacion del mismo -->

<?php
include_once 'DB.php';

class User extends DB{
    private $Name;
    private $Mail;
    private $ID;

    // verifica si el usuario y contraseña se encuentra dentro de la tabla de Users
    public function userExists($correo, $pass){
        $md5pass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM Users WHERE Mail = :correo AND password = :pass');
        $query->execute(['correo' => $correo, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($correo){
        $query = $this->connect()->prepare('SELECT * FROM Users WHERE Mail = :user');
        $query->execute(['user' => $correo]);
        
        foreach ($query as $currentUser) {
            $this->Name = $currentUser['Name'];
            $this->Mail = $currentUser['Mail'];
            $this->ID = $currentUser['ID'];
        }
    }

    public function getNombre(){
        return $this->ID;
    }
   
}
?>