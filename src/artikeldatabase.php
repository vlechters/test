<?php
 

class ArtikelDatabase {
 
	private static $db;

	//prevent instances
	private function __construct() { 
	}
		
 	// Static methode om connectie functie te krijgen
	public static function getConnection() {
 
		//Als er geen connectie objecten zijn, maak dan een nieuwe
		if (!self::$db) {
			// Nieuwe connectie object
			self::$db = self::openNewConnection();
		}
 
		//return connectie
		return self::$db;
	}

	private static function openNewConnection() {
		
		$connection = null;

		try {

			$connection = new PDO( 
				'mysql:host=localhost;dbname=artikels', 
				'root', 
				'' 
			);
			
			$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		
		} catch (PDOException $e) {

			echo "Fout met verbinden: " . $e->getMessage();
		}	
	
		return $connection;
	}
 
}