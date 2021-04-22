<?php
if(isset($_GET['xaanaas']) && $_GET['xaanaas'] != "") {
    echo "Origin: " . $_GET['xaanaas'] . " file.";
}


/* count() - toolox */
if(count($_POST) > 0) {
    foreach ($_POST as $value) {
        echo "$value <br>";
    }
}
?>