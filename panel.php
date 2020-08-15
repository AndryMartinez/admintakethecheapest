<?php

require 'conexion.php';

?>

<nav class="navbar navbar-light bg-light" style="width:100%;margin-bottom:3%" >
  <a class="navbar-brand" href="#">TakeTheCheapest Admin</a>
  <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Salir</a>
</nav>


<?php
if (isset($_GET["g"])) {
    switch ($_GET['g']) {
        case 'success':
           echo '
           <div class="alert alert-success col-sm-6" role="alert" style="float:right;">
               El producto fue agregado con exito  
           </div>
           ';
            break;
        case 'deletepro' :
            echo '
            <div class="alert alert-warning col-sm-6" role="alert" style="float:right;">
                El producto fue Eliminado 
            </div>                
            ';
            break;
        default:
            # code...
            break;
    }
}
?>

<div class="container" >

    <div class="row" >



        <div class="card col-sm-4" style="padding:5%;margin:1%;" >
            <h6 class="card-head" >
                    Agregar Producto
            </h6>
            <form action="data.php" method="post" enctype="multipart/form-data" >
                <input class="form-control" placeholder="Nombre" name="Nombre" ><br> 
                <input class="form-control" placeholder="Precio" name="Precio" ><br>  
                <input class="form-control" placeholder="Url" name="Url" ><br> 
                <select name="Pais" id="" class="form-control">
                    <option value="1">Venezuela</option>
                    <option value="2">Argentina</option>
                </select><br>
                <input type="file" class="form-control" name="imagen" >
                <br>
                <button type="submit" class="btn btn-primary" >Agregar</button> 
            </form>    
        </div>

        <div class="card col-sm-4" style="padding:5%" >
            <h6 class="card-head" >
                   paises
            </h6>
        <?php
            $resultPaises = $bd->query("SELECT * FROM  paises") ;
            while ($paises = mysqli_fetch_array($resultPaises) ) {

              

              if ($paises["status"]== 'Activo') {
                
                echo '
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="'.$paises["code"].'" checked>
                    <label class="form-check-label" for="'.$paises["code"].'">
                    <a href="paises.php?p='.$paises["code"].'"> '.$paises["code"].'</a>
                    </label>
                </div>
                ';

              }else {

                echo '
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="'.$paises["code"].'" >
                    <label class="form-check-label" for="'.$paises["code"].'">
                    <a href="paises.php?p='.$paises["code"].'">'.$paises["code"].'</a>
                    </label>
                </div>
                ';
                
                 
              }


            }
        ?>
 

        </div>



    </div>

</div>



