<?php
	include_once "config.php";
?>

<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="css/thumbnail-gallery.css" rel="stylesheet"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style-form.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/valid_form_register.js"></script>
    <script type="text/javascript" src="js/champs_metro.js"></script>
    <script type="text/javascript" src="js/champs_bus.js"></script>
 </head>
 <body>

<?php
if($_POST['acces']== ''){
	echo '<center><h3>Session expirée : <a href="gestion.php">retour</a></h3></center>';
}else{
	 if(isset($_POST['check'])){
    	 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM acces");
		 $sql->execute();
		 $r=$sql->fetch();
		 if($r['code']== $_POST['acces']){
?>


 
 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Inscription #JAO2017</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  
    <div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
            <div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
    <br/><br/>
    
 <section class="formulaire table1">

  <h3 style="color: #4ECDC1">PRÉAMBULE</h3>

<h5 style="color: red">DATE LIMITE POUR INSCRIRE VOTRE PROGRAMME : JEUDI 9 MARS 2017</h5>

   <p>L’intégralité des informations que vous allez renseigner ci-après permettra de concevoir le programme de la 7e édition #JAO2017.</p>
              <p>Le programme sera en ligne sur le site dédié <a href="www.agences-ouvertes.com"></a>www.agences-ouvertes.com.</p>
              <p>L’AACC coordonne l’organisation de l’événement et assure sa promotion dans sa globalité.</p>

<p>Chaque agence participante assurera la promotion de son programme auprès des personnes<br> qu’elle souhaite inviter (étudiants, journalistes, clients, prospects…).<br>
Un kit de communication vous sera envoyé avec le key visual et les éléments graphiques qui<br> permettront de créer votre propre communication.</p>

<p><b>Vous souhaitez vous inscrire mais votre programme n’est pas encore prêt ?</b><br>
Rassurez-vous ! Grâce à votre espace personnel, vous pourrez créer et modifier à votre convenance votre JAO et les différents formats d'événement qui la composent.
</p>
<div class="howto margep">
<h4>COMMENT PARTICIPER À LA #JAO2017 ?</h4><br>

<p><b>1.</b> Activez dès maintenant votre compte #JAO2017 afin de figurer sur les premiers éléments de communication.<br><br>
<b>2.</b> Vous pouvez dès à présent renseigner votre programme et le modifier jusqu’au jeudi 9 mars 2017.<br><br>
<b>3.</b> Courant mars, les programmes seront disponibles sur le site : www.agences-ouvertes.com</p>
</div>
      <div>
          <div id="main">
              <h3>Choix des identifiants</h3> <br/>
          </div>

              
              <h4>ATTENTION : Conservez précieusement votre login et password pour pouvoir vous connecter  à votre espace personnel #JAO2017 et renseigner votre programme.</h4> <br/>
              
              <form action="register_check.php" enctype="multipart/form-data" method="POST" name="register" onsubmit="return validateForm()">
              
              <div class="ss-item-required">
                  <label>Nom d'utilisateur<br/> <input name="user" required="required" size="30"></label><br/><br/>
                  <label>Email<br/> <input name="email" type="email" required="required" size="30"/></label><br/><br/>
                  <label>Mot de passe<br/> <input name="pass" type="password" required="required" size="30"/></label><br/><br/>
                  <label>Confirmation du mot de passe<br/> <input name="pass_1" type="password" required="required" size="30"/></label><br/><br/>
              
                  
                  <hr>
                  
                   <h3>Coordonnées de l'Agence</h3>
                  <br/>
                  <label>Nom de l'Agence *</label>
                  <br/>
                  <input type="text" name="nom_agence" required="required" size="30"/>
                  <br/>
                  <br/>
                  <label>ADRESSE 1 *</label>
                  <br/>
                  <label style="font-size:12px;">
                    <input type="text" name="adresse" size="60" required="required"/>
                    <br/>
                    </label>
                  <br/>
                  <br/>
                  <label>ADRESSE 2</label><br>
                  <label style="font-size:12px;">
                    <input type="text" name="adresse_2" size="60" />
                    <br/>
                    </label>
                  <br/>
                  <br/>
                  <label>Ville *</label><br>
                  <label style="font-size:12px;">
                    <input type="text" name="ville" size="60" required="required" />
                    <br/>
                    </label>
                  <br/>
                  <br/>
                  <!-- <label>Zone *</label><br> -->
                  <table>
                    <tbody>
                      <tr>
                        <!-- <td><label style="font-size:12px;">
                          <select name="zone" required>
                              <optgroup label="Zone">
                                <option value="Bordeaux">Bordeaux</option>
                                <option value="Lille">Lille</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Montpellier">Montpellier</option>
                                <option value="Nantes">Nantes</option>
                                <option value="Paris/RP" selected>Paris/RP</option>
                                <option value="Strasbourg">Strasbourg</option>
                                <option value="Toulouse">Toulouse</option>
                                <option value="Outre-Mer">Outre-Mer</option>
                                <option value="Autre">Autre...</option>

                                <option value="Agen">Agen</option>
                                <option value="Bayonne">Bayonne</option>
                                <option value="Biarritz">Biarritz</option>
                                <option value="Brives">Brives</option>
                                <option value="Dax">Dax</option>
                                <option value="La Rochelle">La Rochelle</option>
                                <option value="Limoges">Limoges</option>
                                <option value="Mont-de-Marsan">Mont-de-Marsan</option>
                                <option value="Montpellier">Montpellier</option>
                                <option value="Niort">Niort</option>
                                <option value="Poitiers">Poitiers</option>
                                <option value="Pau">Pau</option>
                                <option value="Périgueux">Périgueux</option>
                                <option value="Saint-Etienne">Saint-Etienne</option>
                                <option value="Sainte-Clothilde (La Réunion)">Sainte-Clothilde (La Réunion)</option>
                                <option value="Saint-Paul (La Réunion)">Saint-Paul (La Réunion)</option>
                                <option value="Saint-Gilles-Les-Bains (La Réunion)">Saint-Gilles-Les-Bains (La Réunion)</option>
                                <option value="Saint-Denis (La Réunion)">Saint-Denis (La Réunion)</option>
                                <option value="Le Lamentin (Martinique)">Le Lamentin (Martinique)</option>
                                <option value="Baie Mahault (Guadeloupe)">Baie Mahault (Guadeloupe)</option>
                                </optgroup>
                          </select>  
                          </td> -->
                        <td>
                          <label>Code postal *</label><br>
                              <label style="font-size:12px;">
                                 <input type="text" name="cp"  maxlength="5" value="" required="required" />
                                 <br/>
                              </label>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br/>
                  <label>Téléphone *</label><br>
                  <label style="font-size:12px;">
                          <input type="text" name="telephone" required="required" placeholder=" ex : 0178656587" maxlength="10"/>
                          
                  </label>
                  
                  <br/><br/>

                  <label>Site web *</label><br>
                  
                  <label style="font-size:12px;">
                          <input type="text" name="site_web" value="http://" required="required" size="30"/>
                          
                  </label>
              
                   <br/><br/>

                               <hr>
              <br/>
                 
                <!------------------->
                <!--    Metro 1    -->
                <!------------------->
                  
                 <label>Metro et RER</label>
                  <br/><br/>
                  
                  <label style="font-size:12px;">
                    <input type="text" name="ligne_1" placeholder="ex : Ligne 14" size="40"/>
                    <br/>Ligne
                  </label>

                   <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="station_1" placeholder="ex : Louvre Rivoli" size="40"/>
                    <br/>Station
                  </label>
                  
                  <div id="hide" class="unhidden">
            
      
        
          <a href="javascript:unhide();" onclick="javascript:hide();"><img class="img-space" src="img/round69.png" width="32" heigth="32" alt="add" /></a>

          </div>
                </div> 
                
                
                <!------------------->
                <!--    Metro 2    -->
                <!------------------->
                
                <div id="fields_2" class="hidden">
                    <hr/>
                    
                 
                  <br/><br/>
                  
                  <label style="font-size:12px;">
                    <input type="text" name="ligne_2" placeholder="ex : Ligne 14" size="40"/>
                    <br/>Ligne
                  </label>

                   <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="station_2" placeholder="ex : Alexandre Dumas" size="40" />
                    <br/>Station
                  </label>
                    
                    <div id="hide_2" class="unhidden">
                        <br/><br/>
                    
                
                            <a href="javascript:unhide_2();" onclick="javascript:hide_2();"><img class="img-space" src="img/round69.png" width="32" heigth="32" alt="add" /></a>
                
                    </div>
                </div>
                
                
                
                
                
                <!------------------->
                <!--    Metro 3    -->
                <!------------------->
                
                <div id="fields_3" class="hidden">
                    <hr/>
                 
                    
                  <br/><br/>
                  
                  <label style="font-size:12px;">
                    <input type="text" name="ligne_3" placeholder="ex : Ligne 14" size="40"/>
                    <br/>Ligne
                  </label>

                   <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="station_3" placeholder="ex : Parmentier" size="40" />
                    <br/>Station
                  </label>
                    
                    <div id="hide_3" class="unhidden">
                        <br/><br/>
                    
                            <a href="javascript:unhide_3();" onclick="javascript:hide_3();"><img class="img-space" src="img/round69.png" width="32" heigth="32" alt="add" /></a>
            
                    </div>
                </div>
                
                <!------------------->
                <!--    Metro 4    -->
                <!------------------->
                
                <div id="fields_4" class="hidden">
                    <hr/>
                 
                    
                  <br/><br/>
                  
                  <label style="font-size:12px;">
                    <input type="text" name="ligne_4" placeholder="ex : Ligne 14" size="40"/>
                    <br/>Ligne
                  </label>

                   <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="station_4" placeholder="ex : Strasbourg St-Denis" size="40" />
                    <br/>Station
                  </label>
                    
                    <div id="hide_4" class="unhidden">
                        <br/><br/>
                    
                        
                            <a href="javascript:unhide_4();" onclick="javascript:hide_4();" class="deco_link"><img class="img-space" src="img/round69.png" width="32" heigth="32" alt="add" /></a>
                        
                    </div>
                </div>
                
                <!------------------->
                <!--    Metro 5    -->
                <!------------------->
                
                <div id="fields_5" class="hidden">
                    <hr/>
                 
                    
                  <br/><br/>
                  
                  <label style="font-size:12px;">
                    <input type="text" name="ligne_5" placeholder="ex : Ligne 14" size="40"/>
                    <br/>Ligne
                  </label>

                   <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="station_5" placeholder="ex : Place d'Italie" size="40" />
                    <br/>Station
                  </label>
                </div>
    
        <br/><br/>


                
                <hr/>
                  
                  <br/><br/>
        
                  
                 <label>Bus </label>
                  <br/><br/>
                  
                  <!------------------->
                  <!--     BUS 1     -->
                  <!------------------->
                  <div>
                      <label style="font-size:12px;">
                        <input type="text" name="numero_bus_1" placeholder="89" size="10" />
                        <br/>Ligne
                      </label>
                        
                      <br/><br/>
                        
                      <label style="font-size:12px;">
                        <input type="text" name="arret_1" placeholder="ex : Gare de Vanves Malakoff" size="40" />
                        <br/>Arrêt
                      </label>
                      
                      <div id="hide" class="unhidden">
                            <br/><br/>
                
                    
                        <a href="javascript:unhide_bus();" onclick="javascript:hide_bus();"><img class="img-space2" src="img/round69.png" width="32" heigth="32" alt="add" /></a>
    
                      </div>
                  </div>
                <!------------------->
                <!--     BUS 2     -->
                <!------------------->
                
                <div id="fields_bus_2" class="hidden">
                    <hr/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="numero_bus_2" placeholder="38" size="10" />
                    <br/>Ligne
                  </label>
                    
                  <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="arret_2" placeholder="ex : Alésia" size="40" />
                    <br/>Arrêt
                  </label>
                    
                    <div id="hide_2" class="unhidden">
                        <br/><br/>
                    
                
                            <a href="javascript:unhide_bus_2();" onclick="javascript:hide_bus_2();"><img class="img-space2" src="img/round69.png" width="32" heigth="32" alt="add" /></a>
                
                    </div>
                </div>
                                
                
                <!------------------->
                <!--     BUS 3     -->
                <!------------------->
                
                <div id="fields_bus_3" class="hidden">
                    <hr/>
                  <label style="font-size:12px;">
                    <input type="text" name="numero_bus_3" placeholder="91" size="10" />
                    <br/>Ligne
                  </label>
                    
                  <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="arret_3" placeholder="ex : Port-Royal" size="40" />
                    <br/>Arrêt
                  </label>
                    
                    <div id="hide_3" class="unhidden">
                        <br/><br/>
                    
                        
                            <a href="javascript:unhide_bus_3();" onclick="javascript:hide_bus_3();"><img class="img-space2" src="img/round69.png" width="32" heigth="32" alt="add" /></a>
            
                    </div>
                </div>
                
                <!------------------->
                <!--     BUS 4     -->
                <!------------------->
                
                <div id="fields_bus_4" class="hidden">
                    <hr/>
                  <label style="font-size:12px;">
                    <input type="text" name="numero_bus_4" placeholder="82" size="10" />
                    <br/>Ligne
                  </label>
                    
                  <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="arret_4" placeholder="ex : Durok" size="40" />
                    <br/>Arrêt
                  </label>
                    
                    <div id="hide_4" class="unhidden">
                        <br/><br/>
                    
                        
                            <a href="javascript:unhide_bus_4();" onclick="javascript:hide_bus_4();" class="deco_link img-space2"><img src="img/round69.png" width="32" heigth="32" alt="add" /></a>
                        
                    </div>
                </div>
                
                <!------------------->
                <!--     BUS 5     -->
                <!------------------->
                
                <div id="fields_bus_5" class="hidden">
                    <hr/>
                  <label style="font-size:12px;">
                    <input type="text" name="numero_bus_5" placeholder="87" size="10" />
                    <br/>Ligne
                  </label>
                    
                  <br/><br/>
                    
                  <label style="font-size:12px;">
                    <input type="text" name="arret_5" placeholder="ex : Sully-Morland" size="40" />
                    <br/>Arrêt
                  </label>
                </div>
                  
       <hr>           
                 
                          
                          <br/><br/>
                    
                          
                         <label>Tram </label>
                          <br/><br/>
                          
                          <!------------------->
                          <!--     TRAM 1     -->
                          <!------------------->
                          <div>
                      <label style="font-size:12px;">
                        <input type="text" name="numero_tram_1" placeholder="3a" size="10" />
                        <br/>Ligne
                      </label>
                        
                      <br/><br/>
                        
                      <label style="font-size:12px;">
                        <input type="text" name="arret_tram_1" placeholder="ex : Pont du Garigliano" size="40" />
                        <br/>Arrêt
                      </label>
                      
                      <div id="hide_tram" class="unhidden">
                
                    
                        
    
                      </div>
                          
<hr/>

 <br/> <br/>



                          
                          <hr>
                          
                          <h4>RÉSEAUX SOCIAUX</h4>
                          <label style="font-size:12px;">
                          <input type="text" name="facebook" value="https://facebook.com/" size="40"/>
                          <br/>Facebook
                          </label>
                          
                          <br/><br/>
                          
                          <label style="font-size:12px;">
                          <input type="text" name="twitter" value="https://twitter.com/" size="40"/>
                          <br/>Twitter
                          </label>

                          <br/><br/>
                    
                                 <label style="font-size:12px;">
                                  <input type="text" name="youtube" value="https://www.youtube.com/channel/" size="40"/>
                                  <br/>Youtube
                                </label>

                                <br/><br/>
                    
                                 <label style="font-size:12px;">
                                  <input type="text" name="snapchat" value="Votre pseudo" size="40"/>
                                  <br/>Snapchat
                                </label>

                                <br/><br/>
                    
                                 <label style="font-size:12px;">
                                  <input type="text" name="instagram" value="https://www.instagram.com/" size="40"/>
                                  <br/>Instagram
                                </label>

                                <br/><br/>
                    
                                 <label style="font-size:12px;">
                                  <input type="text" name="linkedin" value="https://fr.linkedin.com/in/" size="40"/>
                                  <br/>LinkedIn
                                </label>
                          
                       
                                  
                  <br/><br/>
                  
                  <hr/>

                  <br/><br/>

                   <h4>VOTRE AGENCE EST-ELLE HANDI-ACCUEILLANTE ? *</h4>

                        <label>Votre agence sera-t-elle accessible aux personnes à mobilité réduite ? (infrastructure adaptée) *</label>
                        <br/>
                        <label>
                          <input type="radio" name="mobilite_reduite" value="oui"/>
                          OUI</label>
                  
                        <label>
                          <input type="radio" name="mobilite_reduite" value="non"/>
                          NON</label>
                        

                          
                          
                          <br/><br/><br/>
                          
                       
                        <label>Votre agence sera-t-elle accessible aux personnes malentendantes ? (Interprète en langue des signes) *</label>
                          <br/>
                          <label>
                          <input type="radio" name="malentendant" value="oui"/>
                          OUI</label>
                  
                          <label>
                          <input type="radio" name="malentendant" value="non"/>
                          NON</label>
                    
                          

                          <br/><br/><br/>
                          

                          <label>Votre Agence sera-t-elle accessible aux personnes malvoyantes ? (Personnes accompagnatrices) *</label>
                          <br/>
                          <label>
                          <input type="radio" name="malvoyant" value="oui"/>
                          OUI
                          </label>
                  
                          <label>
                          <input type="radio" name="malvoyant" value="non"/>
                          NON
                          </label>
                          
                          
                         
                          <br/><br/>

                          <hr>

                          <br/><br/>
                  
                  <h4>LOGO AGENCE *</h4>
                  
                  <p>Format JPG/PNG en 180x180 pixels maximum</p>
                  
                  <input type="file" name="file" value="" required /><br /><br/>

                  </hr>

                   <hr>

                   <br/><br/>

                   <h3>RESPONSABLE DE L’ORGANISATION DE LA JOURNÉE <br>AGENCES OUVERTES * : </h3>
              <br/>
              <p>Cette personne sera le contact opérationnel officiel de la #JAO2017. Elle recevra l’ensemble des informations relatives à 
              l’organisation de l’événement.</p><br>
              <label>Nom *</label>
              <br/><br/>
              <input type="text" name="nom_contact" required="required" size="30" />
              
              <br/>
              <br/>
              
              <label>Prénom *</label>
              <br/><br/>
              <input type="text" name="prenom_contact" required="required" size="30"/>
              
              <br/>
              <br/>
              
              <label>Fonction *</label>
              <br/><br/>
              <input type="text" name="fonction_contact" required="required" size="30"/>
              
              <br/>
              <br/>
              
              <label>Téléphone *</label>
              <br/><br/>
              <input type="text" name="telephone_contact" required="required" placeholder="0146375867" size="30" maxlength="10"/>
              
              <br/>
              <br/>
              
              <label>Portable</label>
              <br/><br/>
              
              <input type="text" name="portable_contact" size="30" placeholder="0646375867" maxlength="10"/>
              
              <br/>
              <br/>
              
              <label>Email *</label>
              <br/><br/>
              <input type="email" name="email_contact" required="required" size="30"/>
              
              <br/><br>

              <label>Twitter </label>
              <br/><br>
              <input type="text" name="twitter_contact"  value="https://twitter.com/" size="30"/><br><br>

              <p>*: les données marquées d’un astérisque sont obligatoires.</p>
              
                  
                  <input type="hidden" name="admin" value="non" />
                  <input type="hidden" name="contact_rempli" value="oui" />
                  <input type="hidden" name="contact_secondaire" value="non" />
                  <input type="hidden" name="img_import" value="non" />
                  <input type="hidden" name="lien_video_import" value="non" />
                  <button name="submit" class="register">Valider</button>
                  <br/><br/><br/>
              </form>
          </div>
      </div>
  </section>
  <?
  
       }else{echo 'Accès refusé : le code d\'invitation saisi n\'est pas le bon.';}
     }
   }
     
  ?>

  <?php $footer = include("footer.php"); ?>
 </body>
</html>