<?php

require_once '../model/utilisateur.inc.php';

function get($array, $key, $default) {
    if (isset($array[$key])) { 
        return $array[$key];
    } else { 
        return $default;
    }
}

function get_auth() {
    if (!isset($_SESSION['userid'])) {
        return -1;
    }

    return $_SESSION['userid'];
}

function is_admin() {
    if (!isset($_SESSION['userid'])) {
        return false;
    }
    
    $user = Utilisateur::get($_SESSION['userid']);
    if ($user == null || $user->role != 2) { 
        return false; 
    }
        
    return true;
}

function clear_deprecated_reserved_matches() {
    echo 'I should clear deprecated already reserved matches now :-)';
}

?>
