<?php 
require 'conexion.php';

if (isset($_POST['N'])) {

   $nombre = $_POST['N'];
   $url = $_POST['U'];
   $precio = $_POST['P'];
   $idd = $_POST['idd'];

   $bd->query("UPDATE productos
   SET nombre = '$nombre', precio= '$precio',
   urls='$url'
   WHERE idd = $idd;");

   if ($_FILES['i']['name']) {
       $imagenUrl = $_FILES['i']['name'];

        $dir_subida = 'uploads/';
        $fichero_subido = $dir_subida . basename($_FILES['i']['name']);

        $bd->query("UPDATE productos
        SET imagen = '$imagenUrl'
        WHERE idd = $idd;");

        if (move_uploaded_file($_FILES['i']['tmp_name'], $fichero_subido)) {
        } else {
            
        }




   }
  
   echo 'exito';


    
}


?>


