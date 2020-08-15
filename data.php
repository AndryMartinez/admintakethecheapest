<?php
require "conexion.php";

if (isset($_POST['Nombre'])) {

    if (!empty($_POST['Nombre']) ) {

        if (!empty($_POST['Precio']) ) {

            if (!empty($_POST['Url']) ) {

              $Nombre =  $_POST["Nombre"];
              $Precio =  $_POST["Precio"];
              $Url =  $_POST["Url"];
              $Pais = $_POST["Pais"];
              $imagenUrl = $_FILES['imagen']['name'];

              $r =$bd->query("INSERT INTO productos (nombre, precio , urls ,imagen , pais) 
              VALUES ('$Nombre', '$Precio', '$Url' , '$imagenUrl' , '$Pais' );");

$dir_subida = 'uploads/';
$fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);

if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}


              echo ' <script> location.href="index.php?g=success" </script> ';
             
            }else {
                echo "la url es obligatoria";
            }

        }else {
            echo "El precio es obligatorio";
        }
        
    }else {
        echo 'El nombre es obligatorio';
    }
  
}



?>

<?php
if (isset($_GET['c'])) {
    $idp = $_GET['c']; 
   $bd->query('DELETE FROM productos WHERE idd='.$idp);

  echo ' <script> location.href="index.php?g=deletepro" </script> ';

}
?>





