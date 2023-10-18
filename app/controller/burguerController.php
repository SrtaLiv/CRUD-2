<?php
require_once './app/model/burguerModel.php';
require_once './app/view/burguerView.php';

class burguerController{

    private $view;
    private $model;

    function __construct() {
        $this->view = new burguerView();
        $this->model = new burguerModel();
    }

    function showCombos(){
        $combos = $this->model->getCombos();
        $this->view->showCombos($combos);
    }

    function addCombo(){
            $name = $_POST['name'];
            $price = $_POST['price'];          
            
            if(empty($name) || empty($price)){
                $this->view->showError("Completar campos");
                return;
            }

            $id = $this->model->insertCombo($name, $price);
            if ($id) {
                header('Location: ' . BASE_URL);
            } else {
                $this->view->showError("Error al insertar combo");
            }
    }
    
}
