<?php	
session_start();
include("config.php");

if(isset($_POST['submit'])){	
		 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 $r=$sql->fetch();
		 
		 $user_id=$_SESSION['user'];
		 $nom_contact_2=$_POST['nom_contact_2'];
		 $prenom_contact_2=$_POST['prenom_contact_2'];
		 
		 $telephone_1 = wordwrap($_POST['telephone_contact'], 2, ".", true);
		 $portable_1 = wordwrap($_POST['portable_contact'], 2, ".", true);
		 $telephone_2 = wordwrap($_POST['telephone_contact_2'], 2, ".", true);
		 $portable_2 = wordwrap($_POST['portable_contact_2'], 2, ".", true);
		 
		 
		 if($r['id']==$_SESSION['user']){ 
			 	$sql=$dbh->prepare("SELECT * FROM contact WHERE user_id=?");
			 	$sql->execute(array($_SESSION['user']));			
				$r=$sql->fetch();
				
		 		if($_POST['nom_contact']!='' AND $_POST['prenom_contact']!=''){

				$sql=$dbh->prepare("UPDATE `contact` SET `nom_contact`=?, `prenom_contact`=?, `fonction_contact`=?, `telephone_contact`=?, `portable_contact`=?, `email_contact`=?, `twitter_contact`=? WHERE user_id='$user_id';");
						
				$sql->execute(array($_POST['nom_contact'], $_POST['prenom_contact'], $_POST['fonction_contact'], $telephone_1, $portable_1, $_POST['email_contact'], $_POST['twitter_contact']));
				
				echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Mise à jour effectuée avec succès.')
								window.location.href='gestion.php';
						   </SCRIPT>"));
				
				
					
					}else{}
								
	}
}


?>