<?php 


function check_login($username, $password) {
    // $membres = Membre.get('username = ' . $username);
    $membres = array(1);

    if (empty($membres)) {
        return -1;
    } else {
        //return $membres[0].id;
        return 1;
    }
}

function generate_vars($section, &$vars) {
    $vars['is_logged'] = false;

    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        return;
    }    

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        return;
    }

    //echo "username: " . $username . '<br>'; 
    //echo "password: " . $password . '<br>';

    $id = check_login($username, $password);
    if ($id == -1) {
        return;
    }
    
    $_SESSION['userid'] = $id;
    $vars['userid'] = $id; 
    $vars['is_logged'] = true;
}

?>
