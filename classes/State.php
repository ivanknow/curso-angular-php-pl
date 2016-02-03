<?php
class State{

	public $name;
	public function __construct($name= "" ){
		$this->name = $name;

	}

	public static function construct($array){
		$obj = new State();
		$obj->setName( $array['name']);
		return $obj;

	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name=$name;
	}

}