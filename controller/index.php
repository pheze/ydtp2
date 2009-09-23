<?php
 
include '../lib/dwoo/dwooAutoload.php'; 
 
$dwoo = new Dwoo();
$data = array('a'=>5, 'b'=>6);

echo $dwoo->get('../view/templates/blah.tpl', $data);
?>
