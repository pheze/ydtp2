<?php 

class Match {
    public $id; 
    public function Match($id) { $this->id = $id; }
}

function generate_vars($section, &$vars) {

    if (!isset($_GET['id'])) {
        return;
    }

    //$match = Match.find('id = ' . $_GET['id'])
    $match = new Match($_GET['id']);
    $vars['match_id'] = $match->id;
}

?>
