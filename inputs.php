<?php
if(isset($_GET['xaanaas']) && $_GET['xaanaas'] != "") {
    echo "Origin: " . $_GET['xaanaas'] . " file.";
}

print_r($_POST);
?>