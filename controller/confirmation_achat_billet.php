<?php 

function generate_vars($section, &$vars) {
    if (!isset($_GET['match_id']) || !isset($_GET['nombre_billet'])) {
        $vars['ok'] = false;
        return;
    }    

    // #todo: verification si tout est okblabla..
    $vars['match_id'] = $_GET['match_id'];
    $vars['nombre_billet'] = $_GET['nombre_billet'];
    $vars['ok'] = true;
}

?>
