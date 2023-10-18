<?php

class userView{
    

    function showFormUser($message = ''){
        include './template/login.php';
        echo "$message";
    }

    

    public function showError($error) {
        require 'templates/error.phtml';
    }

}