<?php
	include("config.php");
		   if(isset($_POST['nom_agence'])){
			$sql=$dbh->prepare("SELECT COUNT(*) FROM `users` WHERE `nom_agence`=?");
			$sql->execute(array($_POST['nom_agence']));
			if($sql->fetchColumn()!=0){
			 die(utf8_decode("<center>L'agence existe déjà.</center>"));
			}else{

				if($_POST['pass'] != $_POST['pass_1']){
					echo '<br/><br/><br/>';
					echo'<div id="main"><center>Les deux mots de passe ne sont pas identiques</center></div>';
				}else{
					  if(isset($_POST['submit'])){
					   include("config.php");
					   if(isset($_POST['user']) && isset($_POST['pass'])){
						$password=$_POST['pass'];
						$telephone = wordwrap($_POST['telephone'], 2, ".", true);
						$ville = strtolower($_POST['ville']);
						$ville_modif = mb_convert_case($ville, MB_CASE_TITLE, "UTF-8");
						$name = $_FILES['file']['name'];
						$sql=$dbh->prepare("SELECT COUNT(*) FROM `users` WHERE `username`=?");
						$sql->execute(array($_POST['user']));
						if($sql->fetchColumn()!=0){
						 die("<center>User Exists</center>");
						}else{
						 function rand_string($length) {
						  $str="";
						  $chars = "abcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.%/+&$^*";
						  $size = strlen($chars);
						  for($i = 0;$i < $length;$i++) {
						  $str .= $chars[rand(0,$size-1)];
						  }
						  return $str; /* Création d'une chaine de caractères random http://subinsb.com/php-generate-random-string */
						 }
						 $p_salt = rand_string(40); /* Création d'une chaine de caractères random http://subinsb.com/php-generate-random-string */
						 $site_salt="937w9Pp85U8926qh362wj5jx64C5g6AD8h76RNV8234QN7X99yy359J96R5h"; /*SALT commun, ne peut-être modifié qu'au moment d'un nouvel enregistrement*/
						 $salted_hash = hash('sha512', $password.$site_salt.$p_salt);
						 //$salted_hash = password_hash($password, PASSWORD_BCRYPT); /*Autre méthode de cryptage http://php.net/manual/fr/function.password-hash.php*/
						try {
						 $sql=$dbh->prepare("INSERT INTO `users`(`id`, `admin`, `username`, `email`, `password`, `psalt`, `nom_agence`, `adresse`, `adresse_2`, `ville`, `cp`, `telephone`, `site_web`, `ligne_1`, `station_1`, `ligne_2`, `station_2`, `ligne_3`, `station_3`, `ligne_4`, `station_4`, `ligne_5`, `station_5`, `numero_bus_1`, `arret_1`, `numero_bus_2`, `arret_2`, `numero_bus_3`, `arret_3`, `numero_bus_4`, `arret_4`, `numero_bus_5`, `arret_5`, `facebook`, `twitter`, `youtube`, `snapchat`, `instagram`, `linkedin`, `mobilite_reduite`, `malentendant`, `malvoyant`, `logo_agence`, `contact_rempli`, `contact_secondaire`, `img_import`, `lien_video_import`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

						 $sql->execute(array($_POST['admin'], $_POST['user'], $_POST['email'], $salted_hash, $p_salt, $_POST['nom_agence'], $_POST['adresse'], $_POST['adresse_2'], $ville_modif, $_POST['cp'], $telephone, $_POST['site_web'], $_POST['ligne_1'], $_POST['station_1'], $_POST['ligne_2'], $_POST['station_2'], $_POST['ligne_3'], $_POST['station_3'], $_POST['ligne_4'], $_POST['station_4'], $_POST['ligne_5'], $_POST['station_5'], $_POST['numero_bus_1'], $_POST['arret_1'], $_POST['numero_bus_2'], $_POST['arret_2'], $_POST['numero_bus_3'], $_POST['arret_3'], $_POST['numero_bus_4'], $_POST['arret_4'], $_POST['numero_bus_5'], $_POST['arret_5'], $_POST['facebook'], $_POST['twitter'], $_POST['youtube'], $_POST['snapchat'], $_POST['instagram'], $_POST['linkedin'], $_POST['mobilite_reduite'], $_POST['malentendant'], $_POST['malvoyant'],  $name, $_POST['contact_rempli'], $_POST['contact_secondaire'], $_POST['img_import'], $_POST['lien_video_import']));
						 }
						catch (Exception $e) {
								echo $e;
							}
						 $sql=$dbh->prepare("INSERT INTO `contact`(`id`, `user_id`, `nom_agence`, `nom_contact`, `prenom_contact`, `fonction_contact`, `telephone_contact`, `portable_contact`, `email_contact`, `twitter_contact`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

				try {
					echo $dbh->lastInsertId();
						$sql->execute(array($dbh->lastInsertId(), $_POST['nom_agence'], $_POST['nom_contact'], $_POST['prenom_contact'], $_POST['fonction_contact'], $_POST['telephone_contact'], $_POST['portable_contact'], $_POST['email_contact'], $_POST['twitter_contact']));
					} catch (Exception $e) {
						 	echo $e;
						 }

							///////////////////////////////
							///		  Envoi Mail  		///
							//////////////////////////////


							// Plusieurs destinataires
							/* $to  = $r[$i]['gtalmo@aacc.fr'];*/

							 // Sujet
							 $subject = utf8_decode("JAO2017 : VOTRE PARTICIPATION");

							 // message
							 $message = utf8_decode("
							 <html>
							  <head>
								<title>JAO2017 : VOTRE PARTICIPATION</title>
							  </head>
							  <body>
								<p>



						Bonjour,<br><br>

						Nous avons bien noté votre participation à la #JAO2017 et vous en remercions.<br><br>

						Vous avez jusqu'au <u><b>jeudi 9 mars</b></u> pour renseigner votre programme en vous connectant à votre espace personnel avec le lien ci-dessous :<br><br>

						<a href = \"http://www.agences-ouvertes.com/espace_agence/connexion.php\">Mon compte</a> <br><br>


						À garder précieusement : <br>
						Votre identifiant : ".$_POST['user']." <br>
						Votre mot de passe : ".$_POST['pass']."<br><br>

						Nous restons à votre disposition pour tout complément d'information. <br><br>

						Cordialement, <br><br>

						</p>

						<table>
								<tr>
									<td>
										<b>Emilie Rohmer</b> <br>
										Directrice des Relations <br>
										Extérieures & des Partenariats <br>
										01 47 42 27 26  <br>
										erohmer@aacc.fr 
									</td>

									<td>
									<b>Dorine Bocquet</b><br>
									Chargée de Communication<br>
									01 47 42 13 42 <br>
									dbocquet@aacc.fr
									</td>
								</tr>

							<tr>
							<td>
							Support technique :<br><br>
							<b>Guirec Talmo</b><br>
							gtalmo@aacc.fr<br><br>
							</td>
							</tr>
						</table>


							  </body>
							 </html>
							 ");

							 //echo $message;

							 // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
							 $headers  = 'MIME-Version: 1.0' . "\r\n";
							 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

							 // En-têtes additionnels
							 $headers .= 'To: <dbocquet@aacc.fr>, '.$_POST['user'].' <'.$_POST['email'].'>' . "\r\n";
							 $headers .= 'From: AACC <no-reply@aacc.fr>' . "\r\n";
							 //$headers .="Return-Path:<no-reply@aacc.fr>\r\n";
							 //$headers .= 'Cc: ' . "\r\n";
							 //$headers .= 'Bcc: ' . "\r\n";

							 // Envoi
							 if(mail($to, $subject, $message, $headers))
							 {
								echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Merci pour votre participation. Vous allez bientôt recevoir un email de confirmation.')
									  window.location.href='connexion.php';
									   </SCRIPT>"));
							 }
							 else
							{
								echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Une erreur c'est produite lors de la création de votre compte.')
									  window.location.href='acces.php';
									   </SCRIPT>"));
							}

							///////////////////////////////
							///		  Envoi Mail  		///
							//////////////////////////////




								 // Importation //

						 define ("filesplace","./uploads");

						 if (is_uploaded_file($_FILES['file']['tmp_name'])) {

									// on vérifie maintenant l'extension
									$type_file = $_FILES['file']['type'];

									if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png'))
									{
										exit("Le fichier n'est pas valide.");
									}

									$name = $_FILES['file']['name'];
									$result = move_uploaded_file($_FILES['file']['tmp_name'], filesplace."/$name");
									if ($result == 1) {

								   }else {echo "<p>Erreur : Aucun fichier à importer</p>";}

						}
					}
				}
			}
		}
	}
}
?>
