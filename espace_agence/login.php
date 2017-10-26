<?
session_start();
if($_SESSION['user']!=''){header("Location:index.php");}
require_once 'config.php';
$user=$_POST['login'];
$password=$_POST['pass'];
if(isset($_POST) && $user!='' && $password!=''){
 $sql=$dbh->prepare("SELECT id,password,psalt FROM users WHERE username=?");
 $sql->execute(array($user));
 while($r=$sql->fetch()){
  $p=$r['password'];
  $p_salt=$r['psalt'];
  $id=$r['id'];
 }
 $site_salt="937w9Pp85U8926qh362wj5jx64C5g6AD8h76RNV8234QN7X99yy359J96R5h"; /*SALT commun, ne peut-être modifié qu'au moment d'un nouvel enregistrement - Les anciens SALT seront obsolètes*/
 $salted_hash = hash('sha512', $password.$site_salt.$p_salt);
 if($p==$salted_hash){
  $_SESSION['user']=$id;
  $_COOKIE["auth"];
  setcookie("auth", "yes", time()+3600);
  header("Location:gestion.php");
  
  /*Identification par ip*/
  include_once 'ip.php';
 
  $date = date("d-m-Y");
  $heure = date("H:i:s");
  
  $file = './sec/ip.txt'; 
	$text = "---------------------------------------------------"."\n".$user." "." ".get_ip()." "." ".$date." "." ".$heure."\n"; 
	$handle = fopen($file, "a+"); 
	
	// regarde si le fichier est accessible en écriture 
	if (is_writable($file)) { 
	// Ecriture 
		if (fwrite($handle, $text) == FALSE) { 
		  echo 'Impossible d\'écrire dans le fichier '.$file.''; 
		  exit; 
		} 
		fclose($handle); 
						
	} 
	else { 
		  echo 'Impossible d\'écrire dans le fichier '.$file.''; 
		} 
  /*Identification par ip*/
  
  
 }else{
	 session_destroy();
	 
	 include_once "nav.php";
	 
	 echo '<link href="css/style.css" rel="stylesheet" type="text/css" />';
	 
	 echo "<div>";
		 echo utf8_decode("<center><h2>Erreur d&#039;utilisateur/mot de passe. Acc&egrave;s refus&eacute;.</h2></center>");
		 echo utf8_decode("<center><h4><a href='connexion.php' id='caption'>Votre mot de passe est incorrect, veuillez recommencer. <br />
		 	Si le probl&egrave;me persiste, merci de vous r&eacute;f&eacute;rer &agrave; votre mail d&rsquo;inscription ou contacter Dorine Bocquet &agrave; cette adresse : dbocquet@aacc.fr&nbsp;</a></h4></center>");
	 echo "</div>";
	 

 }
}
?>