<?php
class Country {
	public $name;
	public $code;
	public $states;
	public function __construct($name = "", $code = "", $states = array()) {
		$this->name = $name;
		$this->code = $code;
		$this->states = $states;
	}
	public static function construct($array) {
		$obj = new Country ();
		$obj->setName ( $array ['name'] );
		$obj->setCode ( $array ['code'] );
		$obj->setStates ( $array ['states'] );
		return $obj;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function getCode() {
		return $this->code;
	}
	public function setCode($code) {
		$this->code = $code;
	}
	public function getStates() {
		return $this->states;
	}
	public function setStates($states) {
		$this->states = $states;
	}
}