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

/* printing out button html */
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