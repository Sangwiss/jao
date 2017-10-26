<?php	
session_start();
include("config.php");

if(isset($_POST['submit'])){	
		 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 $r=$sql->fetch();
		 $nom_agence=$r['nom_agence'];
		 $user_id=$_SESSION['user'];
		 $nom_contact_2=$_POST['nom_contact_2'];
		 $prenom_contact_2=$_POST['prenom_contact_2'];
		 $telephone_1 = wordwrap($_POST['telephone_contact'], 2, ".", true);
		 $portable_1 = wordwrap($_POST['portable_contact'], 2, ".", true);
		 $telephone_2 = wordwrap($_POST['telephone_contact_2'], 2, ".", true);
		 $portable_2 = wordwrap($_POST['portable_contact_2'], 2, ".", true);
		 if($r['contact_rempli']=='non' AND $r['contact_secondaire']=='non'){

		$sql=$dbh->prepare("INSERT INTO `contact`(`id`, `user_id`, `nom_agence`, `nom_contact`, `prenom_contact`, `fonction_contact`, `telephone_contact`, `portable_contact`, `email_contact`, `nom_contact_2`, `prenom_contact_2`, `fonction_contact_2`, `telephone_contact_2`, `portable_contact_2`, `email_contact_2`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
				
		$sql->execute(array($_SESSION['user'], $nom_agence, $_POST['nom_contact'], $_POST['prenom_contact'], $_POST['fonction_contact'], $telephone_1, $portable_1, $_POST['email_contact'], $_POST['nom_contact_2'], $_POST['prenom_contact_2'], $_POST['fonction_contact_2'], $telephone_2, $portable_2, $_POST['email_contact_2']));
		
		$sql=$dbh->prepare("UPDATE `users` SET `contact_rempli`='oui' WHERE id=?");
		$sql->execute(array($_SESSION['user']));
		
		if($nom_contact_2!='' OR $prenom_contact_2!=''){
			$sql=$dbh->prepare("UPDATE `users` SET `contact_secondaire`='oui' WHERE id=?");
			$sql->execute(array($_SESSION['user']));}else{}	
			
			
			echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Ajout effectué avec succès.')
								window.location.href='gestion.php';
						   </SCRIPT>"));
			
			}
	
		
		if($r['contact_rempli']=='oui' AND $r['contact_secondaire']=='non'){

		$sql=$dbh->prepare("UPDATE `contact` SET `nom_contact_2`=?, `prenom_contact_2`=?, `fonction_contact_2`=?, `telephone_contact_2`=?, `portable_contact_2`=?, `email_contact_2`=?;");		
		$sql->execute(array($_POST['nom_contact_2'], $_POST['prenom_contact_2'], $_POST['fonction_contact_2'], $telephone_2, $portable_2, $_POST['email_contact_2']));
		
		$sql=$dbh->prepare("UPDATE `users` SET `contact_rempli`='oui' WHERE id='$user_id'");
		$sql->execute(array($_SESSION['user']));
		
		if($nom_contact_2!='' OR $prenom_contact_2!=''){
			$sql=$dbh->prepare("UPDATE `users` SET `contact_secondaire`='oui' WHERE id='$user_id'");
			$sql->execute(array($_SESSION['user']));}else{}
			
			
			echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Ajout effectué avec succès.')
								window.location.href='gestion.php';
						   </SCRIPT>"));
		
			}


}


?>