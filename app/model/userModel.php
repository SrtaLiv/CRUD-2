<?php
require_once './app/controller/userController.php';

class userModel{
    
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
    }

    function getUser($user){
        $query = $this->db->prepare('SELECT * FROM user WHERE email = ?');
        $query->execute([$user]);

        $user=$query->fetch(PDO::FETCH_OBJ); 

        return $user;
    }

}