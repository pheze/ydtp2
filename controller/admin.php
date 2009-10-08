<?php 

require '../model/arena.inc.php';


function generate_vars($section, &$vars) {
    if (!$vars['is_logged'] || !$vars['is_admin']) { 
        return; 
    } 
    
    $vars['arenas'] = Arena::filter('');
}

?>
