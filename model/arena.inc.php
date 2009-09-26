<?php

require_once 'model.inc.php';

class Arena {
    public $nom;

	public $sieges;

    public static function get($id) {
		return parent::get(__CLASS__, $id);
	}
	
	public static function filter($where) {
		return parent::filter(__CLASS__, $where);
	}
}

?>
