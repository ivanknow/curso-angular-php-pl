<?php
require 'Country.php';
require 'State.php';

class CountryRepository {
	private static $countries = array ();
	public static function init() {
		$countries = array();
		array_push ( $countries, new Country ( 'Germany', 'ger', array (
				new State ( 'Styria' ),
				new State ( 'Viena' ) 
		) ) );
		
		array_push ( $countries, new Country ( 'United States', 'usa', array (
				new State ( 'Montreal' ),
				new State ( 'Quebek' ) 
		) ) );
		
		array_push ( $countries, new Country ( 'Luxenburgo', 'lux' ) );
		
		self::$countries = $countries;
	}
	public static function getCountries() {
		if(count(self::$countries)=== 0)
		self::init();
		
		return self::$countries;
	}
}