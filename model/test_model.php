<?php

require_once 'model.inc.php';

// Run unit tests for the Model class.	
function test_load() {
	class TestLoad extends Model {
		public $foo;
					
		public static function load($attr) {
			return parent::load(__CLASS__, $attr);
		}
	}
	
	$attr = array("foo" => "barbara");
	
	$obj = TestLoad::load($attr);
	
	assert($obj->foo == "barbara");
}

class Arena extends Model {
	public $sieges;
	
	public static function get($attr) {
		return parent::get(__CLASS__, $attr);
	}
	
	public static function filter($attr) {
		return parent::filter(__CLASS__, $attr);
	}
}

function test_get() {			
	$obj = Arena::get(1);
			
	assert($obj->sieges == 85);
}

function test_filter() {			
	$arr = Arena::filter("");
		
	assert(count($arr) != 0);
}
	
test_load();

test_get();

test_filter();
?>