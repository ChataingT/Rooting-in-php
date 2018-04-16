<?php
	class BD{
	
		private $dbName = "Bdd";//mettre le nom de votre base de donnée
		private $pass = "tp"; //donnez le mot de passe de votre bd 
		private $user = "root"; //donnez le nom d'utilisateur de la bd (probablement "root")
		
		private function getDB(){
			$db = null;
			try{
				$db = new PDO('mysql:host=localhost;dbname='.$this->dbName, $this->user, $this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			}
			catch (Exception $e){
					die('Erreur : ' . $e->getMessage());
				}
			return $db;
		}
		
		public function requete($sql, $arrParam){
			
			$db = $this->getDB();
			$r = null;
		
			$ps = $db->prepare($sql);
			$resu = $ps->execute($arrParam);

			$r = $ps->fetchAll();//PDO::FETCH_OBJ);
			return $r;
		}
	}
?>
