<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>JAO2017</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet"/>
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style-form.css" rel="stylesheet" />

    <!-- JS -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/type_event.js"></script>
    <script type="text/javascript" src="js/champs_intervenant.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_2.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_3.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_4.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_5.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_6.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_7.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php

	include('nav.php');

?>


<?php
session_start();
if($_SESSION['user']==''){
		 include_once'401.php';
}else{

// if($_POST['type_evenement']== ''){
// 	echo'
// 		<section class="gestion">
// 		';

// 				//include 'menu.php';

// 	echo'

// 			<div class="container">
// 					<div class="row">

// 						<div class="col-lg-12">
// 							<h1 class="page-header">Programmer un événement</h1>
// 						</div>

// 						<div class="col-lg-12">
// 							<h3>Votre session a expirée : <a href="ajout_evenement.php">retour</a></h3>
// 						</div>
// 					</div>
// 			</div>
// 		</section>
// 	';
// }else{

// $type = $_POST['type_evenement'];
//echo $type;

$sql = $dbh->prepare("SELECT * FROM `programme` WHERE user_id=? ORDER BY `id` DESC");
$sql->execute(array($_SESSION['user']));
$rows = $sql->fetchAll();
$r = $rows[0];

$sql = $dbh->prepare("SELECT * FROM `public` WHERE user_id=? LIMIT 1");
$sql->execute(array($_SESSION['user']));
$public = $sql->fetch();

$size_rows = count($rows);

$nom_evenement = "";
$thematique = "";
$heure_globale_debut = "";
$heure_globale_fin = "";

if ($size_rows > 0) {
	$nom_evenement = $r['nom_evenement'];
	$thematique = $r['thematique'];
	$heure_globale_debut = $r['heure_globale_debut'];
	$heure_globale_fin = $r['heure_globale_fin'];
}

// echo $nom_evenement."<br>".$heure_globale_debut."<br>".$heure_globale_fin;

echo'
<div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
						<div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
	<section class=" container-color">
	';

				//include 'menu.php';

echo'



				<form class=" container-color" method="post" action="evenement_check.php" enctype="multipart/form-data">


					<h3>VOTRE THÈME GLOBAL</h3>
					<p>Renseignez ici le thème global de votre JAO.</p>

				<div>
					<label>Nom de l\'événement :</label> <br/>
					<input type="text" name="nom_evenement" value="'.$nom_evenement.'" size="40" required />

					<br/><br/><br/>

					<label>Thématique :</label> <br/>
					<label style="font-size:10px;">
					Descriptif de votre événement en 50 mots maximum<br/>
					<textarea rows="10" cols="55" name="thematique" id="input_box" required>'.$thematique.'</textarea>
					</label>

					<br/><br/><br/>


					<label>Horaires :</label> <br/>
					<select id="heure_globale_debut" name="heure_debut" required>
						<!--<option value="0000">00:00</option>
						<option value="00h15" >00:15</option>
						<option value="00h30" >00:30</option>
						<option value="00h45" >00:45</option>
						<option value="01h00">01:00</option>
						<option value="01h15">01:15</option>
						<option value="01h30">01:30</option>
						<option value="01h45">01:45</option>
						<option value="02h00">02:00</option>
						<option value="02h15">02:15</option>
						<option value="02h30">02:30</option>
						<option value="02h45">02:45</option>
						<option value="03h00">03:00</option>
						<option value="03h15">03:15</option>
						<option value="03h30">03:30</option>
						<option value="03h45">03:45</option>
						<option value="04h00">04:00</option>
						<option value="04h15">04:15</option>
						<option value="04h30">04:30</option>
						<option value="04h45">04:45</option>
						<option value="05h00">05:00</option>
						<option value="05h15">05:15</option>
						<option value="05h30">05:30</option>
						<option value="05h45">05:45</option>
						<option value="06h00">06:00</option>
						<option value="06h15">06:15</option>
						<option value="06h30">06:30</option>
						<option value="06h45">06:45</option>
						<option value="07h00">07:00</option>
						<option value="07h15">07:15</option>
						<option value="07h30">07:30</option>-->
						<option value="07h45">07:45</option>
						<option value="08h00" selected>08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select id="heure_globale_fin"  name="heure_fin" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00">08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00" selected>00:00</option>
					</select>

					</hr>

					<br/><br/><br/>

					<hr>




					<label><h3>FORMAT D\'ÉVÉNEMENT</h3></label>
                        <br><br>
                        <p>Renseignez ici les différents formats qui ponctuent votre journée.<br>
						<em>Par exemple, il vous est possible d’ajouter un atelier qui débute à 10 heures et une conférence à 15 heures.</em><br><br>

<u><b>Vous n’avez pas prévu les différents formats de votre JAO ? Votre programme n’est pas encore finalisé ?</b></u><br>
Rassurez-vous ! Tout d’abord, n’oubliez pas d’enregistrer vos modifications. Puis il vous suffira de retourner dans «Ma JAO2017» et de cliquer sur «Ajouter format(s) d’événement». <br><br>

<u><b>Vous avez plusieurs même formats d’événement dans la même journée ? (Par exemple, plusieurs conférences)</b></u><br>
N’oubliez pas une fois encore d’enregistrer vos modifications en bas de la page. Puis, il vous sera possible d’ajouter autant de formats que possible en cliquant sur «Ajouter format(s) d’événement» <br><br>

<u><b>Vous souhaitez modifier vos événements ?</b></u><br>
Un tableau récapitulatif vous est proposé dans «modifier mon événement».</p>

						<br><br><br>













                          <input type="checkbox" name="programme[activer_evenement][Atelier]">
                          <input type="hidden" name="programme[type_evenement][]" value="Atelier" >
    <label><h4>ATELIER</h4></label><br><br>

    <div  class="valid">
      <label>Thème :</label> <br/>
					<label style="font-size:10px;">
					Descriptif de votre atelier en 50 mots maximum<br/>
      <textarea rows="10" cols="55" name="programme[theme][]"></textarea></label>

      <br><br>


					<label>Horaires :</label> <br/>
					<select name="programme[heure_debut][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00" selected>08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select name="programme[heure_fin][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00">08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00" selected>00:00</option>
					</select>

					<br/><br/><br>

					<h4>Intervenants</h4>

					<br><br>














					<!------------------->
					<!-- intervenant 1 -->
					<!------------------->

					<div>
						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40" />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40" />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40" />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40" />

						<div id="hide" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide();" onclick="javascript:hide();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 2 -->
					<!------------------->

					<div id="fields_2" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_2" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_2();" onclick="javascript:hide_2();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 3 -->
					<!------------------->

					<div id="fields_3" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_3" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_3();" onclick="javascript:hide_3();">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 4 -->
					<!------------------->

					<div id="fields_4" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_4" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 5 -->
					<!------------------->

					<div id="fields_5" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />
					</div>


				</div>

    </div>

    </hr>










<hr>


<div>


                                                  <br><br>


                          <input type="checkbox" name="programme[activer_evenement][Conference]" >
                          <input type="hidden" name="programme[type_evenement][]" value="Conference" >
    <label><h4>CONFÉRENCE</h4></label><br><br>

    <div  class="valid">
      <label>Thème :</label> <br/>
					<label style="font-size:10px;">
					Descriptif de votre conférence en 50 mots maximum<br/>
      <textarea rows="10" cols="55" name="programme[theme][]"></textarea></label>

      <br><br>


					<label>Horaires :</label> <br/>
					<select name="programme[heure_debut][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00" selected>08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select name="programme[heure_fin][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00">08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00" selected>00:00</option>
					</select>

					<br/><br><br>

					<h4>Intervenants</h4>

					<br/><br>

					<!------------------->
					<!-- intervenant 1 -->
					<!------------------->

					<div>
						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40" />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40" />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40" />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40" />

						<div id="hide2" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide2();" onclick="javascript:hide2();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 2 -->
					<!------------------->

					<div id="fields_22" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_22" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_22();" onclick="javascript:hide_22();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 3 -->
					<!------------------->

					<div id="fields_32" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_32" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_32();" onclick="javascript:hide_32();">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 4 -->
					<!------------------->

					<div id="fields_42" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_42" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_42();" onclick="javascript:hide_42();" class="deco_link">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 5 -->
					<!------------------->

					<div id="fields_52" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />
					</div>
    </div>
    </div>

    </hr>












</div>




<hr>

<div>


                                                  <br><br>


                          <input type="checkbox" name="programme[activer_evenement][Debat]">
                          <input type="hidden" name="programme[type_evenement][]" value="Debat" >

    <label><h4>DÉBAT</h4></label><br><br>
    <div  class="valid">

      <label>Thème :</label> <br/>

					<label style="font-size:10px;">
					Descriptif de votre débat en 50 mots maximum<br/>
      <textarea rows="10" cols="55" name="programme[theme][]"></textarea></label>

      <br><br>


					<label>Horaires :</label> <br/>
					<select name="programme[heure_debut][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00" selected>08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select name="programme[heure_fin][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00">08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00" selected>00:00</option>
					</select>

					<br/><br><br>

					<h4>Intervenants</h4>

					<br/><br>

					<!------------------->
					<!-- intervenant 1 -->
					<!------------------->

					<div>
						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40" />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40" />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40" />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40" />

						<div id="hide3" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide3();" onclick="javascript:hide2();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 2 -->
					<!------------------->

					<div id="fields_23" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_23" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_23();" onclick="javascript:hide_23();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 3 -->
					<!------------------->

					<div id="fields_33" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_33" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_33();" onclick="javascript:hide_33();">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 4 -->
					<!------------------->

					<div id="fields_43" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_43" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_43();" onclick="javascript:hide_43();" class="deco_link">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 5 -->
					<!------------------->

					<div id="fields_53" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />
					</div>
					</div>
					 </div>
    </hr>


</div>




<div>




<hr>

 <br><br>




                          <input type="checkbox" name="programme[activer_evenement][Projection]">
                          <input type="hidden" name="programme[type_evenement][]" value="Projection" >
    <label><h4>PROJECTION</h4></label><br><br>

    <div  class="valid">
      <label>Thème :</label> <br/>
					<label style="font-size:10px;">
					Descriptif de votre projection en 50 mots maximum<br/>
      <textarea rows="10" cols="55" name="programme[theme][]"></textarea></label>

      <br><br>


					<label>Horaires :</label> <br/>
					<select name="programme[heure_debut][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00" selected>08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select name="programme[heure_fin][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00">08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00" selected>00:00</option>
					</select>

					<br/><br/><br>

					<h4>Intervenants</h4>

					<br><br>

					<!------------------->
					<!-- intervenant 1 -->
					<!------------------->

					<div>
						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40" />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40" />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40" />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40" />

						<div id="hide" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide4();" onclick="javascript:hide4();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 2 -->
					<!------------------->

					<div id="fields_24" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_24" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_24();" onclick="javascript:hide_24();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 3 -->
					<!------------------->

					<div id="fields_34" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_34" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_34();" onclick="javascript:hide_34();">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 4 -->
					<!------------------->

					<div id="fields_44" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_44" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_44();" onclick="javascript:hide_44();" class="deco_link">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 5 -->
					<!------------------->

					<div id="fields_54" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />
					</div>
</div>
 </div>

    </hr>

</div>








<hr>


<div>

 <br><br>

     <input type="checkbox" name="programme[activer_evenement][Exposition]">
     <input type="hidden" name="programme[type_evenement][]" value="Exposition" >
    <label><h4>EXPOSITION</h4></label><br><br>

    <div  class="valid">
      <label>Thème :</label> <br/>
					<label style="font-size:10px;">
					Descriptif de votre exposition en 50 mots maximum<br/>
      <textarea rows="10" cols="55" name="programme[theme][]"></textarea></label>

      <br><br>


					<label>Horaires :</label> <br/>
					<select name="programme[heure_debut][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00" selected>08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select name="programme[heure_fin][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00">08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00" selected>00:00</option>
					</select>

					<br/><br/><br>

					<h4>Intervenants</h4>

					<br><br>

					<!------------------->
					<!-- intervenant 1 -->
					<!------------------->

					<div>
						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40" />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40" />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40" />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40" />

						<div id="hide5" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide5();" onclick="javascript:hide5();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 2 -->
					<!------------------->

					<div id="fields_25" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_25" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_25();" onclick="javascript:hide_25();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 3 -->
					<!------------------->

					<div id="fields_35" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_35" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_35();" onclick="javascript:hide_35();">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 4 -->
					<!------------------->

					<div id="fields_45" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_45" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_45();" onclick="javascript:hide_45();" class="deco_link">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 5 -->
					<!------------------->

					<div id="fields_55" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />
					</div>
					</div>

    </hr>

</div>






<div>

<hr>

 <br><br>




                          <input type="checkbox" name="programme[activer_evenement][Concours]">
                          <input type="hidden" name="programme[type_evenement][]" value="Concours">

    <label><h4>CONCOURS</h4></label><br><br>

    <div  class="valid">
      <label>Thème :</label> <br/>
					<label style="font-size:10px;">
					Descriptif de votre concours en 50 mots maximum<br/>
      <textarea rows="10" cols="55" name="programme[theme][]"></textarea></label>

      <br><br>


					<label>Horaires :</label> <br/>
					<select name="programme[heure_debut][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00" selected>08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select name="programme[heure_fin][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00">08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00" selected>00:00</option>
					</select>

					<br/><br/><br>

					<h4>Intervenants</h4>

					<br><br>

					<!------------------->
					<!-- intervenant 1 -->
					<!------------------->

					<div>
						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40" />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40" />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40" />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40" />

						<div id="hide66" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide6();" onclick="javascript:hide6();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 2 -->
					<!------------------->

					<div id="fields_26" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_26" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_26();" onclick="javascript:hide_26();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 3 -->
					<!------------------->

					<div id="fields_36" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_36" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_36();" onclick="javascript:hide_36();">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 4 -->
					<!------------------->

					<div id="fields_46" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_46" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_46();" onclick="javascript:hide_46();" class="deco_link">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 5 -->
					<!------------------->

					<div id="fields_56" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />
					</div>
					</div>

    </hr>

</div>








<div>

<hr>

 <br><br>




                          <input type="checkbox" name="programme[activer_evenement][Rencontre]">
                          <input type="hidden" name="programme[type_evenement][]" value="Rencontre">

    <label><h4>RENCONTRE</h4></label><br><br>

    <div  class="valid">
      <label>Thème :</label> <br/>
					<label style="font-size:10px;">
					Descriptif de votre rencontre en 50 mots maximum<br/>
      <textarea rows="10" cols="55" name="programme[theme][]"></textarea></label>

      <br><br>


					<label>Horaires :</label> <br/>
					<select name="programme[heure_debut][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00" selected>08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select name="programme[heure_fin][]" required>
						<!--<option value="0000">00:00</option>
						<option value="00h30">00:30</option>
						<option value="01h00">01:00</option>
						<option value="01h30">01:30</option>
						<option value="02h00">02:00</option>
						<option value="02h30">02:30</option>
						<option value="03h00">03:00</option>
						<option value="03h30">03:30</option>
						<option value="04h00">04:00</option>
						<option value="04h30">04:30</option>
						<option value="05h00">05:00</option>
						<option value="05h30">05:30</option>
						<option value="06h00">06:00</option>
						<option value="06h30">06:30</option>
						<option value="07h00">07:00</option>
						<option value="07h30">07:30</option>-->
						<option value="08h00">08:00</option>
						<option value="08h15">08:15</option>
						<option value="08h30">08:30</option>
						<option value="08h45">08:45</option>
						<option value="09h00">09:00</option>
						<option value="09h15">09:15</option>
						<option value="09h30">09:30</option>
						<option value="09h45">09:45</option>
						<option value="10h00">10:00</option>
						<option value="10h15">10:15</option>
						<option value="10h30">10:30</option>
						<option value="10h45">10:45</option>
						<option value="11h00">11:00</option>
						<option value="11h15">11:15</option>
						<option value="11h30">11:30</option>
						<option value="11h45">11:45</option>
						<option value="12h00">12:00</option>
						<option value="12h15">12:15</option>
						<option value="12h30">12:30</option>
						<option value="12h45">12:45</option>
						<option value="13h00">13:00</option>
						<option value="13h15">13:15</option>
						<option value="13h30">13:30</option>
						<option value="13h45">13:45</option>
						<option value="14h00">14:00</option>
						<option value="14h15">14:15</option>
						<option value="14h30">14:30</option>
						<option value="14h45">14:45</option>
						<option value="15h00">15:00</option>
						<option value="15h15">15:15</option>
						<option value="15h30">15:30</option>
						<option value="15h45">15:45</option>
						<option value="16h00">16:00</option>
						<option value="16h15">16:15</option>
						<option value="16h30">16:30</option>
						<option value="16h45">16:45</option>
						<option value="17h00">17:00</option>
						<option value="17h15">17:15</option>
						<option value="17h30">17:30</option>
						<option value="17h45">17:45</option>
						<option value="18h00">18:00</option>
						<option value="18h15">18:15</option>
						<option value="18h30">18:30</option>
						<option value="18h45">18:45</option>
						<option value="19h00">19:00</option>
						<option value="19h15">19:15</option>
						<option value="19h30">19:30</option>
						<option value="19h45">19:45</option>
						<option value="20h00">20:00</option>
						<option value="20h15">20:15</option>
						<option value="20h30">20:30</option>
						<option value="20h45">20:45</option>
						<option value="21h00">21:00</option>
						<option value="21h15">21:15</option>
						<option value="21h30">21:30</option>
						<option value="21h45">21:45</option>
						<option value="22h00">22:00</option>
						<option value="22h15">22:15</option>
						<option value="22h30">22:30</option>
						<option value="22h45">22:45</option>
						<option value="23h00">23:00</option>
						<option value="23h15">23:15</option>
						<option value="23h30">23:30</option>
						<option value="23h45">23:45</option>
						<option value="00h00" selected>00:00</option>
					</select>

					<br/><br/><br>

					<h4>Intervenants</h4>

					<br><br>

					<!------------------->
					<!-- intervenant 1 -->
					<!------------------->

					<div>
						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40" />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40" />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40" />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40" />

						<div id="hide7" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide7();" onclick="javascript:hide7();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 2 -->
					<!------------------->

					<div id="fields_27" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_2" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_27();" onclick="javascript:hide_27();">Ajouter un intervenant</a>

						</div>
					</div>



					<!------------------->
					<!-- intervenant 3 -->
					<!------------------->

					<div id="fields_37" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_37" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_37();" onclick="javascript:hide_37();">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 4 -->
					<!------------------->

					<div id="fields_47" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />

						<div id="hide_47" class="unhidden">
							<br/><br/>


								<a href="javascript:unhide_47();" onclick="javascript:hide_47();" class="deco_link">Ajouter un intervenant</a>

						</div>
					</div>

					<!------------------->
					<!-- intervenant 5 -->
					<!------------------->

					<div id="fields_57" class="hidden">
						<hr/>
						<br/><br/><br/>

						<label>Nom :</label> <br/>
						<input type="text" name="programme[nom][]" size="40"  />

						<br/><br/><br/>

						<label>Prénom :</label> <br/>
						<input type="text" name="programme[prenom][]" size="40"  />

						<br/><br/><br/>

						<label>Fonction :</label> <br/>
						<input type="text" name="programme[fonction][]" size="40"  />

						<br/><br/><br/>

						<label>Société :</label> <br/>
						<input type="text" name="programme[societe][]" size="40"  />
					</div>
					</div>

    </hr>

</div>

<hr>


<label><h3>ACCUEIL DU PUBLIC</h3></label>
                        <br>

                        <p>Renseignez ici le nombre de places maximum de votre journée dans sa globalité</p>

                         <br><br>








					<label>Nombre de place limitées ?</label><br/>';
					if ($public['places_limitees'] == "oui") {
						echo '<label><input type="radio" name="places_limitees" value="oui" onClick="RadioGroup1_toggle(this);" checked="checked" />&nbsp; Oui</label><br/>
						<label><input type="radio" name="places_limitees" value="non" onClick="RadioGroup1_toggle(this);"  />&nbsp; Non</label><br /><br/>';
					}
					else {
						echo '<label><input type="radio" name="places_limitees" value="oui" onClick="RadioGroup1_toggle(this);" />&nbsp; Oui</label><br/>
						<label><input type="radio" name="places_limitees" value="non" onClick="RadioGroup1_toggle(this);" checked="checked"  />&nbsp; Non</label><br /><br/>';
					}
					echo '
					<div id="limite" style="visibility:hidden; display:none;">
						<label>Nombre de places disponibles :</label> <br/>
						<input type="text" name="nb_places" value="'.$public['nb_places'].'" size="5"  />

						<br/><br/>

						<br/><br/>

						<label>Événement complet ?</label> <br/>

							<label><input type="radio" name="inscription_close" value="oui" />&nbsp; Oui</label><br/>
						<label><input type="radio" name="inscription_close" value="non" />&nbsp; Non</label><br /><br/>

						<label>inscription ?</label><br/>';

						if ($public['inscription'] == "oui") {
					echo '
						<label class="selection"><input type="radio" name="inscription" value="oui" onClick="RadioGroup2_toggle(this);" checked="checked" />&nbsp; Oui</label><br/>
						<label class="selection"><input type="radio" name="inscription" value="non" onClick="RadioGroup2_toggle(this);" />&nbsp; Non</label><br /><br/>';
						}
						else {
					echo '<label class="selection"><input type="radio" name="inscription" value="oui" onClick="RadioGroup2_toggle(this);" />&nbsp; Oui</label><br/>
						<label class="selection"><input type="radio" name="inscription" value="non" onClick="RadioGroup2_toggle(this);" checked="checked" />&nbsp; Non</label><br /><br/>';
						}

						echo '
						

						<div id="inscription" style="visibility:hidden; display:none;">
							<label>Avant le :</label> <br/>
							<input type="text" name="limite_inscription"  value="'.$public['limite_inscription'].'" placeholder="jj/mm/aaaa" maxlength="10" />

							<br/><br/>

							<label>Par téléphone :</label> <br/>
							<input type="tel" name="telephone"  value="'.$public['telephone'].'" maxlength="10" placeholder="0000000000"  />

							<br/><br/>

							<label>Par mail :</label> <br/>
							<input type="text" name="email"  value="'.$public['email'].'" size="40" placeholder="exemple@exemple.fr"  />

							<br/><br/>

							<label>Autre, précisez :</label> <br/>
							<input type="text" name="autre"  value="'.$public['autre'].'" size="40"  placeholder="Lien événement facebook, twitter, etc." />

							<br/><br/>

							<h4>Contact</h4>
							<label>Nom :</label> <br/>
							<input type="text" name="nom_contact_inscription"  value="'.$public['nom_contact_inscription'].'" size="40"  />

							<br/><br/>

							<label>Prénom :</label> <br/>
							<input type="text" name="prenom_contact_inscription"  value="'.$public['prenom_contact_inscription'].'" size="40"  />

						

						</div>
					</div>
					<br><br>
					</hr>





					<input type="hidden" name="evenement_complet" value="non" />
					<button name="submit" class="none">Enregistrer</button>

					<br/><br/><br/><br/><br/><br/>

				</form>
			</div>
		 </div>
	</section>';

	if ($size_rows > 0) {
		echo "<script>

	document.getElementById('heure_globale_debut').value='".$heure_globale_debut."';
  document.getElementById('heure_globale_fin').value='".$heure_globale_fin."';

	</script>
	";
  }
	// }
}
?>




