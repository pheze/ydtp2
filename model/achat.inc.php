<?php

require_once 'model.inc.php';

class Achat extends Model {
    public $utilisateur;

	public $match;
	
	public $qte;
	
	public $date;

    public static function get($id) {
		return parent::get(__CLASS__, $id);
	}
	
	public static function filter($where) {
		return parent::filter(__CLASS__, $where);
	}
	
	public static function filter_by_user($id) {
		return self::filter('utilisateur = ' . $id);
	}
}

?>
