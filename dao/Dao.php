<?php

include '../conf.php';

abstract class Dao {

	private static $_pdo = null;	// connexion db = la même toute l'application

/*
 * Construction d'un objet PDO représentant la connexion à la base de données.
 *
 * Le premier argument est un Data Source Name (DSN) représentant où est-ce qu'il
 * faut se connecter. Une adresse IP ou un nom de domaine peut être spécifié.
 *
 * /!\ Tout le DSN doit être écrit en minuscules et sans espaces.
 *
 */
 	public static function getConnection() {	
 	// le ticket de connexion est attribué une seule fois => meilleur pour les perfos!! => data STATIQUE
		if (self::$_pdo == null) {	// singleton pattern
			try {
				self::$_pdo = new PDO(DBPARAMS[0], DBPARAMS[1], DBPARAMS[2]);
				// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
				self::$_pdo->exec('SET NAMES UTF8');
				self::$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} 
			catch (PDOException $e) {	// impossible de se connecter!!
   				throw new Exception (ERR_CONN_MESS);
			}	
		}
		return self::$_pdo;
	}

	public function __destruct() {
		// déconnexion de la bd
		self::$_pdo = null;
	}
	
		// méthodes abstraites à implémenter pour chaque table (CRUD)	
			// récup un tableau d'objet 
	abstract public function getList() : array;		
			// récup un objet par son id
	abstract public function get(int $id) : array;	
			// insertion en BD d'un objet (true = ok, false = pb)
	abstract public function insert($obj) : boolean;	
			// delete via son id
	abstract public function delete(int $id ) : boolean; 
			// delete toute la table
	abstract public function deleteAll() : void; 
			// update d'un objet
	abstract public function update($obj ) : boolean; 

}

?>