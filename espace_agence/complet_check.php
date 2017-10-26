<?php	
session_start();
include("config.php");

if(isset($_POST['complet'])){	
		 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 $r=$sql->fetch();
		 
		 $user_id=$_SESSION['user'];	 
		 $evenement_complet='oui';
		 $evenement_non_complet='non';
		 $verif=$_POST['cible_nom_evenement'];
		 	 
		 if($r['id']==$_SESSION['user']){ 
			 	$sql=$dbh->prepare("SELECT * FROM programme WHERE nom_evenement='$verif'");
			 	$sql->execute(array($_SESSION['user']));			
				$r=$sql->fetch();
				
		 		if($r['evenement_complet']=='non' AND $_SESSION['user']==$user_id ){

					$sql=$dbh->prepare("UPDATE `programme` SET `evenement_complet`=? WHERE nom_evenement ='$verif';");
						
					$sql->execute(array($evenement_complet));
					
					echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Mise à jour de votre événement effectuée avec succès.')
								window.location.href='choix_evenement.php';
								</SCRIPT>"));
	
				
				}
								
	}
}

if(isset($_POST['non_complet'])){	
		 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 $r=$sql->fetch();
		 
		 $user_id=$_SESSION['user'];	 
		 $evenement_complet='oui';
		 $evenement_non_complet='non';
		 $verif=$_POST['cible_nom_evenement'];
		 	 
		 if($r['id']==$_SESSION['user']){ 
			 	$sql=$dbh->prepare("SELECT * FROM programme WHERE nom_evenement='$verif'");
			 	$sql->execute(array($_SESSION['user']));			
				$r=$sql->fetch();
				
		 		if($r['evenement_complet']=='oui' AND $_SESSION['user']==$user_id){
					
					$sql=$dbh->prepare("UPDATE `programme` SET `evenement_complet`=? WHERE nom_evenement ='$verif';");
						
					$sql->execute(array($evenement_non_complet));
					
					echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Mise à jour de votre événement effectuée avec succès.')
								window.location.href='choix_evenement.php';
						   </SCRIPT>"));
					
				}
								
	}
}


?>