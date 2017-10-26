<?php

	require_once 'config.php';

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style-form.css" rel="stylesheet" type="text/css" />
<link href="css/style-form-recap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/valid_form_info_perso.js"></script>
<script type="text/javascript" src="js/champs_metro.js"></script>
<script type="text/javascript" src="js/champs_bus.js"></script>
<script type="text/javascript" src="js/champs_tram.js"></script>
<title>JAO2017</title>
</head>

<body>
	<?php
		session_start();
	?>

    <?php
		 if($_SESSION['user']==''){
			require_once'401.php';
		 }else{
		 	include 'nav.php';
			 include("config.php");
			 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
			 $sql->execute(array($_SESSION['user']));
			 while($r=$sql->fetch()){
			 if($r['id']==$_SESSION['user']){
				$telephone = strtr($r['telephone'], '.', ' ');
						echo '

						<div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
						<div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
						<section class="container-color">

							';


					echo'


							<div class="container no-width">
								<div class="row">
									<div class="col-lg-12">
										<h2>Informations personnelles</h2>
										<hr/>
									</div>

									  <div>

											  <form action="modification_info_check.php" enctype="multipart/form-data" method="POST" name="register" onsubmit="return validateForm()">

											  <div class="ss-item-required correct">

												  <hr>

												   <h3>Coordonnées de l\'Agence</h3>
												  <br/>
												  <label>Nom de l\'Agence *</label>
												  <br/><br/>
												  <input type="text" name="nom_agence"  size="30" value="'.$r['nom_agence'].'" required/>
												  <br/>
												  <br/>
												  <br/>
												  <label>Adresse *</label>
												  <br/><br/>
													<input type="text" name="adresse" size="60" value="'.$r['adresse'].'" required />
													<br/>

												  <br/>
												  <label>2eme ligne d\'adresse</label><br>
												  <label style="font-size:12px;">
													<input type="text" name="adresse_2" size="60" value="'.$r['adresse_2'].'" /></label>
													<br/>

												  <br/>
												  <br/><label>Ville</label><br>
												  <label style="font-size:12px;">
													<input type="text" name="ville" size="60" value="'.$r['ville'].'" required />
													<br/>
													</label>
												  <br/>
												  <br/>

												  <table>
													<tbody>
													  <tr>

														<td>
														<label>Code postal</label><br>
															<label style="font-size:12px;">
															   <input type="text" name="cp"  maxlength="5" value="'.$r['cp'].'" required/>
															   <br/>
															</label>
														</td>
													  </tr>
													</tbody>
												  </table>
												  <br/>
												  <label style="font-size:12px;">
														  <input type="text" name="telephone"  placeholder="0000000000" maxlength="10" value="'.$telephone.'" required/>
														  <br/>Téléphone
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
														  <input type="text" name="site_web" placeholder="http://www.exemple.com"  size="30" value="'.$r['site_web'].'" required/>
														  <br/>Site web
												  </label>

												   <br/><br/>

												<!------------------->
												<!--    Metro 1    -->
												<!------------------->
												  ';

												if($r["ligne_1"]==''){
												echo'
												 <label>Metro et RER *</label>


												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_1" size="40" value="'.$r['ligne_1'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_1" size="40" value="'.$r['station_1'].'" required />
													<br/>Station
												  </label>
												  ';

												if($r["ligne_2"]==''){
												echo'
												  <div id="hide" class="unhidden">
														<br/><br/>


													<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>
												';}
												else{
													echo'

												 <div id="hide" class="hidden">
														<br/><br/>


													<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>


												';}}
												  else{
													echo'

												<label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_1" size="40" value="'.$r['ligne_1'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_1" size="40" value="'.$r['station_1'].'" required />
													<br/>Station
												  </label>

												  ';

												if($r["ligne_2"]==''){
												echo'
												  <div id="hide" class="unhidden">
														<br/><br/>


													<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div> ';}
												else{
													echo'

													<div id="hide" class="hidden">
														<br/><br/>


													<a href="javascript:unhide();" onclick="javascript:hide();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}





												  echo'

												<!------------------->
												<!--    Metro 2    -->
												<!------------------->
												';

												if($r["ligne_2"]==''){
												echo'
												<div id="fields_2" class="hidden">
													<hr/>

												  <label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_2" size="40" value="'.$r['ligne_2'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_2" size="40" value="'.$r['station_2'].'" />
													<br/>Station
												  </label>
													';

												if($r["ligne_3"]==''){
												echo'

													<div id="hide_2" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_2" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  else{
													echo'

														<div id="fields_2" class="unhidden">
													<hr/>

												  <label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_2" size="40" value="'.$r['ligne_2'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_2" size="40" value="'.$r['station_2'].'" />
													<br/>Station
												  </label>

														';

												if($r["ligne_3"]==''){
												echo'

													<div id="hide_2" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_2" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}



												  echo'




												<!------------------->
												<!--    Metro 3    -->
												<!------------------->
												';

												if($r["ligne_3"]==''){
												echo'
												<div id="fields_3" class="hidden">
													<hr/>
												  <label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_3" size="40" value="'.$r['ligne_3'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_3" size="40" value="'.$r['station_3'].'" />
													<br/>Station
												  </label>

													';

												if($r["ligne_4"]==''){
												echo'
													<div id="hide_3" class="unhidden">
														<br/><br/>

															<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_3" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}


												  else{
													echo'

														<div id="fields_3" class="unhidden">
													<hr/>
												  <label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_3" size="40" value="'.$r['ligne_3'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_3" size="40" value="'.$r['station_3'].'" />
													<br/>Station
												  </label>

													';

												if($r["ligne_4"]==''){
												echo'
													<div id="hide_3" class="unhidden">
														<br/><br/>

															<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_3" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}



												  echo'
												<!------------------->
												<!--    Metro 4    -->
												<!------------------->
												';

												if($r["ligne_4"]==''){
												echo'
												<div id="fields_4" class="hidden">
													<hr/>
												  <label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_4" size="40" value="'.$r['ligne_4'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_4" size="40" value="'.$r['station_4'].'" />
													<br/>Station
												  </label>
													';

												if($r["ligne_5"]==''){
												echo'
													<div id="hide_4" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_4" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  else{
													echo'

												  <div id="fields_4" class="unhidden">
													<hr/>
												  <label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_4" size="40" value="'.$r['ligne_4'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_4" size="40" value="'.$r['station_4'].'" />
													<br/>Station
												  </label>

														';

												if($r["ligne_5"]==''){
												echo'
													<div id="hide_4" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_4" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  echo'
												<!------------------->
												<!--    Metro 5    -->
												<!------------------->
												';

												if($r["ligne_5"]==''){
												echo'
												<div id="fields_5" class="hidden">
													<hr/>
												  <label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_5" size="40" value="'.$r['ligne_5'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="station_5" size="40" value="'.$r['station_5'].'" />
													<br/>Station
												  </label>
												</div>
												';}

												  else{
													echo'

													<div id="fields_5" class="unhidden">
														<hr/>
													  <label>Metro et RER</label>
												  <br/><br/>

								                  <label style="font-size:12px;">
								                    <input type="text" name="ligne_5" size="40" value="'.$r['ligne_5'].'"/>
								                    <br/>Ligne
								                  </label>

								                   <br/><br/>

													  <label style="font-size:12px;">
														<input type="text" name="station_5" size="40" value="'.$r['station_5'].'" />
														<br/>Station
													  </label>
													</div>

													';}

												  echo'

										<br/><br/><br/>

												<hr/>

												  <br/><br/>


												 <label>Bus </label>
												  <br/><br/>

												  <!------------------->
												  <!--     BUS 1     -->
												  <!------------------->
												  ';

												if($r["numero_bus_1"]==''){
												echo'
												  <div>
													  <label style="font-size:12px;">
														<input type="text" name="numero_bus_1" size="10" value="'.$r['numero_bus_1'].'" />
														<br/>N°
													  </label>

													  <br/><br/>

													  <label style="font-size:12px;">
														<input type="text" name="arret_1" size="40" value="'.$r['arret_1'].'" />
														<br/>Arrêt
													  </label>



														';

												if($r["numero_bus_2"]==''){
												echo'

													  <div id="hide_bus" class="unhidden">
															<br/><br/>


														<a href="javascript:unhide_bus();" onclick="javascript:hide_bus();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													  </div>
												  </div>
												  ';}

												else{
													echo'

													<div id="hide_bus" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_bus();" onclick="javascript:hide_bus();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  else{
													echo'

													<div>
													  <label style="font-size:12px;">
														<input type="text" name="numero_bus_1" size="10" value="'.$r['numero_bus_1'].'" />
														<br/>N°
													  </label>

													  <br/><br/>

													  <label style="font-size:12px;">
														<input type="text" name="arret_1" size="40" value="'.$r['arret_1'].'" />
														<br/>Arrêt
													  </label>

													  		';

												if($r["numero_bus_2"]==''){
												echo'

													  <div id="hide_bus" class="unhidden">
															<br/><br/>


														<a href="javascript:unhide_bus();" onclick="javascript:hide_bus();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													  </div>
												  </div>
												  ';}

												else{
													echo'

													<div id="hide_bus" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_bus();" onclick="javascript:hide_bus();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  echo'
												<!------------------->
												<!--     BUS 2     -->
												<!------------------->
												';

												if($r["numero_bus_2"]==''){
												echo'
												<div id="fields_bus_2" class="hidden">
													<hr/>

												  <label style="font-size:12px;">
													<input type="text" name="numero_bus_2" size="10" value="'.$r['numero_bus_2'].'" />
													<br/>N°
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="arret_2" size="40" value="'.$r['arret_2'].'" />
													<br/>Arrêt
												  </label>
													';

												if($r["numero_bus_3"]==''){
												echo'
													<div id="hide_bus_2" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_bus_2();" onclick="javascript:hide_bus_2();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>';}

												else{
													echo'

													<div id="hide_bus_2" class="hidden">
														<br/><br/>


														  <a href="javascript:unhide_bus_2();" onclick="javascript:hide_bus_2();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  else{
													echo'

												<div id="fields_bus_2" class="unhidden">
													<hr/>

												  <label style="font-size:12px;">
													<input type="text" name="numero_bus_2" size="10" value="'.$r['numero_bus_2'].'" />
													<br/>N°
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="arret_2" size="40" value="'.$r['arret_2'].'" />
													<br/>Arrêt
												  </label>

													';

												if($r["numero_bus_3"]==''){
												echo'
													<div id="hide_bus_2" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_bus_2();" onclick="javascript:hide_bus_2();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>';}

												else{
													echo'

													<div id="hide_bus_2" class="hidden">
														<br/><br/>


														  <a href="javascript:unhide_bus_2();" onclick="javascript:hide_bus_2();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  echo'


												<!------------------->
												<!--     BUS 3     -->
												<!------------------->
												';

												if($r["numero_bus_3"]==''){
												echo'
												<div id="fields_bus_3" class="hidden">
													<hr/>
												  <label style="font-size:12px;">
													<input type="text" name="numero_bus_3" size="10" value="'.$r['numero_bus_3'].'" />
													<br/>N°
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="arret_3" size="40" value="'.$r['arret_3'].'" />
													<br/>Arrêt
												  </label>
													';

												if($r["numero_bus_4"]==''){
												echo'
													<div id="hide_bus_3" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_bus_3();" onclick="javascript:hide_bus_3();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_bus_3" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_bus_3();" onclick="javascript:hide_bus_3();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  else{
													echo'

												<div id="fields_bus_3" class="unhidden">
													<hr/>
												  <label style="font-size:12px;">
													<input type="text" name="numero_bus_3" size="10" value="'.$r['numero_bus_3'].'" />
													<br/>N°
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="arret_3" size="40" value="'.$r['arret_3'].'" />
													<br/>Arrêt
												  </label>

													';

												if($r["numero_bus_4"]==''){
												echo'
													<div id="hide_bus_3" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_bus_3();" onclick="javascript:hide_bus_3();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_bus_3" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_bus_3();" onclick="javascript:hide_bus_3();"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  echo'
												<!------------------->
												<!--     BUS 4     -->
												<!------------------->
												';

												if($r["numero_bus_4"]==''){
												echo'
												<div id="fields_bus_4" class="hidden">
													<hr/>
												  <label style="font-size:12px;">
													<input type="text" name="numero_bus_4" size="10" value="'.$r['numero_bus_4'].'" />
													<br/>N°
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="arret_4" size="40" value="'.$r['arret_4'].'" />
													<br/>Arrêt
												  </label>
													';

												if($r["numero_bus_5"]==''){
												echo'
													<div id="hide_bus_4" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_bus_4();" onclick="javascript:hide_bus_4();" class="deco_link"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_bus_4" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_bus_4();" onclick="javascript:hide_bus_4();" class="deco_link"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  else{
													echo'

														<div id="fields_bus_4" class="unhidden">
													<hr/>
												  <label style="font-size:12px;">
													<input type="text" name="numero_bus_4" size="10" value="'.$r['numero_bus_4'].'" />
													<br/>N°
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="arret_4" size="40" value="'.$r['arret_4'].'" />
													<br/>Arrêt
												  </label>

													';

												if($r["numero_bus_5"]==''){
												echo'
													<div id="hide_bus_4" class="unhidden">
														<br/><br/>


															<a href="javascript:unhide_bus_4();" onclick="javascript:hide_bus_4();" class="deco_link"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

													</div>
												</div>
												';}

												else{
													echo'

													<div id="hide_bus_4" class="hidden">
														<br/><br/>


														   <a href="javascript:unhide_bus_4();" onclick="javascript:hide_bus_4();" class="deco_link"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>

												  </div>
												</div>

													';}}

												  echo'


												<!------------------->
												<!--     BUS 5     -->
												<!------------------->
												';

												if($r["numero_bus_5"]==''){
												echo'
												<div id="fields_bus_5" class="hidden">
													<hr/>
												  <label style="font-size:12px;">
													<input type="text" name="numero_bus_5" size="10" value="'.$r['numero_bus_5'].'" />
													<br/>N°
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="arret_5" size="40" value="'.$r['arret_5'].'" />
													<br/>Arrêt
												  </label>
												</div>';}

												  else{
													echo'


												 <div id="fields_bus_5" class="unhidden">
													<hr/>
												  <label style="font-size:12px;">
													<input type="text" name="numero_bus_5" size="10" value="'.$r['numero_bus_5'].'" />
													<br/>N°
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="arret_5" size="40" value="'.$r['arret_5'].'" />
													<br/>Arrêt
												  </label>
												</div>

													';}


												  echo'



												 <hr/>

												   <br/><br/>


                         <label>Tram </label>
                          <br/><br/>

                          <!------------------->
                          <!--     TRAM 1     -->
                          <!------------------->
                          <div>
                      <label style="font-size:12px;">
                        <input type="text" name="numero_tram_1" size="10" value="'.$r['numero_tram_1'].'" />
                        <br/>N°
                      </label>

                      <br/><br/>

                      <label style="font-size:12px;">
                        <input type="text" name="arret_tram_1" size="40" value="'.$r['arret_tram_1'].'" />
                        <br/>Arrêt
                      </label>





												  <hr>

												  <h3>Réseaux Sociaux</h3>
												  <label style="font-size:12px;">
													<input type="text" name="facebook" size="40" value="'.$r['facebook'].'" />
													<br/>Facebook
												  </label>

												  <br/><br/>

												  <label style="font-size:12px;">
													<input type="text" name="twitter" size="40" value="'.$r['twitter'].'" />
													<br/>Twitter
												  </label>

												  <br/><br/>

                 								 <label style="font-size:12px;">
                  							  <input type="text" name="youtube" size="40" value="'.$r['youtube'].'" />
                    							<br/>Youtube
                							  </label>

                							  <br/><br/>

                 								 <label style="font-size:12px;">
                  							  <input type="text" name="snapchat" size="40" value="'.$r['snapchat'].'" />
                    							<br/>Snapchat
                							  </label>

                							  <br/><br/>

                 								 <label style="font-size:12px;">
                  							  <input type="text" name="instagram" size="40" value="'.$r['snapchat'].'" />
                    							<br/>Instagram
                							  </label>

                							  <br/><br/>

                 								 <label style="font-size:12px;">
                  							  <input type="text" name="linkedin" size="40" value="'.$r['linkedin'].'" />
                    							<br/>LinkedIn
                							  </label>

												  <hr>







												  <h3>VOTRE AGENCE EST-ELLE HANDI-ACCUEILLANTE ?</h3>
												  ';

												if($r["mobilite_reduite"]=='non'){
												echo'
												<label>Votre Agence sera-t-elle accessible aux personnes à mobilité réduite ? (Infrastructure adaptée)</label>
												<br/>
												<label>
													<input type="radio" name="mobilite_reduite" value="oui"/>
													OUI</label>

												<label>
													<input type="radio" name="mobilite_reduite" value="non" checked="checked"/>
													NON</label>

												';

												}
												else{
													echo'
													<label>Votre Agence sera-t-elle accessible aux personnes à mobilité réduite ? (Infrastructure adaptée)</label>
												  <br/>
												  <label>
													<input type="radio" name="mobilite_reduite" value="oui" checked="checked" />
													OUI</label>

												  <label>
													<input type="radio" name="mobilite_reduite" value="non" />
													NON</label>

													';}

												echo'


													<br/><br/><br/>

												 ';

												if($r["malentendant"]=='non'){
												echo'
												<label>Votre agence sera-t-elle accessible aux personnes malentendantes ? (Interprète en langue des signes)</label>
												  <br/>
												  <label>
													<input type="radio" name="malentendant" value="oui"/>
													OUI</label>

												  <label>
													<input type="radio" name="malentendant" value="non" checked="checked"/>
													NON</label>';}

													else{
													echo'

													<label>Votre agence sera-t-elle accessible aux personnes malentendantes ? (Interprète en langue des signes)</label>
												  <br/>
												  <label>
													<input type="radio" name="malentendant" value="oui" checked="checked"/>
													OUI</label>

												  <label>
													<input type="radio" name="malentendant" value="non" />
													NON</label>

													';}

													echo'
												  <br/><br/><br/>


													';

												if($r["malvoyant"]=='non'){
												echo'
												  <label>Votre Agence sera-t-elle accessible aux personnes malvoyantes ? (Personnes accompagnatrices)</label>
												  <br/>
												  <label>
													<input type="radio" name="malvoyant" value="oui"/>
													OUI
												  </label>

												  <label>
													<input type="radio" name="malvoyant" value="non" checked="checked"/>
													NON
												  </label>';}

													else{
													echo'

													<label>Votre Agence sera-t-elle accessible aux personnes malvoyantes ? (Personnes accompagnatrices)</label>
												  <br/>
												  <label>
													<input type="radio" name="malvoyant" value="oui" checked="checked" />
													OUI
												  </label>

												  <label>
													<input type="radio" name="malvoyant" value="non" />
													NON
												  </label>

													';}
												echo'
												  <br/><br/>

												 <!-- <hr/>

												  <h3>Logo agence</h3>

												  <p>Format JPG/PNG en 400x300</p>

												  <input type="file" name="file" value="" required /><br /><br/> -->

												  <button name="submit" class="none">Mettre à jour</button>
												  <br/><br/><br/>
											  </form>
										  </div>
									  </div>
								  </section>
						';
						}else{}
					}
				}
	?>

    <!-- Footer -->
<?php $footer = include("footer.php"); ?>

</body>
</html>
