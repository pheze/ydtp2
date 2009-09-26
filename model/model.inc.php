<?php

// require_once 'db.inc';

abstract class Model {
	public $id;
		
	// Construct a model object from an array of attributes.
	protected static function load($class, $attr) {
		$obj = new $class();
		
		// Use reflection to dynamically iterate through each field in the model.
		foreach (get_object_vars($obj) as $field => $value) {
			if (array_key_exists($field, $attr)) {
				$obj->$field = $attr[$field];
			}
		}
		
		return $obj;
	}
	
	// Return a model object matching the database row with the given id.
    public static function get($class, $id) {
    }

	// Return an array of model objects matching the given condition.
	protected static function filter($class, $where) {
		
	}
	
	// Save the model object to the associated database row.
	public function save() {
		
	}

	// Delete the database row associated to this model object.
	public function delete() {
		
	}
	
	// Return a string representing this model object.
	public function __tostring() {
		return "&lt;model id=$this->id /&gt;";
	}
}

// Run unit tests for the Model class.
function test_model_class() {		
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
	
	test_load();
}

?>
