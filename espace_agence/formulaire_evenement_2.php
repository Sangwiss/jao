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



echo'
	<section>
	';

				//include 'menu.php';





								

echo'





				<form method="post" action="evenement_check.php" enctype="multipart/form-data">


					

										<br/><br/><br/>


					<label><h3>TYPE</h3></label>
                        <br><br>



                          <input type="checkbox" name="programme[activer_evenement][atelier]">
                          <input type="hidden" name="programme[type_evenement][]" value="atelier" >
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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


								<a href="javascript:unhide();" onclick="javascript:hide();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


                          <input type="checkbox" name="programme[activer_evenement][conference]" >
                          <input type="hidden" name="programme[type_evenement][]" value="conference" >
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
						<option value="00h00">00:00</option>
					</select>

					<span>à</span>

					<select name="programme[heure_fin_conference][]" required>
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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


								<a href="javascript:unhide2();" onclick="javascript:hide2();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_22();" onclick="javascript:hide_22();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_32();" onclick="javascript:hide_32();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_42();" onclick="javascript:hide_42();" class="deco_link"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


                          <input type="checkbox" name="programme[activer_evenement][debat]">
                          <input type="hidden" name="programme[type_evenement][]" value="debat" >

    <label><h4>DÉBAT</h4></label><br><br>
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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


								<a href="javascript:unhide3();" onclick="javascript:hide2();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_23();" onclick="javascript:hide_23();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_33();" onclick="javascript:hide_33();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_43();" onclick="javascript:hide_43();" class="deco_link"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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






                          <input type="checkbox" name="programme[activer_evenement][projection]">
                          <input type="hidden" name="programme[type_evenement][]" value="projection" >
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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


								<a href="javascript:unhide4();" onclick="javascript:hide4();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_24();" onclick="javascript:hide_24();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_34();" onclick="javascript:hide_34();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_44();" onclick="javascript:hide_44();" class="deco_link"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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

     <input type="checkbox" name="programme[activer_evenement][exposition]">
     <input type="hidden" name="programme[type_evenement][]" value="exposition" >
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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


								<a href="javascript:unhide5();" onclick="javascript:hide5();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_25();" onclick="javascript:hide_25();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_35();" onclick="javascript:hide_35();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_45();" onclick="javascript:hide_45();" class="deco_link"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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




                          <input type="checkbox" name="programme[activer_evenement][concours]">
                          <input type="hidden" name="programme[type_evenement][]" value="concours">

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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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


								<a href="javascript:unhide6();" onclick="javascript:hide6();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_26();" onclick="javascript:hide_26();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_36();" onclick="javascript:hide_36();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_46();" onclick="javascript:hide_46();" class="deco_link"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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

 <br><br>








</div>








<div>


<hr>





 <input type="checkbox" name="programme[activer_evenement][rencontre]">
 <input type="hidden" name="programme[type_evenement][]" value="rencontre" >
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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
						<option value="08h30">08:30</option>
						<option value="09h00">09:00</option>
						<option value="09h30">09:30</option>
						<option value="10h00">10:00</option>
						<option value="10h30">10:30</option>
						<option value="11h00">11:00</option>
						<option value="11h30">11:30</option>
						<option value="12h00">12:00</option>
						<option value="12h30">12:30</option>
						<option value="13h00">13:00</option>
						<option value="13h30">13:30</option>
						<option value="14h00">14:00</option>
						<option value="14h30">14:30</option>
						<option value="15h00">15:00</option>
						<option value="15h30">15:30</option>
						<option value="16h00">16:00</option>
						<option value="16h30">16:30</option>
						<option value="17h00">17:00</option>
						<option value="17h30">17:30</option>
						<option value="18h00">18:00</option>
						<option value="18h30">18:30</option>
						<option value="19h00">19:00</option>
						<option value="19h30">19:30</option>
						<option value="20h00">20:00</option>
						<option value="20h30">20:30</option>
						<option value="21h00">21:00</option>
						<option value="21h30">21:30</option>
						<option value="22h00">22:00</option>
						<option value="22h30">22:30</option>
						<option value="23h00">23:00</option>
						<option value="23h30">23:30</option>
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


								<a href="javascript:unhide7();" onclick="javascript:hide7();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_27();" onclick="javascript:hide_27();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_37();" onclick="javascript:hide_37();"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


								<a href="javascript:unhide_47();" onclick="javascript:hide_47();" class="deco_link"><img class="space4" src="img/add.png" width="32" heigth="32" alt="add" /></a>

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


 <br><br>


</div>




					<br/><br/>


					<input type="hidden" name="evenement_complet" value="non" />
					<button name="submit" class="none">Enregistrer</button>

					<br/><br/><br/><br/><br/><br/>

				</form>
			</div>
		 </div>
	</section>';
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



<!-- Footer -->
<?php $footer = include("footer.php"); ?>

</body>
</html>
