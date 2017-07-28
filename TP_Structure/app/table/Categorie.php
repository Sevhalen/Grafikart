<?php

namespace app\table;

use app\App;

class Categorie{
	
	private static $table = 'categories';
	
        
        /*
         * Recuperation des categories
         */
	public static function all(){
		return App::getDb()->query("
				SELECT *
				FROM " . self::$table
                                , __CLASS__);
	}
	
}
