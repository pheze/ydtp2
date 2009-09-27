<?php 

function generate_vars($section, &$vars) {
    foreach ($_GET as $x => $y) {
        echo $x . "=>" . $y . '<br>';
    }
}

?>
