<?php

	require_once 'config.php';

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JAO2017</title>

<script type="text/javascript" src="js/champs_intervenant.js"></script>
<link href="css/thumbnail-gallery.css" rel="stylesheet" type="text/css">
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
			 $event = $_POST['event_id'];
			 echo $event;
			 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
			 $sql->execute(array($_SESSION['user']));
			 while($r=$sql->fetch()){
			 if($r['id']==$_SESSION['user']){
			 	$sql=$dbh->prepare("SELECT * FROM programme");
			 	$sql->execute();
				while($r=$sql->fetch()){
					if($r['event_id']==$event){

					$evenement = $r['nom_evenement'];
					if($r['user_id']==$_SESSION['user']){
					if($r['id']==$_POST['scan'] && $r['event_id']==$event){
						$telephone = strtr($r['telephone'], '.', ' ');


						echo '
						<section>

							';


					echo'
					<div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
						<div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>

							<div class="container correct-container container-color">
								<div class="row container-margin">
									<div class="col-lg-12">
										<h2>'.$r['nom_evenement'].' - '.$r['type_evenement'].'</h2>
										<hr/>
									</div>

									<form method="post" action="modification_evenement.php">
										<label>Nom de l\'événement :</label> <br/>
										<input type="text" name="nom_evenement" size="40" value="'.$r['nom_evenement'].'" />

										<br/><br/><br/>

										<label>Thématique globale :</label> <br/>
										<label style="font-size:10px;">
										En 50 mots maximum<br/>
										<textarea rows="10" cols="55" name="thematique" id="input_box">'.$r['thematique'].'</textarea>
										</label>

										<br/><br/><br/>




										<label>Thème :</label> <br/>
										<label style="font-size:10px;">
										Descriptif de votre format d\'événement en 50 mots maximum<br/>
					      				<textarea rows="10" cols="55" name="theme">'.$r['theme'].'</textarea></label>


										<br/><br/><br/>


										<label>Horaires :</label> <br/>
										<select name="heure_debut" required>
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
											<option value="'.$r['heure_debut'].'" selected>'.$r['heure_debut'].'</option>
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
											<option value="00h00">00:00</option>
										</select>

										<span>à</span>

										<select name="heure_fin" required>
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
											<option value="'.$r['heure_fin'].'" selected>'.$r['heure_fin'].'</option>
											<option value="08h00">08:00</option>
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

										<br/><br/><br/>



										<h4>Intervenants</h4>

										<br/>';

										$sql=$dbh->prepare("SELECT count(id) FROM intervenants WHERE user_id=? AND event_id=?");
										$sql->execute(array($_SESSION['user'], $_POST['scan']));
										$r = $sql->fetch();
										// echo $r['cnt'];

										$sql=$dbh->prepare("SELECT * FROM intervenants WHERE user_id=? AND event_id=?");
										$sql->execute(array($_SESSION['user'], $_POST['scan']));

										while($r=$sql->fetch()){

											// if($r['nom_1']=='' && $r['prenom_1']=='' && $r['nom_2']=='' && $r['prenom_2']=='' && $r['nom_3']=='' && $r['prenom_3']=='' && $r['nom_4']=='' && $r['prenom_4']=='' && $r['nom_5']!=='' && $r['prenom_5']==''){
												// echo "pas'dinter";
											// }

											if($r['nom_1']=='' && $r['prenom_1']==''){
										echo'
											<!------------------->
											<!-- intervenant 1 -->
											<!------------------->

											<div>
												<label>Nom :</label> <br/>
												<input type="text" name="nom_1" size="40" />

												<br/><br/><br/>

												<label>Prénom :</label> <br/>
												<input type="text" name="prenom_1" size="40" />

												<br/><br/><br/>

												<label>Fonction :</label> <br/>
												<input type="text" name="fonction_1" size="40" />

												<br/><br/><br/>

												<label>Société :</label> <br/>
												<input type="text" name="societe_1" size="40" />

												<div id="hide" class="unhidden">
													<br/><br/>


														<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

												</div>
											</div>



											<!------------------->
											<!-- intervenant 2 -->
											<!------------------->

											<div id="fields_2" class="hidden">
												<hr/>
												<br/><br/><br/>

												<label>Nom :</label> <br/>
												<input type="text" name="nom_2" size="40"  />

												<br/><br/><br/>

												<label>Prénom :</label> <br/>
												<input type="text" name="prenom_2" size="40"  />

												<br/><br/><br/>

												<label>Fonction :</label> <br/>
												<input type="text" name="fonction_2" size="40"  />

												<br/><br/><br/>

												<label>Société :</label> <br/>
												<input type="text" name="societe_2" size="40"  />

												<div id="hide_2" class="unhidden">
													<br/><br/>


														<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

												</div>
											</div>



											<!------------------->
											<!-- intervenant 3 -->
											<!------------------->

											<div id="fields_3" class="hidden">
												<hr/>
												<br/><br/><br/>

												<label>Nom :</label> <br/>
												<input type="text" name="nom_3" size="40"  />

												<br/><br/><br/>

												<label>Prénom :</label> <br/>
												<input type="text" name="prenom_3" size="40"  />

												<br/><br/><br/>

												<label>Fonction :</label> <br/>
												<input type="text" name="fonction_3" size="40"  />

												<br/><br/><br/>

												<label>Société :</label> <br/>
												<input type="text" name="societe_3" size="40"  />

												<div id="hide_3" class="unhidden">
													<br/><br/>


														<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

												</div>
											</div>

											<!------------------->
											<!-- intervenant 4 -->
											<!------------------->

											<div id="fields_4" class="hidden">
												<hr/>
												<br/><br/><br/>

												<label>Nom :</label> <br/>
												<input type="text" name="nom_4" size="40"  />

												<br/><br/><br/>

												<label>Prénom :</label> <br/>
												<input type="text" name="prenom_4" size="40"  />

												<br/><br/><br/>

												<label>Fonction :</label> <br/>
												<input type="text" name="fonction_4" size="40"  />

												<br/><br/><br/>

												<label>Société :</label> <br/>
												<input type="text" name="societe_4" size="40"  />

												<div id="hide_4" class="unhidden">
													<br/><br/>


														<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

												</div>
											</div>

											<!------------------->
											<!-- intervenant 5 -->
											<!------------------->

											<div id="fields_5" class="hidden">
												<hr/>
												<br/><br/><br/>

												<label>Nom :</label> <br/>
												<input type="text" name="nom_5" size="40"  />

												<br/><br/><br/>

												<label>Prénom :</label> <br/>
												<input type="text" name="prenom_5" size="40"  />

												<br/><br/><br/>

												<label>Fonction :</label> <br/>
												<input type="text" name="fonction_5" size="40"  />

												<br/><br/><br/>

												<label>Société :</label> <br/>
												<input type="text" name="societe_5" size="40"  />
											</div>

											<br/><br/><br/>';


											}else {

												if($r['nom_2']=='' && $r['prenom_2']==''){
														echo'











														<!------------------->
														<!-- intervenant 1 -->
														<!------------------->

														<div>
															<label>Nom :</label> <br/>
															<input type="text" name="nom_1" value="'.$r['nom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_1" value="'.$r['prenom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_1" value="'.$r['fonction_1'].'" size="40" />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_1" value="'.$r['societe_1'].'" size="40" />

															<div id="hide" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 2 -->
														<!------------------->

														<div id="fields_2" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_2" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_2" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_2" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_2" size="40"  />

															<div id="hide_2" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 3 -->
														<!------------------->

														<div id="fields_3" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_3" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_3" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_3" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_3" size="40"  />

															<div id="hide_3" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 4 -->
														<!------------------->

														<div id="fields_4" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_4" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_4" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_4" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_4" size="40"  />

															<div id="hide_4" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 5 -->
														<!------------------->

														<div id="fields_5" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_5" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_5" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_5" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_5" size="40"  />
														</div>

														<br/><br/><br/>










														';
												}









												if($r['nom_1']!='' && $r['prenom_1']!='' && $r['nom_2']!='' && $r['prenom_2']!='' && $r['nom_3']=='' && $r['prenom_3']==''){
														echo'











														<!------------------->
														<!-- intervenant 1 -->
														<!------------------->

														<div>
															<label>Nom :</label> <br/>
															<input type="text" name="nom_1" value="'.$r['nom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_1" value="'.$r['prenom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_1" value="'.$r['fonction_1'].'" size="40" />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_1" value="'.$r['societe_1'].'" size="40" />

															<div id="hide" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 2 -->
														<!------------------->

														<div id="fields_2" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_2" value="'.$r['nom_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_2" value="'.$r['prenom_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_2" value="'.$r['fonction_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_2" value="'.$r['societe_2'].'" size="40"  />

															<div id="hide_2" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 3 -->
														<!------------------->

														<div id="fields_3" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_3" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_3" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_3" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_3" size="40"  />

															<div id="hide_3" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 4 -->
														<!------------------->

														<div id="fields_4" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_4" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_4" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_4" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_4" size="40"  />

															<div id="hide_4" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 5 -->
														<!------------------->

														<div id="fields_5" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_5" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_5" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_5" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_5" size="40"  />
														</div>

														<br/><br/><br/>










														';
												}



												if($r['nom_1']!='' && $r['prenom_1']!='' && $r['nom_2']!='' && $r['prenom_2']!='' && $r['nom_3']!='' && $r['prenom_3']!='' && $r['nom_4']=='' && $r['prenom_4']==''){
														echo'











														<!------------------->
														<!-- intervenant 1 -->
														<!------------------->

														<div>
															<label>Nom :</label> <br/>
															<input type="text" name="nom_1" value="'.$r['nom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_1" value="'.$r['prenom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_1" value="'.$r['fonction_1'].'" size="40" />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_1" value="'.$r['societe_1'].'" size="40" />

															<div id="hide" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 2 -->
														<!------------------->

														<div id="fields_2" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_2" value="'.$r['nom_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_2" value="'.$r['prenom_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_2" value="'.$r['fonction_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_2" value="'.$r['societe_2'].'" size="40"  />

															<div id="hide_2" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 3 -->
														<!------------------->

														<div id="fields_3" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_3" value="'.$r['nom_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_3" value="'.$r['prenom_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_3" value="'.$r['fonction_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_3" value="'.$r['socite_3'].'" size="40"  />

															<div id="hide_3" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 4 -->
														<!------------------->

														<div id="fields_4" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_4" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_4" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_4" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_4" size="40"  />

															<div id="hide_4" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 5 -->
														<!------------------->

														<div id="fields_5" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_5" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_5" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_5" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_5" size="40"  />
														</div>

														<br/><br/><br/>










														';
												}






																							if($r['nom_1']!='' && $r['prenom_1']!='' && $r['nom_2']!='' && $r['prenom_2']!='' && $r['nom_3']!='' && $r['prenom_3']!='' && $r['nom_4']!='' && $r['prenom_4']!='' && $r['nom_5']=='' && $r['prenom_5']==''){
														echo'











														<!------------------->
														<!-- intervenant 1 -->
														<!------------------->

														<div>
															<label>Nom :</label> <br/>
															<input type="text" name="nom_1" value="'.$r['nom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_1" value="'.$r['prenom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_1" value="'.$r['fonction_1'].'" size="40" />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_1" value="'.$r['societe_1'].'" size="40" />

															<div id="hide" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 2 -->
														<!------------------->

														<div id="fields_2" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_2" value="'.$r['nom_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_2" value="'.$r['prenom_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_2" value="'.$r['fonction_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_2" value="'.$r['societe_2'].'" size="40"  />

															<div id="hide_2" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 3 -->
														<!------------------->

														<div id="fields_3" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_3" value="'.$r['nom_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_3" value="'.$r['prenom_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_3" value="'.$r['fonction_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_3" value="'.$r['socite_3'].'" size="40"  />

															<div id="hide_3" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 4 -->
														<!------------------->

														<div id="fields_4" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_4" value="'.$r['nom_4'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_4" value="'.$r['prenom_4'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_4" value="'.$r['fonction_4'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_4" value="'.$r['societe_4'].'" size="40"  />

															<div id="hide_4" class="unhidden">
																<br/><br/>


																	<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 5 -->
														<!------------------->

														<div id="fields_5" class="hidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_5" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_5" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_5" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_5" size="40"  />
														</div>

														<br/><br/><br/>










														';
												}




																																		if($r['nom_1']!='' && $r['prenom_1']!='' && $r['nom_2']!='' && $r['prenom_2']!='' && $r['nom_3']!='' && $r['prenom_3']!='' && $r['nom_4']!='' && $r['prenom_4']!='' && $r['nom_5']!='' && $r['prenom_5']!=''){
														echo'











														<!------------------->
														<!-- intervenant 1 -->
														<!------------------->

														<div>
															<label>Nom :</label> <br/>
															<input type="text" name="nom_1" value="'.$r['nom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_1" value="'.$r['prenom_1'].'" size="40" />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_1" value="'.$r['fonction_1'].'" size="40" />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_1" value="'.$r['societe_1'].'" size="40" />

															<div id="hide" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 2 -->
														<!------------------->

														<div id="fields_2" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_2" value="'.$r['nom_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_2" value="'.$r['prenom_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_2" value="'.$r['fonction_2'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_2" value="'.$r['societe_2'].'" size="40"  />

															<div id="hide_2" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>



														<!------------------->
														<!-- intervenant 3 -->
														<!------------------->

														<div id="fields_3" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_3" value="'.$r['nom_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_3" value="'.$r['prenom_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_3" value="'.$r['fonction_3'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_3" value="'.$r['socite_3'].'" size="40"  />

															<div id="hide_3" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 4 -->
														<!------------------->

														<div id="fields_4" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_4" value="'.$r['nom_4'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_4" value="'.$r['prenom_4'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_4" value="'.$r['fonction_4'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_4" value="'.$r['societe_4'].'" size="40"  />

															<div id="hide_4" class="hidden">
																<br/><br/>


																	<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/add.png" width="32" heigth="32" alt="add" /></a>

															</div>
														</div>

														<!------------------->
														<!-- intervenant 5 -->
														<!------------------->

														<div id="fields_5" class="unhidden">
															<hr/>
															<br/><br/><br/>

															<label>Nom :</label> <br/>
															<input type="text" name="nom_5" value="'.$r['nom_5'].'" size="40"  />

															<br/><br/><br/>

															<label>Prénom :</label> <br/>
															<input type="text" name="prenom_5" value="'.$r['prenom_5'].'" size="40"  />

															<br/><br/><br/>

															<label>Fonction :</label> <br/>
															<input type="text" name="fonction_5" value="'.$r['fonction_5'].'" size="40"  />

															<br/><br/><br/>

															<label>Société :</label> <br/>
															<input type="text" name="societe_5" value="'.$r['societe_5'].'" size="40"  />
														</div>

														<br/><br/><br/>

				</form>
			</div>
		</div>
	</section>';
	// }
												}










													 }

										}

										echo'
										<br/><br/><br/>
										<input type="hidden" name="ancien_nom" value="'.$evenement.'" />
										<input type="hidden" name="event_id" value="'.$event.'" />
										<input type="hidden" name="id" value="'.$_POST['scan'].'" />

										<button name="submit" class="none">Mettre à jour l\'événement</button>

										<br/><br/><br/><br/><br/><br/>

									 </form>
								</div>
							</div>
						</section>
						';

					}else{}
					}

			  }
		 }

			 }
	}
}
	?>

    <!-- Footer -->
    <?php $footer = include("footer.php"); ?>

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
</script>

</body>
</html>
