<?php
session_start();
include("config.php");

		if(isset($_POST['submit'])) {

	$sql = $dbh->prepare("SELECT * FROM `public` WHERE user_id=? LIMIT 1");
	$sql->execute(array($_SESSION['user']));
	$r = $sql->fetchAll();



	if (count($r) == 0) {

		$sql=$dbh->prepare("INSERT INTO `public`(`id`,`user_id`, `places_limitees`, `nb_places`, `inscription_close`, `inscription`, `limite_inscription`, `telephone`, `email`, `autre`, `nom_contact_inscription`, `prenom_contact_inscription`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
		try {
			$sql->execute(array($_SESSION['user'], $_POST['places_limitees'], $_POST['nb_places'], $_POST['inscription_close'], $_POST['inscription'], $_POST['limite_inscription'], $_POST['telephone'], $_POST['email'], $_POST['autre'], $_POST['nom_contact_inscription'], $_POST['prenom_contact_inscription']));
		} catch (Exception $e) {
			echo "Err = ". $e;
		}

	}
	else {

			try {
				$sql=$dbh->prepare("UPDATE `public` SET places_limitees=?, nb_places=?, inscription_close=?, inscription=?, limite_inscription=?, telephone=?, email=?, autre=?, nom_contact_inscription=?, prenom_contact_inscription=?  WHERE user_id = ?");


					$sql->execute(array($_POST['places_limitees'], $_POST['nb_places'], $_POST['inscription_close'], $_POST['inscription'], $_POST['limite_inscription'], $_POST['telephone'], $_POST['email'], $_POST['autre'], $_POST['nom_contact_inscription'], $_POST['prenom_contact_inscription'], $_SESSION['user']));

		}
		catch (Exception $e) {
			echo "ERR 2 = ".$e;
		}
  }

								echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
									window.alert('Enregistré avec succès.')
									window.location.href='choix_evenement.php';
									   </SCRIPT>"));


}


?>
