<?php

require_once 'model.inc.php';

class Match {
    public $description;

	public $arena;
	
	public $date;
	
	public $prix;
	
	public $places;

    public static function get($id) {
		return parent::get(__CLASS__, $id);
	}
	
	public static function filter($where) {
		return parent::filter(__CLASS__, $where);
	}
}

?>
