<?php

include '../lib/util.php';
include('../lib/source/serpent.class.php');

session_start();

$sections = array('accueil', 'inscription', 'login', 'matchs', 'panier', 'achat', 'match_detail', 'signout');
$section = get($_GET, 'section', 'accueil');

if (!in_array($section, $sections)) {
    $section = 'unknown';
}


$vars = array();
$vars['userid'] = get_auth();
$vars['isadmin'] = is_admin();
$vars['is_logged'] = ($vars['userid'] >= 0);

include($section . '.php');
generate_vars($section, $vars); 
$vars['section_name'] = ucfirst(str_replace('_', ' ', $section));

$serpent = new serpent();
$serpent->compile_dir = '../view/templates_compiled';
$serpent->addPluginConfig('resource', 'file', array(
    'template_dir' => '../view/templates/')
);

$serpent->pass($vars);

echo $serpent->render($section);
?>
