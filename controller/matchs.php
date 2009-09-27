<?php 

class Match {
    public $id = 1;

    public function Match($id) {
        $this->id = $id;
    }

    public static function find($what) {
        return array(new Match(1), new Match(2));        
    }
}

function generate_vars($section, &$vars) {
    $matchs = Match::find('');
    $vars['matchs'] = $matchs; 
}

?>
