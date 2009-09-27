<?php

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

    // todo, check if admin
    return false;
}

function clear_deprecated_reserved_matches() {
    echo 'I should clear deprecated already reserved matches now :-)';
}

?>
