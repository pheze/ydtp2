<?php 

require_once '../model/achat.inc.php';

function generate_vars($section, &$vars) {
    if (!$vars['is_logged']) { return; }
    
    $vars['achats'] = Achat::filter('utilisateur = ' . $vars['userid']);
}

?>
