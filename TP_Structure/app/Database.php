<?php

namespace app;

use \PDO;

class Database{

	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $pdo;

	public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost') {
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;
	}
	
	private function getPDO(){
		if($this->pdo == null){
			$pdo = new \PDO('mysql:dbname=blog;host=localhost', 'root', 'root');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;
		}
		
		return $this->pdo;
	}
	
	/**
	 * Retourne les lignes de la table article sous la forme d'une
	 * classe que l'on defini nous-meme
	 * @param string requete SQL
	 * @param class nom de la classe avec laquelle on recupere les resultats de la requete
	 */
	public function query($statement, $class_name){
		$req = $this->getPDO()->query($statement);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
		
		return $datas;
	}
	
	
	/**
	 * Methode de preparation des requete SQL permettant d'eviter
	 * les injections SQL
	 * Utilise la methode 'prepare' de PDO
	 * @param string Requete a preparer
	 * @param array Attributs de la requete
	 * @param class Classe selon laquelle on recupere les resultats de la requete
	 */
	public function prepare($statement, $attributes, $class_name, $one = false){
		$req = $this->getPDO()->prepare($statement);
		$req->execute($attributes);
		$req->setFetchMode(PDO::FETCH_CLASS, $class_name);
		
		if($one){
			$datas = $req->fetch();
		} else {
			$datas = $req->fetchAll();
		}
		
		return $datas;
	}
	
}
