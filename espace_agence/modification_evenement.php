<?php
session_start();
include("config.php");

if(isset($_POST['submit'])){
	include("config.php");
	$sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
	$sql->execute(array($_SESSION['user']));
	$r=$sql->fetch();
	$ancien_nom = $_POST['ancien_nom'];
	$event_id = $_POST['event_id'];

	//$nom_evenement=$r['nom_evenement'];
	//$nom_agence=$r['nom_agence'];
	if($r['id']==$_SESSION['user']){

		$telephone = wordwrap($_POST['telephone'], 2, ".", true);
		//$telephone = $_POST['telephone'];
		try {
		$sql=$dbh->prepare("SELECT * FROM programme WHERE event_id ='$event_id'");
		$sql->execute(array($_SESSION['user']));
		$r=$sql->fetch();
		$maj_agence=$r['nom_agence'];
		if($r['event_id']==$event_id){
			//TABLE PROGRAMME
			try {
				$sql=$dbh->prepare("UPDATE `programme` SET `theme` = ?, `heure_debut` = ?, `heure_fin` = ? WHERE id = ?");

				$sql->execute(array($_POST['theme'], $_POST['heure_debut'], $_POST['heure_fin'], $_POST['id']));
			}
			catch (Exception $e) {
				echo $e."<br><br>";
			}

			try {
				$sql=$dbh->prepare("UPDATE `programme` SET `nom_evenement` = ?, `thematique` = ? WHERE user_id = ?");

				$sql->execute(array($_POST['nom_evenement'], $_POST['thematique'], $_SESSION['user']));
			}
			catch (Exception $e) {
				echo $e."<br><br>";
			}

		}


		$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id = ?");
		$sql->execute(array($_POST['id']));
		$r=$sql->fetch();
}
catch (Exception $e)  {echo $e;}
		// if($r['event_id']==$event_id ){
		if (1) {
			//TABLE INTERVENANTS
			try {
			$sql=$dbh->prepare("UPDATE `intervenants` SET `nom_evenement` = ?, `nom_1` = ?, `prenom_1` = ?, `fonction_1` = ?, `societe_1` = ?, `nom_2` = ?, `prenom_2` = ?, `fonction_2` = ?, `societe_2` = ?, `nom_3` = ?, `prenom_3` = ?, `fonction_3` = ?, `societe_3` = ?, `nom_4` = ?, `prenom_4` = ?, `fonction_4` = ?, `societe_4` = ?, `nom_5` = ?, `prenom_5` = ?, `fonction_5` = ?, `societe_5` = ? WHERE event_id = ?;");

			 $sql->execute(array($_POST['nom_evenement'], $_POST['nom_1'], $_POST['prenom_1'], $_POST['fonction_1'], $_POST['societe_1'], $_POST['nom_2'], $_POST['prenom_2'], $_POST['fonction_2'], $_POST['societe_2'], $_POST['nom_3'], $_POST['prenom_3'], $_POST['fonction_3'], $_POST['societe_3'], $_POST['nom_4'], $_POST['prenom_4'], $_POST['fonction_4'], $_POST['societe_4'], $_POST['nom_5'], $_POST['prenom_5'], $_POST['fonction_5'], $_POST['societe_5'], $_POST['id']));
			 }
			 catch (Exception $e) {
			 echo $e;
			 }

			///////////////////////////////
			///		  Envoi Mail  		///
			//////////////////////////////


			// Plusieurs destinataires
			$to  = 'gtalmo@aacc.fr';
			$dest = 'Guirec Talmo';

			// Sujet
			$subject = utf8_decode("Modification d'un événement JAO");

			// message
			$message = utf8_decode("
			<html>
			<head>
			<title>Modification d'un événement JAO</title>
			</head>
			<body>
			<p>
			Bonjour, <br/><br/>

			<strong>".$maj_agence."</strong> vient de modifier un événement : <strong>".$_POST['nom_evenement']."</strong>
			</p>
			</body>
			</html>
			");

			//echo $message;

			// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// En-têtes additionnels
			$headers .= 'To: '.$dest.' <'.$to.'>' . "\r\n";
			$headers .= 'From: AACC <no-reply@aacc.fr>' . "\r\n";
			//$headers .="Return-Path:<no-reply@aacc.fr>\r\n";
			//$headers .= 'Cc: ' . "\r\n";
			//$headers .= 'Bcc: ' . "\r\n";

			// Envoi
			if(mail($to, $subject, $message, $headers))
			{
				echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript' charset='utf-8'>
				window.alert('Mise à jour effectuée avec succès.')
				window.location.href='choix_evenement.php';
				</SCRIPT>"));
			}
			else
			{
				echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript' charset='utf-8'>
				window.alert('Une erreur c'est produite lors de la modification de l'événement.')
				window.location.href='choix_evenement.php';
				</SCRIPT>"));
			}

			///////////////////////////////
			///		  Envoi Mail  		///
			//////////////////////////////

		}
	}else{//echo 'Vous n\'êtes pas autorisé à réaliser cette action.';

		echo 'Maintenance en cours - Merci de votre compréhension';

	}
}

?>
