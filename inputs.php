<?php
function xoosonbaina($field) {
	if($field == "") {
		return true; //1
	}
	return false; //0
}

// if(isset($_GET['xaanaas']) && $_GET['xaanaas'] != "") {
//     echo "Origin: " . $_GET['xaanaas'] . " file.";
// }


/* count() - toolox */
if(count($_POST) > 0) {
    // print_r($_POST['password']);
    hr();
    foreach($_POST as $index => $medeelel) {
        if(xoosonbaina($medeelel)) {
            echo "$index xooson baina!";
            die();
        }
        echo "$index : $medeelel <br>";
    }
    $password = $_POST['password'];
}

// $too = [12,5,95,8,5,848,48,454,84,84,54,54];
// foreach($too as $in => $to) {
//     echo "$in : $to <br>";
// }
?>