<?php

require_once 'model.inc.php';
require_once 'match.inc.php';

class Reservation extends Model {
    public $utilisateur;

	public $match;
	
	public $qte;
	
	public $expiration;

    public static function get($id) {
		return parent::get(__CLASS__, $id);
	}
	
	public static function filter($where) {
		return parent::filter(__CLASS__, $where);
    }
    
    public function get_match() {
        return Match::get($this->match);
    }
}

?>