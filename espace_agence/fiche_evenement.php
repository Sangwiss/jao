<?php

	require_once 'config.php';

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta property="og:url"content="http://agences-ouvertes.com/programme.php" />
<meta property="og:type"content="website" />
<meta property="og:title"content="Journée Agences Ouvertes 2017" />
<meta property="og:description"content="#JAO2017 "/>
<meta property="og:image"content="" />
<meta property="og:image:width" content="630" />
<meta property="og:image:height" content="315" />



<link href="css/test.css" rel="stylesheet" />

<!-- // Google Map Scripts -->
<script src="http://maps.googleapis.com/maps/api/js"></script>

<title>#JAO2017</title>
</head>

<body>
	<?php
	
		include 'nav.php';
		
	?>
    
    <?php
	if($_POST['id']!=''){
if(isset($_POST['submit'])){		
	$id = $_POST['id'];
	$user_id = $_POST['user_id'];
	$nom_agence = $_POST['nom_agence'];
	$event_id = $_POST['event_id'];
	
	//echo $id.'<br/>'.$user_id.'<br/>'.$nom_agence;
	
	$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
	$sql->execute();
	$r=$sql->fetch();
	
	echo '<center><p style="margin-top:10px;"><a href="programme.php"><img src="icones/bt/retour_liste.jpg" ></a></p></center>';
	
	echo '
	
      <main id="app-main" role="main" style="background:transparent!important;">
        <section class="content" style="background:transparent!important;">';
		
		
		$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
		$sql->execute();
		$r=$sql->fetch();
          echo'
          </div>
          <div class="wrapper">
            <div class="contentBox">
			
			
			
			<!----><div class="contentBoxHead-top">
                   <!-- <div class="contentBoxHead-top-left">
                      <div> Possibilité de titre </div>
                    </div>-->
                    <div class="contentBoxHead-top-right">
                        <div style="margin-bottom:5px;">
                          ';
                         ?>
						 
						<span id="fb-root"></span>
						<script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        
                        <span class="fb-share-button" data-href="http://agences-ouvertes.com/programme.php" data-layout="button"></span>
						 
						 <?php
						 echo'
                        </div>
						
						&nbsp;&nbsp;&nbsp;
						
                        <div>';
                         ?>
						 
						 <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://agences-ouvertes.com/programme.php" data-text="22 mars une journée à part" data-via="AACClive" data-hashtags="JAO2016">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						 
						 <?php
						 echo'
                        </div>
						
						&nbsp;&nbsp;&nbsp;
						
                        <div>';
                         ?>
						 
						<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: fr_FR</script>
						<script type="IN/Share" data-url="http://www.agences-ouvertes.com/programme.php" data-counter="right"></script>
						 
						 <?php
						 echo'
                        </div>
						
						
						</div>
                  </div>
			
			
			
              <!--<div class="contentBoxHead">-->';
			  if($r['img_import']=='oui'){
			  echo'
				<!--<div style="background-image: url(medias/'.$r['image'].');" class="contentBoxHead-head">-->
				<img src="medias/'.$r['image'].'" alt="'.$r['image'].'" class="bg" />
				
				';
			  }else if($r['img_import']=='non')
			  { echo'<div><img src="img/fresque_home_tempo.jpg" class="bg" />';	}
			  echo'
                  <!--<div class="contentBoxHead-top">
                    <div class="contentBoxHead-top-left">
                      <div> Possibilité de titre </div>
                    </div>
                    <div class="contentBoxHead-top-right">
                        <svg class="icon">
                          <use xlink:href="#facebook"></use>
                        </svg><span class="text"></span>
                        <svg class="icon">
                          <use xlink:href="#twitter"></use>
                        </svg><span class="text"></span>
                        <svg class="icon">
                          <use xlink:href="#linkedin"></use>
                        </svg><span class="text"></span></div>
                  </div>-->';
			  if($r['img_import']=='oui'){
			  echo'
                  <div class="contentBoxHead-middle">
                    <div class="contentBoxHead-middle-thumb">
                      <div><img src="uploads/'.$r['logo_agence'].'" alt="'.$r['logo_agence'].'" width="120" height="139" /></div>
                    </div>';
			  }else if($r['img_import']=='non')
			  	  {
				  	echo'
                  <!--<div class="contentBoxHead-middle-no-image">
                    <div class="contentBoxHead-middle-thumb-no-image">
                      <div><img src="uploads/'.$r['logo_agence'].'" alt="'.$r['logo_agence'].'" width="120" height="139" ></div>
                    </div>-->
					
					
					<div class="contentBoxHead-middle">
                    <div class="contentBoxHead-middle-thumb">
                      <div><img src="uploads/'.$r['logo_agence'].'" alt="'.$r['logo_agence'].'" width="120" height="139" /></div>
                    </div>
					
					
					';
				  }
			  echo'		
                     <!--<div class="contentBoxHead-middle-text">
                     <h1 class="contentBoxHead-middle-title">'.$r['nom_agence'].'</h1>
                      <p class="txtLead">'.$r['nom_evenement'].'</p>
                    </div>
                  </div>-->
                </div>';

				$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
				$sql->execute();
				$r=$sql->fetch();

				 echo'
				 <div class="styleContentBloc">
					<div class="contentBoxHead-footer" style="padding-top:10px; padding-bottom:10px; padding-left:220px; padding-right:220px; text-align: center;"><h3>'.$r['nom_evenement'].'</h3></div>
					<div class="contentBoxHead-footer" style="padding-top:10px; padding-bottom:10px;"><h4>'.$r['type_evenement'].'</h4></div>
	
					<br/><br/>
				
				
                  <!--<div class="grid">-->';
				  
				  
				  $sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
				  $sql->execute();
				  $r=$sql->fetch();
				  
				 			  if($r['lien_video_import']=='oui'){
				  echo'
				  <div class="grid">
                    <div class="grid-2-3">';
					
					echo'
					<p>'.$r['lien_video'].'</p>
					
					<!--<img src="medias/'.$r['image'].'" alt="" class="u-mbs">
                      <h4 class="contentBoxPod-largeTitle">Dialog Designer</h4>
                      <p class="txtAlternate">With Dialog Designer, create with just a few clicks your voice intelligence : Visual Programming, Natural Language processing, Huge linguistic database.</p> -->
                    </div>';
					}else if($r['lien_video_import']=='non'){}
					
					if($r['lien_video_import']=='oui'){
					$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
					$sql->execute();
					$r=$sql->fetch();
					
					echo'
                    <div class="grid-1-3">
                     	<div class="boxResize">
						<center>
                        <ul class="listReset">
                          <li>
                            
							<span><img src="icones/circular-clock.png" alt="horloge" height="32" width="32" /><br/></span> <span>'.$r['heure_debut'].' - '.$r['heure_fin'].'</span>
							
							<br/><br/>
							
                          </li>
						  
                          <li>
                            
							
							<span class="sp-icone">
								<ul class="listReset">';
							
							
							
									
									$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
									$sql->execute();
									$r=$sql->fetch();
									//echo'<li><div class="box-legend">Accès</div></li>';
									if($r['mobilite_reduite']=='oui'){
									  echo'
									  <li>
										<div class="box-legend"><img src="icones/mobilite.png" height="32" width="32" />
										';
									  }else{}
									  
									  if($r['malentendant']=='oui'){
									  echo'
									  
										<img src="icones/malentendant.png" height="32" width="32" />
									  ';
									  }else{}
									  
									  if($r['malvoyant']=='oui'){
									  echo'
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  </li>';
									  
									  }else{}
									  
									  
									  $sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
									  $sql->execute();
									  $r=$sql->fetch();
							
							
							
							echo'
									</ul>
								</span>';
							
							
						echo'	
						<br/><br/>
						
                          </li>
						  
                          <li>';
						  
                            if($r['places_limitees']=='oui'){
							echo'
							<span><img src="icones/people-watching-a-movie.png" alt="nombres de places" height="32" width="32" style="padding-right:0.3em;" />'.$r['nb_places'].'</span> ';
							}
							
						echo'
							<br/><br/>
							
						</li>
						
						
						<li>';
                            if($r['inscription']=='oui'){
								echo'
								<span><a href="#inscription"><u>Inscription obligatoire</u></a></span> <br/>
								<span>avant le '.$r['limite_inscription'].'</span>';						  
						  }
							
						echo'
						<br/><br/>
                          </li>
						  
                          <li>';
                            
							if($r['evenement_complet']=='oui'){
								echo'
								<span>&Eacute;vénement complet</span> ';
							}else{}
						
						echo'	
                          </li>
						  
                        </ul>
						</center>
                      </div>
                    </div>';
					}else if($r['lien_video_import']=='non')
						{
							
							
							
							
							
							
							
							
							
							
							
					$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
					$sql->execute();
					$r=$sql->fetch(); 
					
					echo'
                  	<div class="grid-no-video">
                     	<div class="boxResize-no-image">
						
                        <table align="center" class="verticalLine"><tbody><tr>
                          <td width="180px" class="verticalLine">
                            
							<img src="icones/circular-clock.png" alt="horloge" height="32" width="32" /></span> <span>'.$r['heure_debut'].' - '.$r['heure_fin'].'
							
                          </td>
						  
                         
                            
							
							';
							
							
							
									
									$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
									$sql->execute();
									$r=$sql->fetch();
									//echo'<li><div class="box-legend">Accès</div></li>';
									echo'<td width="150px" class="verticalLine">';
									if($r['mobilite_reduite']=='oui'){
									  echo'
										<div class="box-legend"><img src="icones/mobilite.png" height="32" width="32" />
										';
									  }else{}
									  
									  if($r['malentendant']=='oui'){
									  echo'
									  
										<img src="icones/malentendant.png" height="32" width="32" />
									  ';
									  }else{}
									  
									  if($r['malvoyant']=='oui'){
									  echo'
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>';
									  
									  }else{}
									  echo'</td>';
									  
									  $sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
									  $sql->execute();
									  $r=$sql->fetch();
							
							
							
							echo'
									';
							
							
						echo'	
						
						
                          
						  
                          ';
						  
                            if($r['places_limitees']=='oui'){
							echo'
							<td width="100px" class="verticalLine">
							<span><img src="icones/people-watching-a-movie.png" alt="nombres de places" height="32" width="32" style="padding-right:0.3em;" />'.$r['nb_places'].'</span> 
							</td>';
							}
							
						echo'
							
							
						
						
						
						';
                            if($r['inscription']=='oui'){
								echo'
								<td class="verticalLine">
									<span><u>Inscription obligatoire</u></span> <span>avant le '.$r['limite_inscription'].'</span>
								</td>';						  
						  }
							
						echo'
						
                          
						  
                          ';
                            
							if($r['evenement_complet']=='oui'){
								echo'
								<td class="verticalLine">
									<span>&Eacute;vénement complet</span> 
								</td>';
							}else{}
						
						echo'	
                          
						  
                        </tr></tbody></table>
						
                      </div>
                    ';
							
							
							
							
							
							
							
							
							
							
						}
					
					
				  echo'	
                  </div>
				  
				  <br/><br/><br/>
				  
				  <div>';
                     $sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
					 $sql->execute();
					 $r=$sql->fetch();
					  
					  if($r['malentendant']=='oui' OR $r['malvoyant']=='oui' OR $r['mobilite_reduite']=='oui'){
						  echo'
						  <center><p class="box-legend"><span><img src="icones/mobilite.png" height="24" width="24" /><img src="icones/malentendant.png" height="24" width="24" /><img src="icones/malvoyant.png" height="24" width="24" /></span>Pour les personnes en situation de handicap, merci de bien vouloir signaler l\'horaire approximatif de votre arrivée.</p></center>';
						  }
						  
					$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
					$sql->execute();
					$r=$sql->fetch();
					
				  echo'
				  </div>
				  
                </div>
              </div>
			  
			  <hr style="border-top:0px!important;">
			  
              <div id="description">
                <div class="contentBoxPod">
                  <!--<h2 class="contentBoxPod-title">Thématique</h2>-->
                  <div class="grid">
					<div>
                      <p class="txtLead">'.$r['thematique'].'</p>
                    </div>
                  </div>
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<hr style="border-top:0px!important;">
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine" bgcolor="#fff">
						
						
						
						';
						
							
							$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id='$event_id'");
							$sql->execute();
							$r=$sql->fetch(); 
							if($r['nom_1']!=''){ 
						 		 echo'
						
						<td class="verticalLine styleContentMetro">
					  	
						
							<div class="contentBoxPodStyleContent">
							
							<table class="verticalLine"><tbody>
							
							<tr>
							
							<td class="contactContent"><center><span id="inscription"><img src="icones/people.png" width="32" alt=""></span></center></td></tr>
							
							</tr>
							
								<tr>
								
								
									<td align="center">
										'.$r['prenom_1'].' '.$r['nom_1'].' <br/> '.$r['fonction_1'].' <br/> '.$r['societe_1'].'
									</td>
								
							
								</tr>
							
							
								</tbody></table>
								 
								 
							
							</div>
						</td>
						';	
						
						}
						
						
						echo '<td class="styleContentNone"></td>';
						
						$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id='$event_id'");
							$sql->execute();
							$r=$sql->fetch(); 
							if($r['nom_2']!=''){
						
						echo'
						<td class="verticalLine styleContentMetro">	
							<div class="contentBoxPodStyleContent">';
									  
							
					  				  
									  echo'
									  <table class="verticalLine"><tbody>
									  	
										<tr>
							
											<td class="contactContent"><center><span id="inscription"><img src="icones/people.png" width="32" alt=""></span></center></td></tr>
										
										</tr>
										
										 <tr>
									  
									  		
											<td align="center">
												'.$r['prenom_2'].' '.$r['nom_2'].' <br/> '.$r['fonction_2'].' <br/> '.$r['societe_2'].'
											</td>
									  

									 	 </tr>
										 
									 </tbody></table>';
									  
						}else{}
						
						echo'
							</div>
						</td>	
							
					  </tr></tbody></table>
					  
					  ';
				
							
				
				
				
				
				
				
				echo'
							
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine" bgcolor="#fff">
						
						
						
						';
						
							
							$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id='$event_id'");
							$sql->execute();
							$r=$sql->fetch(); 
							if($r['nom_3']!=''){ 
						 		 echo'
						
						<td class="verticalLine styleContentMetro">
					  	
						
							<div class="contentBoxPodStyleContent">
							
							<table class="verticalLine"><tbody>
							
							<tr>
							
							<td class="contactContent"><center><span id="inscription"><img src="icones/people.png" width="32" alt=""></span></center></td></tr>
							
							</tr>
							
								<tr>
								
								
									<td align="center">
										'.$r['prenom_3'].' '.$r['nom_3'].' <br/> '.$r['fonction_3'].' <br/> '.$r['societe_3'].'
									</td>
								
							
								</tr>
							
							
								</tbody></table>
								 
								 
							
							</div>
						</td>
						';	
						
						}
						
						
						echo '<td class="styleContentNone"></td>';
						
						$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id='$event_id'");
						$sql->execute();
						$r=$sql->fetch(); 
							if($r['nom_4']!=''){
						
						echo'
						<td class="verticalLine styleContentMetro">	
							<div class="contentBoxPodStyleContent">';
									  
							
					  				  
									  echo'
									  <table class="verticalLine"><tbody>
									  	
										<tr>
							
											<td class="contactContent"><center><span id="inscription"><img src="icones/people.png" width="32" alt=""></span></center></td></tr>
										
										</tr>
										
										 <tr>
									  
									  		
											<td align="center">
												'.$r['prenom_4'].' '.$r['nom_4'].' <br/> '.$r['fonction_4'].' <br/> '.$r['societe_4'].'
											</td>
									  

									 	 </tr>
										 
									 </tbody></table>';
									  
						}else{}
						
						echo'
							</div>
						</td>	
							
					  </tr></tbody></table>
					  
					  ';
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				echo'
				<hr style="border-top:0px!important;">
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine">
						
						
						';
							
							$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
							$sql->execute();
							$r=$sql->fetch(); 
							if($r['inscription']=='oui'){ 
						 		 echo'
						
						<td class="verticalLine styleContentMetro">
					  	
						
							<div class="contentBoxPodStyleContent">
							
							<table class="verticalLine"><tbody>
							
							<tr>
							
								<td class="contactContent"><center><span id="inscription"><img src="icones/contact.png" alt="contact" height="32" width="32" /></span></center></td></tr>
								<p>';
								
								echo'
								<tr>
								<td class="contactContent verticalLine">';
								if($r['nom_contact_inscription']!=''){
									echo'
								<p>'.$r['prenom_contact_inscription'].' '.$r['nom_contact_inscription'].'</p> ';
								}else{}
								
								if($r['telephone']!=''){
									echo'
									<p>'.$r['telephone'].' </p> ';
								}else{}
								
								if($r['email']!=''){
								echo'
								<p><a href="mailto:'.$r['email'].'?subject=inscription">'.$r['email'].'</a></p>';
								}else{}
								
								if($r['autre']!=''){
									echo'
								<p><a href="'.$r['autre'].'" target="_blank">'.$r['autre'].'</a></p>  ';
								}else{}
								
								 $sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
								 $sql->execute();
								 $r=$sql->fetch();
								
								if($r['facebook']!=''){
									echo'
								<p> <a href="'.$r['facebook'].'" target="_blank"><img src="icones/facebook.png" width="24" height="24" alt="Facebook" ></a> ';
								}else{}
								
								if($r['twitter']!=''){
									echo'
								<a href="'.$r['twitter'].'" target="_blank"><img src="icones/twitter.png" width="24" height="24" alt="Twitter" ></a></p> ';
								}else{}
								echo' 
								</p>
								</td>
								</tr></tbody></table>
								 
								 
							
							</div>
						</td>
						
						<td class="styleContentNone"></td>
						';	
						
						}
						
						echo'
						<td class="verticalLine styleContentMetro">	
							<div class="contentBoxPodStyleContentMetro">';
									  
									  $sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
									  $sql->execute();
									  $r=$sql->fetch();
					  				  
									  echo'
									  <table class="verticalLine"><tbody>
									  
									  
									  
									  
									  <tr>';
									  
									   if($r['ligne_1']!='' AND $r['station_1']!=''){
									  echo'
									  <td width="200px" class="metroContent"><center><span><img src="icones/metro.png" height="32" width="32" /></span></center></td>';
									   }
									   
									  if($r['numero_bus_1']!='' AND $r['arret_1']!=''){
										  echo'
										  <td width="200px" class="verticalLine"><center><span><img src="icones/bus.png" height="32" width="32" /></span></center></td></tr>';
									  }
									  
									  
									  echo'
									  <tr>
									  
									  
									  
									  <center>
									  	'.$r['adresse'].'<br/>';
										
										if($r['adresse_2']!=''){
										echo'
									  	'.$r['adresse_2'].'<br/>';
										}else{}
										
										echo'
										'.$r['cp'].', '.$r['ville'].'
									  </center>  
									  
									  <br/>
									  
									  
									  
									  ';
							
						if($r['ligne_1']!='' AND $r['station_1']!='' ){
									
						echo'
									 									  
									  <td width="200px" class="metroContent" align="center" bgcolor="#FFFFFF">';
									  
									  
									   if($r['ligne_1']!='' AND $r['station_1']!=''){
										   
									  echo'
									  <span> '.$r['ligne_1'].' - '.$r['station_1'].'</span><br/>';
									   }
									  
									  if($r['ligne_2']!='' AND $r['station_2']!=''){
										  echo'
												<span>'.$r['ligne_2'].' - '.$r['station_2'].'</span><br/>';
									  }
									  
									  if($r['ligne_3']!='' AND $r['station_3']!=''){
										  echo'
												<span>'.$r['ligne_3'].' - '.$r['station_3'].'</span><br/>';
									  }
									  
									  if($r['ligne_4']!='' AND $r['station_4']!=''){
										  echo'
												<span>'.$r['ligne_4'].' - '.$r['station_4'].'</span><br/>';
									  }
									  
									  if($r['ligne_5']!='' AND $r['station_5']!=''){
										  echo'
												<span>'.$r['ligne_5'].' - '.$r['station_5'].'</span><br/>';
									  }
									  echo'
									  </td>';
									  
						}else{}
									if($r['numero_bus_1']!='' AND $r['arret_1']!=''){
										  
									  echo'
									  
									  <td width="200px" class="verticalLine" align="center" bgcolor="#FFFFFF">';
										
									if($r['numero_bus_1']!='' AND $r['arret_1']!=''){
										  echo'
										  <span>'.$r['numero_bus_1'].' - '.$r['arret_1'].'</span><br/>';
									 }
									  
									  if($r['numero_bus_2']!='' AND $r['arret_2']!=''){
										  echo'
												<span>'.$r['numero_bus_2'].' - '.$r['arret_2'].'</span><br/>';
										  
									  }
									  
									  if($r['numero_bus_3']!='' AND $r['arret_3']!=''){
										  echo'
												<span>'.$r['numero_bus_3'].' - '.$r['arret_3'].'</span><br/>';
										  
									  }
									  
									  if($r['numero_bus_4']!='' AND $r['arret_4']!=''){
										  echo'
												<span>'.$r['numero_bus_4'].' - '.$r['arret_4'].'</span><br/>';
										  
									  }
									  
									  if($r['numero_bus_5']!='' AND $r['arret_5']!=''){
										  echo'
												<span>'.$r['numero_bus_5'].' - '.$r['arret_5'].'</span><br/>';
										  
									  }
				
									
									
									  echo'
									  </td>';
									  }else{}
									  
									  
									  echo'
									  </tr></tbody></table>
									  
						
							</div>
						</td>	
							
					  </tr></tbody></table>
					  
					  ';
				 
				 
				$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
				$sql->execute();
				$r=$sql->fetch();
				
				$lat = $r['lat'];
				$lng = $r['lng'];
				
				echo'			
				<hr style="border-top:0px!important;">
				  
				  <div>
					<div class="contentBoxPodStyleContentGoogleMap">
					  <div class="grid">
						
						<div id="googleMap" style="width:880px;height:380px;"></div>
						
					  </div>
					</div>
				
				
				<!--<hr style="border-top:0px!important;">
				  
				  <div>
					<div class="contentBoxPodStyleContentGoogleMap">
					  <div class="grid">
					  	<div class="grid-2-4" align="right">';
						
								 $sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
								 $sql->execute();
								 $r=$sql->fetch();
								 
								if($r['facebook']!=''){
									echo'
								<a href="'.$r['facebook'].'" target="_blank"><img src="icones/facebook.png" width="32" height="32" alt="Facebook" ></a> ';
								}else{}
							echo'
							</div>
							<div class="grid-2-4" align="left">
							';	
								if($r['twitter']!=''){
									echo'
								<a href="'.$r['facebook'].'" target="_blank"><img src="icones/twitter.png" width="32" height="32" alt="Twitter" ></a> ';
								}else{}
						
						echo'
						</div>
					  </div>
					</div>-->
				
				
				
				  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
	
	<section style="height:30%">
	
	</section>
	
	';
	
	
	
	}
}else
	{
	
		echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
								window.location.href='index.php';
						   </SCRIPT>"));
	
	}
	?>
    
<!-- Footer -->
<?php $footer = include("footer.php"); ?>

<script>
	var myCenter=new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $lng; ?>);
	
	function initialize()
	{
	var mapProp = {
	  center:myCenter,
	  zoom:16,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
	var marker=new google.maps.Marker({
	  position:myCenter,
	  });
	
	marker.setMap(map);
	
	var infowindow = new google.maps.InfoWindow({
	  content:"<?php echo $nom_agence; ?>"
	  });
	
	infowindow.open(map,marker);
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>
</html>