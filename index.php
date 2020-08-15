<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<div class="container">
<br>

	<div class="row">

	<?php 
	session_start();

	if (isset($_SESSION["activo"])) {

		require 'panel.php';

	}else {


		echo '
		<div class="card col-sm-5" style="padding:5%;margin:0px auto">
				<h3 class="card-head" >
				Log In
				</h3>
				<form action="login.php" method="post" >
					<input type="text" class="form-control" name="us" placeholder="User" ><br>
					<input type="password" class="form-control" name="pas"  placeholder="Pass" ><br>
					<button type="submit" class="btn btn-primary" >Enviar</button>
				</form>

		</div>
		';
	}
	



	?>


	</div>

</div>

<style> *body { background:"lightgrey" }</style>