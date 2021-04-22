<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>
		
<?php
function xoosonbish($field) {
	if($field != "") {
		return 1; //true
	}
	return 0; //false
}

function zugeerprintxiigeerei() {
	echo "<br>";
}

function konop() {
	echo '<button type="submit">Calculate</button>';
}

function calculate($nom1, $nom2, $uildel) {
	switch($uildel) {
		case "apprenticemn@gmail.com":
		case "i@apprentice.mn":
		case "+":
			return $nom1 + $nom2;
		break;
		case "-":
			return $nom1 - $nom2;
		break;
		case "*":
			return $nom1 * $nom2;
		break;
		case "/":
			return $nom1 / $nom2;
		break;

		default:
			return 'Aldaa';
	}
	return 'Mash tom aldaa';
}


	if(isset($_GET['email'])) {
		print_r($_GET['email']);
	}
// print_r($_POST);
	if( xoosonbish($_POST['nomer1']) && xoosonbish($_POST['nomer2']) && xoosonbish($_POST['uildel'])) {
		$hariu = calculate($_POST['nomer1'], $_POST['nomer2'], $_POST['uildel']);
		if(xoosonbish($hariu)) {
			echo $hariu;
		}
	}
	?>
	</h1>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="index.php" method="POST" >
					<h2>Calculator</h2>
					<input name="nomer1" type="number" placeholder="#1" required />
					<?php zugeerprintxiigeerei(); ?>
					<?php zugeerprintxiigeerei(); ?>
					<?php zugeerprintxiigeerei(); ?>
					<?php zugeerprintxiigeerei(); ?>
					<?php zugeerprintxiigeerei(); ?>
					<input name ="nomer2" type="number" placeholder="#2" required />
					<select required name="uildel" class="form-select" aria-label="Uildel">
						<option selected></option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">/</option>
					</select>
					<?php konop(); ?>
					<?php konop(); ?>
					<?php konop(); ?>
					<?php konop(); ?>
					<?php konop(); ?>
					<?php konop(); ?>
					<?php konop(); ?>
				</form>
			</div>
		</div>
	</div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>