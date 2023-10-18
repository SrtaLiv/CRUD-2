<?php

class burguerModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
    }

    function getCombos(){
        $query = $this->db->prepare('SELECT * FROM combo');
        $query->execute();
        $combos=$query->fetchAll(PDO::FETCH_OBJ); 

        return $combos;
    }

    function insertCombo($name, $price){
        $query = $this->db->prepare('INSERT INTO combo (`name`, `price`) VALUES (?, ?)');
        $query->execute([$name, $price]);

        return $this->db->lastInsertId();
    }




}