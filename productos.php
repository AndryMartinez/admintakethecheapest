<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<nav class="navbar navbar-light bg-light" style="width:100%;margin-bottom:3%" >
  <a href="index.php" class="navbar-brand" href="#">

  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
  <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
</svg>
  &nbsp;
  Regresar
  </a>

</nav>

<?php
require 'conexion.php';

  if (isset($_GET["edit"])) {
      if (!empty($_GET["edit"])) {

        $idd = $_GET["edit"];
        $fx = $bd->query("SELECT * FROM productos WHERE idd=".$idd);
        $px = mysqli_fetch_array($fx);

          echo '
          <div class="container">
          <div class="row" style="padding:5%;" >
            <div class="card col-sm-5" style="padding:5%;margin:0px auto;">

            <form action="edit.php" method="post" enctype="multipart/form-data" >
            <input class="form-control" placeholder="Nombre" name="N" value="'.$px["nombre"].'" ><br> 
            <input class="form-control" placeholder="Precio" name="P" value="'.$px["precio"].'" ><br>  
            <input class="form-control" placeholder="Url" name="U" value="'.$px["urls"].'" ><br> 
            <input type="file" class="form-control" name="i" >
            <input type="hidden" value="'.$px["idd"].'" name="idd" >
            <br>
            <button type="submit" class="btn btn-primary" >Agregar</button> 
        </form>  


            </div>
          </div>
        </div>
          ';
      }
  }
?>

  <div class="" ></div>


<?php
  if (isset($_GET["view"])) {
    if (!empty($_GET["view"])) {

        $idd = $_GET["view"];
        $fx = $bd->query("SELECT * FROM productos WHERE idd=".$idd);
        $px = mysqli_fetch_array($fx);

        echo '
        <div class="row">
        <img src="uploads/'.$px["imagen"].'" class="img-thumbnail"
        style="width:500;height:500;margin:0px auto;"
        alt="Responsive image">

        </div>

        ';
    }
}


?>