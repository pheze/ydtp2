<?php

require_once 'model.inc.php';

class Reservation {
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
}

?>
