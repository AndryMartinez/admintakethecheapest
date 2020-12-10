<?php
require 'conexion.php';



    if (isset($_GET['id'])) {
        $ss = $_GET['id'];
        $data = $bd->query("SELECT * FROM  productos  WHERE pais=".$ss." ORDER BY RAND() ") ;
       
    } else {
        $data = $bd->query("SELECT * FROM  productos ORDER BY RAND() ") ;
    }




  

        $result = [];
        $i = 0;
        while($dd = mysqli_fetch_array($data)){
            $result[$i]= $dd;
            ++$i;
        }

        echo json_encode($result)

?>