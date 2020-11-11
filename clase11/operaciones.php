<?php
    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }

    function es_numero($num1, $num2){
        if(is_numeric($num1) && is_numeric($num2)){
            return true;
        }else{
            return false;
        }
    }

    function mostrar_error(){
        echo '<span class="error">Ingresa solo números</span>';
    }

    function valida_campos(){
        if(isset($_POST['primer_numero']) && isset($_POST['segundo_numero'])){
            $num1 = $_POST['primer_numero'];
            $num2 = $_POST['segundo_numero'];
            if(es_numero($num1, $num2)){
                echo multiplicar($num1, $num2);
            }else{
                mostrar_error();
            }
        }
    }
    

?>