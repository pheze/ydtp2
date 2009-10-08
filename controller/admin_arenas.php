<?php 

require '../model/arena.inc.php';


function generate_vars($section, &$vars) {
    if (!$vars['is_logged'] || !$vars['is_admin']) { 
        return; 
    } 
    

    $arenas = Arena::filter('');
    $vars['arenas'] = $arenas; 
    
    if (isset($_POST['erase'])) {
        $number = $_POST['erase'];
        if ($number < 0 || $number >= count($arenas)) {
            return;
        } else {
            $arenas[$number]->delete();
            $arenas = Arena::filter('');
            $vars['arenas'] = $arenas; 
        }
    }


    if (isset($_POST['nom1'])) {
        for ($i = 0; $i < count($arenas); $i++) {
            $arena = $arenas[$i];

            if ($arena->nom != $_POST['nom' . $i] || 
                $arena->sieges != $_POST['sieges' . $i]) {
                $arena->nom = $_POST['nom' . $i];
                $arena->sieges = $_POST['sieges' . $i];
                $arena->save();
            }
        }
    }


    if (!empty($_POST['nom-nouveau']) && !empty($_POST['sieges-nouveau'])) {
        $arena = new Arena();
        $arena->nom = $_POST['nom-nouveau'];
        $arena->sieges = $_POST['sieges-nouveau'];
        $arena->save();
    }

    $arenas = Arena::filter('');
    $vars['arenas'] = $arenas; 
}

?>
