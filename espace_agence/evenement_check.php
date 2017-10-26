<?php
session_start();
include("config.php");

if(isset($_POST['submit'])){
		 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 $r=$sql->fetch();
		 $nom_agence=$r['nom_agence'];
		 $logo_agence=$r['logo_agence'];
		 $zone=$r['zone'];
		 $mobilite=$r['mobilite_reduite'];
		 $malentendant=$r['malentendant'];
		 $malvoyant=$r['malvoyant'];
		 if($r['id']==$_SESSION['user']){



// chaine unique localisation événement
					function rand_string($length) {
						  $str="";
						  $chars = "abcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
						  $size = strlen($chars);
						  for($i = 0;$i < $length;$i++) {
						  $str .= $chars[rand(0,$size-1)];
						  }
						  return $str; /* Création d'une chaine de caractères random http://subinsb.com/php-generate-random-string */
						 }
						 $event_id = rand_string(8); /* Création d'une chaine de caractères random http://subinsb.com/php-generate-random-string */



$telephone = wordwrap($_POST['telephone'], 2, ".", true);
$count = count($_POST['programme']['type_evenement']);


//TABLE PROGRAMME
$sql=$dbh->prepare("UPDATE `programme` SET `nom_evenement` = ?, `thematique` = ?, `heure_globale_debut` = ?, `heure_globale_fin` = ? WHERE user_id = ?");
$sql->execute(array($_POST['nom_evenement'], $_POST['thematique'], $_POST['heure_debut'], $_POST['heure_fin'], $_SESSION['user']));


for ($index = 0; $index != $count; $index++) {
	// 	echo '<br>';
	$activer_evenement = $_POST['programme']['type_evenement'][$index];

	if (!isset($_POST['programme']['activer_evenement'][$activer_evenement]))
		continue;

	// echo $_POST['programme']['type_evenement'][$index];
	// echo $index;

	//TABLE PROGRAMME
	$dbg = "";
	$sql=$dbh->prepare("INSERT INTO `programme`(`id`,`user_id`, `event_id`,`nom_agence`, `zone`, `logo_agence`, `type_evenement`, `nom_evenement`, `thematique`, `theme`, `heure_globale_debut`, `heure_globale_fin`, `heure_debut`, `heure_fin`, `evenement_complet`, `mobilite_reduite`, `malentendant`, `malvoyant`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
		try {
  $sql->execute(array($_SESSION['user'], $event_id, $nom_agence, $zone, $logo_agence, $_POST['programme']['type_evenement'][$index], $_POST['nom_evenement'], $_POST['thematique'], $_POST['programme']['theme'][$index], $_POST['heure_debut'], $_POST['heure_fin'], $_POST['programme']['heure_debut'][$index], $_POST['programme']['heure_fin'][$index], $_POST['evenement_complet'], $mobilite, $malentendant, $malvoyant));
	} catch (Exception $e) {
						 	echo $e;
						 }


	$event = $dbh->lastInsertId();


	$intervenant_idx = 5 * $index;

	// //TABLE INTERVENANTS
	$sql=$dbh->prepare("INSERT INTO `intervenants`(`id`, `user_id`, `event_id`,`nom_evenement`, `nom_agence`, `nom_1`, `prenom_1`, `fonction_1`, `societe_1`, `nom_2`, `prenom_2`, `fonction_2`, `societe_2`, `nom_3`, `prenom_3`, `fonction_3`, `societe_3`, `nom_4`, `prenom_4`, `fonction_4`, `societe_4`, `nom_5`, `prenom_5`, `fonction_5`, `societe_5`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

		try {
	$sql->execute(array($_SESSION['user'], $event, $_POST['nom_evenement'], $nom_agence, $_POST['programme']['nom'][$intervenant_idx], $_POST['programme']['prenom'][$intervenant_idx], $_POST['programme']['fonction'][$intervenant_idx], $_POST['programme']['societe'][$intervenant_idx], $_POST['programme']['nom'][$intervenant_idx+1], $_POST['programme']['prenom'][$intervenant_idx+1], $_POST['programme']['fonction'][$intervenant_idx+1], $_POST['programme']['societe'][$intervenant_idx+1], $_POST['programme']['nom'][$intervenant_idx+2], $_POST['programme']['prenom'][$intervenant_idx+2], $_POST['programme']['fonction'][$intervenant_idx+2], $_POST['programme']['societe'][$intervenant_idx+2], $_POST['programme']['nom'][$intervenant_idx+3], $_POST['programme']['prenom'][$intervenant_idx+3], $_POST['programme']['fonction'][$intervenant_idx+3], $_POST['programme']['societe'][$intervenant_idx+3], $_POST['programme']['nom'][$intervenant_idx+4], $_POST['programme']['prenom'][$intervenant_idx+4], $_POST['programme']['fonction'][$intervenant_idx+4], $_POST['programme']['societe'][$intervenant_idx+4] ));

	} catch (Exception $e) {

						 	echo $e;
						 }
	}

	//TABLE PUBLIC
//	$sql=$dbh->prepare("INSERT INTO `public`(`id`,`user_id`, `places_limitees`, `nb_places`, `inscription_close`, `inscription`, `limite_inscription`, `telephone`, `email`, `autre`, `nom_contact_inscription`, `prenom_contact_inscription`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
//	try {
//  $sql->execute(array($_SESSION['user'], $_POST['places_limitees'], $_POST['nb_places'], $_POST['inscription_close'], $_POST['inscription'], $_POST['limite_inscription'], $telephone, $_POST['email'], $_POST['autre'], $_POST['nom_contact_inscription'], $_POST['prenom_contact_inscription']));
//  } catch (Exception $e) {

//						 	echo "Err = ". $e;
//						 }

	// $sql=$dbh->prepare("UPDATE `public` SET places_limitees=?, nb_places=?, inscription_close=?, inscription=?, limite_inscription=?, telephone=?, email=?, autre=?, nom_contact_inscription=?, prenom_contact_inscription=?  WHERE user_id = ?");
  // $sql->execute(array($_POST['places_limitees'], $_POST['nb_places'], $_POST['inscription_close'], $_POST['inscription'], $_POST['limite_inscription'], $telephone, $_POST['email'], $_POST['autre'], $_POST['nom_contact_inscription'], $_POST['prenom_contact_inscription'], $_SESSION['user']));










				///////////////////////////////
				///		  Envoi Mail  		///
				//////////////////////////////


				// Plusieurs destinataires
					 $to  = 'gtalmo@aacc.fr';
					 $dest = 'Guirec talmo';

					 // Sujet
					 $subject = utf8_decode("Nouvel événement JAO");

					 // message
					 $message = utf8_decode("
					 <html>
					  <head>
						<title>Nouvel événement JAO</title>
					  </head>
					  <body>
						<p>
							Bonjour, <br/><br/>

							".$nom_agence." vient de créer un nouvel événement : <strong>".$_POST['nom_evenement']."</strong>.
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
						echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Événement créé avec succès. $dbg')
								window.location.href='choix_evenement.php';
							   </SCRIPT>"));
					 }
					 else
					{
						echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Une erreur c'est produite lors de la création de l'événement.')
							  window.location.href='ajout_evenement.php';
							   </SCRIPT>"));
					}


				///////////////////////////////
				///		  Envoi Mail  		///
				//////////////////////////////

	}else{echo 'Vous n\'êtes pas autorisé à réaliser cette action.';}
}
?>
