<?php

require "index.php";
$user = "matias" ;

$pass = "123" ;


if($_POST["us"] == $user  ){

    if ($_POST["pas"] == $pass) {
    
        

        $_SESSION["activo"] = 1 ;

        echo '
        
        <script>
            location.href="index.php";
        </script>

        
        ';

    }else {
        echo "Password Incorrecto";
    }

}else {
    echo "Usuario Incorrecto";
}



?>