<?php

include('../lib/source/serpent.class.php');
$serpent = new serpent();
$serpent->compile_dir = '../view/templates_compiled';
$serpent->addPluginConfig('resource', 'file', array(
    'template_dir' => '../view/templates/')
);

echo $serpent->render('index');

?>
