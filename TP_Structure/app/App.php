<?php

namespace app;

class App{

		const DB_NAME = 'blog';
		const DB_USER = 'root';
		const DB_PASS = 'root';
		const DB_HOST = 'localhost';

		private static $database;
		
		/*
		 * Initialise la connexion a la base de donnees en cas
		 * de besoin
		 */
		public static function getDb(){
			if(self::$database === null){
				self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
			}
			return self::$database;
		}
}

