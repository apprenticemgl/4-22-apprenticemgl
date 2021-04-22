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
  <?php include 'helpers.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php include 'inputs.php'; ?>
				<form action="index.php?xaanaas=index" method="POST">
					<input type="password" name="password"/>
					<?php hr(); ?>
					<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
					<label for="vehicle1"> I have a bike</label><br>
					<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
					<label for="vehicle2"> I have a car</label><br>
					<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
					<label for="vehicle3"> I have a boat</label>

					<?php hr(); ?>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="xuis" id="flexRadioDefault1" value="male">
						<label class="form-check-label" for="flexRadioDefault1">
							Male
						</label>
						</div>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="xuis" id="flexRadioDefault2" value="female" checked>
						<label class="form-check-label" for="flexRadioDefault2">
							Female
						</label>
					</div>

					<?php hr(); ?>
					
					<label for="customRange1" class="form-label">Example range</label>
					<input type="range" class="form-range" id="customRange1">
					
					<?php hr(); ?>
					
					<input type="submit">
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