<!-- Script limiteur de mots -->
<script>

function check_words(e) {
    var BACKSPACE  = 8;
    var DELETE     = 46;
    var MAX_WORDS  = 50;
    var valid_keys = [BACKSPACE, DELETE];
    var words      = this.value.split(' ');

    if (words.length >= MAX_WORDS && valid_keys.indexOf(e.keyCode) == -1) {
        e.preventDefault();
        words.length = MAX_WORDS;
        this.value = words.join(' ');
    }
}

	var textarea = document.getElementById('input_box');
	textarea.addEventListener('keydown', check_words);
	textarea.addEventListener('keyup', check_words);

</script>

<script>
function RadioGroup1_toggle(c)
{
   if (c.value == 'non'){
      document.getElementById('limite').style.visibility='hidden';
	  document.getElementById('limite').style.display='none';}
   else{
      document.getElementById('limite').style.visibility='visible';
	  document.getElementById('limite').style.display='block';}
}

function RadioGroup2_toggle(c)
{
   if (c.value == 'non'){
      document.getElementById('inscription').style.visibility='hidden';
	  document.getElementById('inscription').style.display='none';}
   else{
      document.getElementById('inscription').style.visibility='visible';
	  document.getElementById('inscription').style.display='block';}
}
$(document).ready(function() {

	RadioGroup1_toggle($("[name=places_limitees]:checked")[0]);
	RadioGroup2_toggle($("[name=inscription]:checked")[0])
})
</script>

<!-- Footer -->
<?php $footer = include("footer.php"); ?>

</body>
</html>
