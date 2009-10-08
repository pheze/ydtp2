<?php 

require '../model/arena.inc.php';
require '../model/match.inc.php';


function generate_vars($section, &$vars) {
    if (!$vars['is_logged'] || !$vars['is_admin']) { 
        return; 
    } 
    

    $matches = Match::filter('');
    $vars['matches'] = $matches; 
    
    if (isset($_POST['erase'])) {
        $number = $_POST['erase'];
        if ($number < 0 || $number >= count($matches)) {
            return;
        } else {
            $matches[$number]->delete();
            $matches = Match::filter('');
            $vars['matches'] = $matches; 
        }
    }


    if (isset($_POST['description1'])) {
        for ($i = 0; $i < count($matches); $i++) {
            $match = $matches[$i];

            if ($match->description != $_POST['description' . $i] || 
                $match->date != $_POST['date' . $i] ||  
                $match->arena != $_POST['arena' . $i] ||  
                $match->prix != $_POST['prix' . $i])
            {
                $match->description = $_POST['description' . $i];
                $match->date = $_POST['date' . $i];
                $match->arena = $_POST['arena' . $i];
                $match->prix = $_POST['prix' . $i];
                $match->save();
            }
        }
    }


    if (!empty($_POST['description-nouveau']) && 
        !empty($_POST['date-nouveau']) &&
        !empty($_POST['arena-nouveau']) &&
        !empty($_POST['prix-nouveau']))

    { 
        $match = new Match();
        $match->description = $_POST['description-nouveau'];
        $match->date = $_POST['date-nouveau'];
        $match->arena = $_POST['arena-nouveau'];
        $match->prix = $_POST['prix-nouveau'];
        $match->save();
    }

    $matches = Match::filter('');
    $vars['matches'] = $matches; 
}

?>
