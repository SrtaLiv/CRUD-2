<?php
require_once './app/model/userModel.php';
require_once './app/view/userView.php';


/* MACHETES: 
PasswordVerify(); COMPARA PASSWORD DEL FORM CON LA DEL USUARIO EN LA DB.
SESSION_START; Crea sesion para saber si estaba logueado
$_SESSION['EMAIL] = $user->email; Guarda una variable en la sesion.

*/

class userController{
    private $view;
    private $model;

    function __construct() {
        $this->view = new userView();
        $this->model = new userModel();
    }

    function showFormUser(){
        $this->view->showFormUser();
    }

    function verifyUser(){
        //Datos del formulario login
        if(!empty($email) &&  !empty($password)){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUser($email);
        
            if(!empty($user) && password_verify($password, $user->password)){

                //INICIO SESION Y LOGUEO AL USUARIO
                session_start(); 
                $_SESSION['ID_USER'] = $user->id_usuario;
                $_SESSION['USER_EMAIL'] = $user->email;
                
                header("Location: " . BASE_URL . "home");
            } else {
                $this->showFormUser("El usuario o la contra sonincorrectos"); }

        }  else {
            $this->showFormUser("El usuario no existe"); }     
    }

    
}