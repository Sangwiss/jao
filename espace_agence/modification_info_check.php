<?php
session_start();

if(isset($_POST['submit'])){
		 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 $r=$sql->fetch();
		 $telephone = wordwrap($_POST['telephone'], 2, ".", true);
		 $ville = strtolower($_POST['ville']);
		 $ville_modif = mb_convert_case($ville, MB_CASE_TITLE, "UTF-8");
		 $user_id = $_SESSION['user'];
		 if($r['id']==$_SESSION['user']){

$sql=$dbh->prepare("UPDATE `users` SET `nom_agence`=?, `adresse`=?, `adresse_2`=?, `ville`=?, `cp`=?, `telephone`=?, `site_web`=?, `ligne_1`=?, `station_1`=?, `ligne_2`=?, `station_2`=?, `ligne_3`=?, `station_3`=?, `ligne_4`=?, `station_4`=?, `ligne_5`=?, `station_5`=?, `numero_bus_1`=?, `arret_1`=?, `numero_bus_2`=?, `arret_2`=?, `numero_bus_3`=?, `arret_3`=?, `numero_bus_4`=?, `arret_4`=?, `numero_bus_5`=?, `arret_5`=?, `numero_tram_1`=?, `arret_tram_1`=?, `facebook`=?, `twitter`=?, `youtube`=?, `snapchat`=?, `instagram`=?, `linkedin`=?, `mobilite_reduite`=?, `malentendant`=?, `malvoyant`=? WHERE id='$user_id';");

$sql->execute(array($_POST['nom_agence'], $_POST['adresse'], $_POST['adresse_2'], $ville_modif, $_POST['cp'], $telephone, $_POST['site_web'], $_POST['ligne_1'], $_POST['station_1'], $_POST['ligne_2'], $_POST['station_2'], $_POST['ligne_3'], $_POST['station_3'], $_POST['ligne_4'], $_POST['station_4'], $_POST['ligne_5'], $_POST['station_5'], $_POST['numero_bus_1'], $_POST['arret_1'], $_POST['numero_bus_2'], $_POST['arret_2'], $_POST['numero_bus_3'], $_POST['arret_3'], $_POST['numero_bus_4'], $_POST['arret_4'], $_POST['numero_bus_5'], $_POST['arret_5'], $_POST['numero_tram_1'], $_POST['arret_tram_1'], $_POST['facebook'], $_POST['twitter'], $_POST['youtube'], $_POST['snapchat'], $_POST['instagram'], $_POST['linkedin'], $_POST['mobilite_reduite'], $_POST['malentendant'], $_POST['malvoyant']));


echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript' charset='utf-8'>
						window.alert('Mise à jour effectuée avec succès.')
						window.location.href='choix_modification.php';
				   </SCRIPT>"));

}
		}else{echo 'Vous n\'êtes pas autorisé à réaliser cette action.';}


?>
