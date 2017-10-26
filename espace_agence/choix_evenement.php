<?php

	require_once 'config.php';

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JAO2017</title>
    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet"/>
    <link href="css/font-awesome.css" rel="stylesheet" />

    <!-- JS -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/champs_intervenant.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_2.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_3.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_4.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_5.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_6.js"></script>
    <script type="text/javascript" src="js/champs_intervenant_7.js"></script>

</head>

<body>
	<?php
		session_start();
		include 'nav.php';
	?>

    <?php
		 if($_SESSION['user']==''){
			require_once'401.php';
		 }else{
			 include("config.php");

			if (isset($_GET['del_event_id'])) {
				$sql=$dbh->prepare("DELETE FROM programme WHERE id=? AND user_id=?");
				$sql->execute(array($_GET['del_event_id'], $_SESSION['user']));
			}

			 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
			 $sql->execute(array($_SESSION['user']));

			 echo '
						<section class="gestion">

							';


					echo'
						<div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
						<div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
							<div class="container">
								<div class="row marge-top-form">';

			 echo '<table class="table1" border="1px" bordercolor="#C4C4C4" cellspacing="0" cellpadding="10px" width="800px" align="center">';
										echo '<tbody>';
											echo '<tr class="table2" align="center"><td>NOM DE L\'ÉVÉNEMENT</td><td>FORMAT D\'ÉVÉNEMENT</td><td>THÈME DU FORMAT</td><td>MODIFIER LE FORMAT</td><td>SUPPRIMER LE FORMAT D\'ÉVÉNEMENT</td></tr>';


			 while($r=$sql->fetch()){
			 if($r['id']==$_SESSION['user']){
			 	$sql=$dbh->prepare("SELECT * FROM programme WHERE user_id=?");
			 	$sql->execute(array($_SESSION['user']));



				while($r=$sql->fetch()){
					if($r['user_id']==$_SESSION['user']){

									echo '<tr align="center">';
									echo '<form method="post" action="fiche_modification_evenement.php">';
									echo '<input type="hidden" name="event_id" value="'.$r['event_id'].'" />'.'<input type="hidden" name="scan" value="'.$r['id'].'" />'.'<td width="400px">'.$r['nom_evenement'].'</td> <td width="400px">'.$r['type_evenement'].' </td> <td width="400px">'.$r['theme'].' </td><td width="800px" height="50px"><button name="submit" class="none">Modifier cet événement</button></td><td width="800px" height="50px"><a href="?del_event_id='.$r['id'].'">Supprimer ce format</a></td>';

									echo '</form>';

									// echo '<form method="post" action="complet_check.php">';
									//
									// if($r['evenement_complet']=='non'){
									// //	echo '<input type="hidden" name="cible_nom_evenement" value="'.$r['nom_evenement'].'"/>';
									// //	echo '<td width="800px" height="50px"> '.'<button name="complet" class="none">Votre événement est-il complet ?</button></td>';
									// }else if($r['evenement_complet']=='oui'){
									// //	echo '<input type="hidden" name="cible_nom_evenement" value="'.$r['nom_evenement'].'"/>';
									// //	echo '<td width="800px" height="50px"> '.'<button name="non_complet" class="none">Des places se sont-elles libérées ?</button></td>';
									// }
									//
									// echo '</form>';

									echo '</tr>';

					}

			  }
		 }


	}



	echo '</tbody></table>';

	$sql = $dbh->prepare("SELECT * FROM `public` WHERE user_id=? LIMIT 1");
	$sql->execute(array($_SESSION['user']));
	$r = $sql->fetch();

	 echo '<table class="menu-padding2 table1" border="1px" bordercolor="#C4C4C4" cellspacing="0" cellpadding="10px" width="800px" align="center">';
										echo '<tbody>';
											echo '<tr align="center"><td><button name="non_complet" class="none" onClick="$(\'#accueil\').toggle()">Modifier l\'accueil du public</button>
	<form method="post" action="modification_accueil_public.php" id="accueil" style="display:none">';

	echo	'<label><h3>ACCUEIL DU PUBLIC</h3></label>
															<br><br>










								<label>Nombre de place limitées ?</label><br/>';
							 	if ($r['places_limitees'] == "oui") {
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
									<input type="text" name="nb_places" value="'.$r['nb_places'].'" size="5"  />

									<br/><br/>

							<label>Événement complet ?</label> <br/>';



							if ($r['inscription_close'] == "oui") {
							 	echo '<label><input type="radio" name="inscription_close" value="oui"  checked="checked" />&nbsp; Oui</label><br/>
						<label><input type="radio" name="inscription_close" value="non" />&nbsp; Non</label><br /><br/>';
							 }
							 else {
							 	echo '<label><input type="radio" name="inscription_close" value="oui"/>&nbsp; Oui</label><br/>
						<label><input type="radio" name="inscription_close" value="non"   checked="checked" />&nbsp; Non</label><br /><br/>';
							 }


							 echo '


									<label>inscription ?</label><br/>';

									if ($r['inscription'] == "oui") {
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
										<input type="text" name="limite_inscription"  value="'.$r['limite_inscription'].'" placeholder="jj/mm/aaaa" maxlength="10" />

										<br/><br/>

										<label>Par téléphone :</label> <br/>
										<input type="tel" name="telephone"  value="'.$r['telephone'].'" maxlength="10" placeholder="0000000000"  />

										<br/><br/>

										<label>Par mail :</label> <br/>
										<input type="text" name="email"  value="'.$r['email'].'" size="40" placeholder="exemple@exemple.fr"  />

										<br/><br/>

										<label>Autre, précisez :</label> <br/>
										<input type="text" name="autre"  value="'.$r['autre'].'" size="40"  />

										<br/><br/>

										<h4>Contact</h4>
										<label>Nom :</label> <br/>
										<input type="text" name="nom_contact_inscription"  value="'.$r['nom_contact_inscription'].'" size="40"  />

										<br/><br/>

										<label>Prénom :</label> <br/>
										<input type="text" name="prenom_contact_inscription"  value="'.$r['prenom_contact_inscription'].'" size="40"  />

									</div>';
								echo '
								</div>

								</hr>

								<br><br><br>

								<button name="submit" class="none">Enregistrer</button>

								<br><br>

								</form></td></tr>';
			echo '</div>
				</div>';


		echo '</section>';
}
	?>

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

</body>
</html>
