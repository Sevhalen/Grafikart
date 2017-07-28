<?php

namespace app\table;

use app\App;

class Article{
	
	/**
	 * Note perso : pas certain que get "Last" soit le bon terme
	 * puisque l'on recupere les articles un par un dans l'ordre
	 * et non seulement le dernier ...
	 */
	public static function getLast(){
			return App::getDb()->query("
				SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
				FROM articles
				LEFT JOIN categories
					ON categorie_id = categories.id
			", __CLASS__);
	}
	
	/**
	 * Methode magique
	 * Fonction permettant d'appeler automatiquement les methodes
	 * correspondant aux proprietes appelees mais non-definies
	 * @param string Proprietee appelee
	 */
	public function __get($key){
		$method = 'get' . ucfirst($key);
		$this->$key = $this->$method(); // stock le resultat dans la clee pour eviter de re-appelle la methode a chaque fois
		return $this->$key;
	}
	
	public function getUrl(){
		return 'index.php?p=article&id=' . $this->id;
	}
	
	public function getExtrait(){
		$html = '<p>' . substr($this->contenu, 4, 100) . ' ... </p>';
		$html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
		return $html;
	}
}
