<?php

require_once 'db.inc.php';

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
		$query = "SELECT * FROM " . $class . "s WHERE id = $id;";
	    $result = mysql_query($query);
		$attr = mysql_fetch_assoc($result);
	    return self::load($class, $attr);
    }

	// Return an array of model objects matching the given condition.
	protected static function filter($class, $where) {
		$query = "SELECT * FROM " . $class . "s" . ($where == "" ? "":" WHERE $where");
		$result = mysql_query($query);
		$out = array();		
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$out[] = self::load($class, $row);
		}		
		mysql_free_result($result);
		return $out;
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

?>
