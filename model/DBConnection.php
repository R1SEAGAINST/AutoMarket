<?php

define ( 'DB_HOST', 'localhost' );
define ( 'DB_NAME', 'automarket' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASS', '' );


class DBConnection {
	private static $db = null;
	
	public static function getDb() {
		if (self::$db === null) {
			try {
				self::$db = new PDO ( "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS );
				self::$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (PDOException $e) {
				throw new Exception("Error! We're working on it, try again later.", $e->getMessage());
			}
		}
		
		return self::$db;
	}
}
?>
