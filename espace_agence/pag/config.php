<?
	$limit = 1;
	$adjacent = 1;
	
	/*try {
		$strConnection = 'mysql:host=localhost;dbname=JAO2016'; 
		$arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
		$dbh = new PDO($strConnection, 'root', 'root', $arrExtraParam); // Instancie la connexion
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
		die($msg);
	}*/
	
	
	/**/try {
		$strConnection = 'mysql:host=localhost;dbname=agencesouvertes'; 
		$arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
		$dbh = new PDO($strConnection, 'jao', '8dtd1yns', $arrExtraParam); // Instancie la connexion
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
		die($msg);
	}
	
	/*try {
		$strConnection = 'mysql:host=localhost;dbname=canneslions'; 
		$arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
		$dbh = new PDO($strConnection, 'cannes-mysql', '8dtd1yns', $arrExtraParam); // Instancie la connexion
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
		die($msg);
	}*/
?>