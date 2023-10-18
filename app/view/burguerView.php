<?php

class burguerView{
    
    //obtenemos todos los combos en $combos
    function showCombos($combos){
        $count = count($combos); 
        //COUNT:  devuelve el número de elementos que hay en el arra

        // NOTA: el template va a poder acceder a todas las variables y constantes que tienen alcance en esta funcion
        include './template/combos.php';
    }

    public function showError($error) {
        require './template/error.phtml';
    }

}