<?php

namespace app\table;

class Article{
	
	/**
	 * Methode magique
	 * Fonction permettant d'appeler automatiquement les methodes
	 * correspondant aux proprietes appelees mais non-definies
	 * @var string Propriete appelee
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
