<?
	session_start();
	setcookie("auth", "", time()+5);
	setcookie("PHPSESSID","",time()-3600,"/");
	session_destroy();
	header("Location: connexion.php");
?>