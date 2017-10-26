<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta property="og:url"content="http://agences-ouvertes.com/programme.php" />
<meta property="og:type"content="website" />
<meta property="og:title"content="Journée Agences Ouvertes 2016" />
<meta property="og:description"content="#JAO2016 : une journée à part le mardi 22 mars 2016 dans près de 80 agences-conseils en communication à Paris, en région et dans les DOM-TOM. Programme & info pour s’inscrire : www.agences-ouvertes" />
<meta property="og:image"content="http://agences-ouvertes.com/img/Post_FP_JAO2016.jpg" />
<meta property="og:image:width" content="630" />
<meta property="og:image:height" content="315" />


<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="gmaps.js"></script>-->

<!-- // Google Map Scripts -->
<script src="http://maps.googleapis.com/maps/api/js"></script>

<link href="css/test.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<title>#JAO2016</title>
</head>

<body>

<?php
include('nav.php');
include('db_prog.php');


$user_id=$_POST['user_id'];
$agence=$_POST['nom_agence'];
//echo $user_id;

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$perpage = 1; // items per page

$pages_count  = ceil($count / $perpage);


// Get the current page or set default if not given
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$pages_count = ceil($count / $perpage);

$is_first = $page == 1;
$is_last  = $page == $pages_count;

// Prev cannot be less than one
$prev = max(1, $page - 1);

// Next cannot be larger than $pages_count
$next = min($pages_count , $page + 1);

echo'<br/><br/>';

 echo '<center><p><a href="programme.php"><img src="icones/bt/retour_liste.jpg" ></a></p></center>';

if($pages_count > 0) {
  
  // If we are on page 2 or higher
  echo'<br/><br/>';
 
  echo'<table><tbody><tr>';
  if(!$is_first) {
      echo '<td width="20px" align="right"><form method="post" action="pagination.php?page=1">
			  <button name="submit" class="rev">
				  <input type="hidden" name="user_id" value="'.$user_id.'"/>
				  <input type="hidden" name="nom_agence" value="'.$agence.'"/>
				  <img src="/icones/bt/start.jpg" alt="" >
			  </button>
			</form></td>
			&nbsp;&nbsp;&nbsp;&nbsp;';
	  
	  
      echo '<td width="20px"><form method="post" action="pagination.php?page='.$prev.'">
	  
			<button name="submit" class="rev">
				  <input type="hidden" name="user_id" value="'.$user_id.'"/>
				  <input type="hidden" name="nom_agence" value="'.$agence.'"/>
				  <img src="/icones/bt/preview.jpg" alt="" >
			  </button>
			</form></td>
	  
	  
	  
	  ';
  }
	 echo '<td align="center" width="10px"><span>&Eacute;vénement <b>'.$page.'</b> / <b>'.$pages_count.'</b></span></td>';
	 
  // If we are not at the last page
  if(!$is_last) {
      echo '<td align="right" width="20px"><form method="post" action="pagination.php?page='.$next.'"">
			  <button name="submit" class="rev">
				  <input type="hidden" name="user_id" value="'.$user_id.'"/>
				  <input type="hidden" name="nom_agence" value="'.$agence.'"/>
				  <img src="/icones/bt/next.jpg" alt="" >
			  </button>
			</form></td>
			  &nbsp;&nbsp;&nbsp;&nbsp;';
	  
      echo '<td width="20px"><form method="post" action="pagination.php?page='.$pages_count.'">
			<button name="submit" class="rev">
			  <input type="hidden" name="user_id" value="'.$user_id.'"/>
			  <input type="hidden" name="nom_agence" value="'.$agence.'"/>
				  <img src="/icones/bt/end.jpg" alt="" >
			  </button>
			</form></td>
			
			
			
			';
  }
echo'</tr></tbody></table>';

  $query = "SELECT * FROM programme WHERE user_id='$user_id' ORDER BY heure_debut LIMIT ".(int)($page - 1).", ".(int)$perpage;	
  $query = mysql_query($query);
  
  


  echo "<br /><br /><br />";
  //echo "<table style='border: solid 1px'><tr><th width=30> ID </th><th width=100> Name </th></tr>";
  while($row = mysql_fetch_array($query)) {

  $event_id_prog = $row['event_id'];
  
  echo'
  <main id="app-main" role="main" style="background:transparent!important;">
        <section class="content" style="background:transparent!important;">';
 
  
  
  
  
  
  
  
 $query_2 = "SELECT * FROM users WHERE id='$user_id' ";	
 $query_2 = mysql_query($query_2);
 $row_2 = mysql_fetch_array($query_2);
  
 $query_3 = "SELECT * FROM intervenants WHERE event_id='$event_id_prog' ";	
 $query_3 = mysql_query($query_3);
 $row_3 = mysql_fetch_array($query_3);
  
 echo '
	
      
		
          
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
			  if($row_2['img_import']=='oui'){
			  echo utf8_encode ( '
				<!--<div style="background-image: url(medias/'.$row_2['image'].');" class="contentBoxHead-head">-->
				<img src="medias/'.$row_2['image'].'" alt="'.$row_2['image'].'" class="bg" />
				
				' );
			  }else if($row_2['img_import']=='non')
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
			  if($row_2['img_import']=='oui'){
			  echo'
                  <div class="contentBoxHead-middle">
                    <div class="contentBoxHead-middle-thumb">
                      <div><img src="uploads/'.$row_2['logo_agence'].'" alt="'.$row_2['logo_agence'].'" width="120" height="139" /></div>
                    </div>';
			  }else if($row_2['img_import']=='non')
			  	  {
				  	echo'
                  <!--<div class="contentBoxHead-middle-no-image">
                    <div class="contentBoxHead-middle-thumb-no-image">
                      <div><img src="uploads/'.$row_2['logo_agence'].'" alt="'.$row_2['logo_agence'].'" width="120" height="139" ></div>
                    </div>-->
					
					 <div class="contentBoxHead-middle">
                    <div class="contentBoxHead-middle-thumb">
                      <div><img src="uploads/'.$row_2['logo_agence'].'" alt="'.$row_2['logo_agence'].'" width="120" height="139" /></div>
                    </div>
					
					
					
					';
				  }
			  echo utf8_encode('		
                     <!--<div class="contentBoxHead-middle-text">
                     <h1 class="contentBoxHead-middle-title">'.$row_2['nom_agence'].'</h1>
                      <p class="txtLead">'.$row_2['nom_evenement'].'</p>
                    </div>
                  </div>-->
                </div>
				
				
				<div class="styleContentBloc">
					<div class="contentBoxHead-footer" style="padding-top:10px; padding-bottom:10px; padding-left:220px; padding-right:220px; text-align: center;"><h3>'.$row['nom_evenement'].'</h3></div>
					<div class="contentBoxHead-footer" style="padding-top:10px; padding-bottom:10px;"><h4>'.$row['type_evenement'].'</h4></div>
					
					<br/><br/>
				
				
                  <!--<div class="grid">-->' );
				  
				  
				  /*$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
				  $sql->execute();
				  $r=$sql->fetch();*/
				  
				  if($row_2['lien_video_import']=='oui'){
				  echo'
				  <div class="grid">
                    <div class="grid-2-3">';
					
					echo'
					<p>'.$row_2['lien_video'].'</p>
					
					<!--<img src="medias/'.$row_2['image'].'" alt="" class="u-mbs">
                      <h4 class="contentBoxPod-largeTitle">Dialog Designer</h4>
                      <p class="txtAlternate">With Dialog Designer, create with just a few clicks your voice intelligence : Visual Programming, Natural Language processing, Huge linguistic database.</p> -->
                    </div>';
					}else if($row_2['lien_video_import']=='non'){}
					
					if($row_2['lien_video_import']=='oui'){
					/*$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
					$sql->execute();
					$r=$sql->fetch(); */
					
					echo'
                    <div class="grid-1-3">
                     	<div class="boxResize">
						<center>
                        <ul class="listReset">
                          <li>
                            
							<span><img src="icones/circular-clock.png" alt="horloge" height="32" width="32" /><br/></span> <span>'.$row['heure_debut'].' - '.$row['heure_fin'].'</span>
							
							<br/><br/>
							
                          </li>
						  
                          <li>
                            
							
							<span class="sp-icone">
								<ul class="listReset">';
							
							
							
									
									/*$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
									$sql->execute();
									$r=$sql->fetch();*/
									//echo'<li><div class="box-legend">Accès</div></li>';
									if($row_2['mobilite_reduite']=='oui'){
									  echo'
									  <li>
										<div class="box-legend"><img src="icones/mobilite.png" height="32" width="32" />
										';
									  }else{}
									  
									  if($row_2['malentendant']=='oui'){
									  echo'
									  
										<img src="icones/malentendant.png" height="32" width="32" />
									  ';
									  }else{}
									  
									  if($row_2['malvoyant']=='oui'){
									  echo'
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  </li>';
									  
									  }else{}
									  
									  
									  /*$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
									  $sql->execute();
									  $r=$sql->fetch();*/
							
							
							
							echo'
									</ul>
								</span>';
							
							
						echo'	
						<br/><br/>
						
                          </li>
						  
                          <li>';
						  
                            if($row['places_limitees']=='oui'){
							echo'
							<span><img src="icones/people-watching-a-movie.png" alt="nombres de places" height="32" width="32" style="padding-right:0.3em;" />'.$row['nb_places'].'</span> ';
							}
							
						echo'
							<br/><br/>
							
						</li>
						
						
						<li>';
                            if($row['inscription']=='oui'){
								echo'
								<span><a href="#inscription"><u>Inscription obligatoire</u></a></span> <br/>
								<span>avant le '.$row['limite_inscription'].'</span>';						  
						  }
							
						echo'
						<br/><br/>
                          </li>
						  
                          <li>';
                            
							if($row['evenement_complet']=='oui'){
								echo'
								<span>&Eacute;vénement complet</span> ';
							}else{}
						
						echo'	
                          </li>
						  
                        </ul>
						</center>
                      </div>
                    </div>';
					}else if($row_2['lien_video_import']=='non')
						{
							
							
							
							
							
							
							
							
							
							
							
					/*$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
					$sql->execute();
					$r=$sql->fetch(); */
					
					echo'
                  	<div class="grid-no-video">
                     	<div class="boxResize-no-image">
						
                        <table align="center" class="verticalLine"><tbody><tr>
                          <td width="180px" class="verticalLine">
                            
							<img src="icones/circular-clock.png" alt="horloge" height="32" width="32" /></span> <span>'.$row['heure_debut'].' - '.$row['heure_fin'].'
							
                          </td>
						  
                         
                            
							
							';
							
							
							
									
									/*$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
									$sql->execute();
									$r=$sql->fetch();*/
									//echo'<li><div class="box-legend">Accès</div></li>';
									echo'<td width="150px" class="verticalLine">';
									if($row_2['mobilite_reduite']=='oui'){
									  echo'
										<div class="box-legend"><img src="icones/mobilite.png" height="32" width="32" />
										';
									  }else{}
									  
									  if($row_2['malentendant']=='oui'){
									  echo'
									  
										<img src="icones/malentendant.png" height="32" width="32" />
									  ';
									  }else{}
									  
									  if($row_2['malvoyant']=='oui'){
									  echo'
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>';
									  
									  }else{}
									  echo'</td>';
									  
									  /*$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
									  $sql->execute();
									  $r=$sql->fetch();*/
							
							
							
							echo'
									';
							
							
						echo'	
						
						
                          
						  
                          ';
						  
                            if($row['places_limitees']=='oui'){
							echo'
							<td width="100px" class="verticalLine">
							<span><img src="icones/people-watching-a-movie.png" alt="nombres de places" height="32" width="32" style="padding-right:0.3em;" />'.$row['nb_places'].'</span> 
							</td>';
							}
							
						echo'
							
							
						
						
						
						';
                            if($row['inscription']=='oui'){
								echo'
								<td class="verticalLine">
									<span><u>Inscription obligatoire</u></span> <span>avant le '.$row['limite_inscription'].'</span>
								</td>';						  
						  }
							
						echo'
						
                          
						  
                          ';
                            
							if($row['evenement_complet']=='oui'){
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
                     /*$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
					 $sql->execute();
					 $r=$sql->fetch();*/
					  
					  if($row_2['malentendant']=='oui' OR $row_2['malvoyant']=='oui' OR $row_2['mobilite_reduite']=='oui'){
						  echo'
						  <center><p class="box-legend"><span><img src="icones/mobilite.png" height="24" width="24" /><img src="icones/malentendant.png" height="24" width="24" /><img src="icones/malvoyant.png" height="24" width="24" /></span>Pour les personnes en situation de handicap, merci de bien vouloir signaler l\'horaire approximatif de votre arrivée.</p></center>';
						  }
						  
					/*$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
					$sql->execute();
					$r=$sql->fetch();*/
					
				  echo'
				  </div>
				  
                </div>
              </div>';
			  
			  if($row['thematique']!=''){
			  echo utf8_encode('
			  <hr style="border-top:0px!important;">
			  
              <div id="description">
                <div class="contentBoxPod">
                  <!--<h2 class="contentBoxPod-title">Thématique</h2>-->
                  <div class="grid">
					<div>
                      <p class="txtLead">'.$row['thematique'].'</p>
                    </div>
                  </div>
                </div>');
				}else{}
								echo'
				<hr style="border-top:0px!important;">
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine">
						
						
						
						';
						
							
							/*$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id='$event_id'");
							$sql->execute();
							$r=$sql->fetch(); */
							if($row_3['nom_1']!=''){ 
						 		 echo utf8_encode('
						
						<td class="verticalLine styleContentMetro">
					  	
						
							<div class="contentBoxPodStyleContent">
							
							<table class="verticalLine"><tbody>
							
							<tr>
							
							<td class="contactContent"><center><span id="inscription"><img src="icones/people.png" width="32" alt=""></span></center></td></tr>
							
							</tr>
							
								<tr>
								
								
									<td align="center">
										'.$row_3['prenom_1'].' '.$row_3['nom_1'].' <br/> '.$row_3['fonction_1'].' <br/> '.$row_3['societe_1'].'
									</td>
								
							
								</tr>
							
							
								</tbody></table>
								 
								 
							
							</div>
						</td>
						');	
						
						}
						
						
						//echo '<td class="styleContentNone"></td>';
						
						/*$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id='$event_id'");
							$sql->execute();
							$r=$sql->fetch(); */
							if($row_3['nom_2']!=''){
						
						echo'
						<td class="verticalLine styleContentMetro">	
							<div class="contentBoxPodStyleContent">';
									  
							
					  				  
									  echo utf8_encode('
									  <table class="verticalLine"><tbody>
									  	
										<tr>
							
											<td class="contactContent"><center><span id="inscription"><img src="icones/people.png" width="32" alt=""></span></center></td></tr>
										
										</tr>
										
										 <tr>
									  
									  		
											<td align="center">
												'.$row_3['prenom_2'].' '.$row_3['nom_2'].' <br/> '.$row_3['fonction_2'].' <br/> '.$row_3['societe_2'].'
											</td>
									  

									 	 </tr>
										 
									 </tbody></table>');
									  
						}else{}
						
						echo'
							</div>
						</td>	
							
					  </tr></tbody></table>
					  
					  ';
				
							
				
				
				
				if($row_3['nom_3']=='' && $row_3['nom_4']==''){ 
				echo'
				
				<table class="verticalLine"><tbody><tr class="verticalLine">';
						
							
							/*$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id='$event_id'");
							$sql->execute();
							$r=$sql->fetch(); */
							if($row_3['nom_3']!=''){ 
						 		 echo utf8_encode('
								
						
						<td class="verticalLine styleContentMetro">
					  	
						
							<div class="contentBoxPodStyleContent">
							
							<table class="verticalLine"><tbody>
							
							<tr>
							
							<td class="contactContent"><center><span id="inscription"><img src="icones/people.png" width="32" alt=""></span></center></td></tr>
							
							</tr>
							
								<tr>
								
								
									<td align="center">
										'.$row_3['prenom_3'].' '.$row_3['nom_3'].' <br/> '.$row_3['fonction_3'].' <br/> '.$row_3['societe_3'].'
									</td>
								
							
								</tr>
							
							
								</tbody></table>
								 
								 
							
							</div>
						</td>
						');	
						
						}
						
						
						//echo '<td class="styleContentNone"></td>';
						
						/*$sql=$dbh->prepare("SELECT * FROM intervenants WHERE event_id='$event_id'");
							$sql->execute();
							$r=$sql->fetch(); */
							if($row_3['nom_4']!=''){
						
						echo'
						<td class="verticalLine styleContentMetro">	
							<div class="contentBoxPodStyleContent">';
									  
							
					  				  
									  echo utf8_encode('
									  <table class="verticalLine"><tbody>
									  	
										<tr>
							
											<td class="contactContent"><center><span id="inscription"><img src="icones/people.png" width="32" alt=""></span></center></td></tr>
										
										</tr>
										
										 <tr>
									  
									  		
											<td align="center">
												'.$row_3['prenom_4'].' '.$row_3['nom_4'].' <br/> '.$row_3['fonction_4'].' <br/> '.$row_3['societe_4'].'
											</td>
									  

									 	 </tr>
										 
									 </tbody></table>');
									  
						}else{}
				}
						echo'
							</div>
						</td>	
							
					  </tr></tbody></table>
					  
					  ';
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				echo'
				
				<!----><hr style="border-top:0px!important;">
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine">';
						
						
						
							
							/*$sql=$dbh->prepare("SELECT * FROM programme WHERE id='$id'");
							$sql->execute();
							$r=$sql->fetch(); */
							if($row['inscription']=='oui'){ 
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
								if($row['nom_contact_inscription']!=''){
									echo utf8_encode ( '
								'.$row['prenom_contact_inscription'].' '.$row['nom_contact_inscription'].' ' );
								}else{}
								
								if($row['telephone']!=''){
									echo'
									<br/>'.$row['telephone'].' <br/> ';
								}else{}
								
								if($row['email']!=''){
								echo utf8_encode ( '
								<a href="mailto:'.$row['email'].'?subject=inscription">'.$row['email'].'</a>' );
								}else{}
								
								if($row['autre']!=''){
									echo utf8_encode ( '
								<br/> <a href="'.$row['autre'].'" target="_blank">'.$row['autre'].'</a> ' );
								}else{}
								
								 /*$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
								 $sql->execute();
								 $r=$sql->fetch();*/
								
								if($row_2['facebook']!=''){
									echo utf8_encode ( '
								<br/> <a href="'.$row_2['facebook'].'" target="_blank"><img src="icones/facebook.png" width="24" height="24" alt="Facebook" ></a> ' );
								}else{}
								
								if($row_2['twitter']!=''){
									echo utf8_encode ( '
								<a href="'.$row_2['twitter'].'" target="_blank"><img src="icones/twitter.png" width="24" height="24" alt="Twitter" ></a> ' );
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
									  
									  /*$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
									  $sql->execute();
									  $r=$sql->fetch();*/
					  				  
									  echo'
									  <table class="verticalLine"><tbody><tr>';
									  
									   if($row_2['ligne_1']!='' AND $row_2['station_1']!=''){
									  echo'
									  <td width="200px" class="metroContent"><center><span><img src="icones/metro.png" height="32" width="32" /></span></center></td>';
									   }
									   
									  if($row_2['numero_bus_1']!='' AND $row_2['arret_1']!=''){
										  echo'
										  <td width="200px" class="verticalLine"><center><span><img src="icones/bus.png" height="32" width="32" /></span></center></td></tr>';
									  }
									  
									  
									  echo utf8_encode ('
									    <tr>
									  
									  
									  
									  <p>
									  <center>
									  <span><img src="icones/gps.png" height="32" width="32" /></span><br/><br/>
									  
									  	'.$row_2['adresse'].'<br/>');
										
										if($row_2['adresse_2']!=''){
										echo utf8_encode ('
									  	'.$row_2['adresse_2'].'<br/>');
										}else{}
										
										echo utf8_encode ('
										'.$row_2['cp'].', '.$row_2['ville'].'
									  </center>  
									  </p>
									  
									  <br/>
									  ');
							
						if($row_2['ligne_1']!='' AND $row_2['station_1']!='' ){
									
						echo'
									  
									  <td width="200px" class="metroContent" align="center" bgcolor="#FFFFFF">';
									   if($row_2['ligne_1']!='' AND $row_2['station_1']!=''){
										   
									  echo utf8_encode ( '
									  <span> '.$row_2['ligne_1'].' - '.$row_2['station_1'].'</span><br/>' );
									   }
									  
									  if($row_2['ligne_2']!='' AND $row_2['station_2']!=''){
										  echo utf8_encode ( '
												<span>'.$row_2['ligne_2'].' - '.$row_2['station_2'].'</span><br/>' );
									  }
									  
									  if($row_2['ligne_3']!='' AND $row_2['station_3']!=''){
										  echo utf8_encode ( '
												<span>'.$row_2['ligne_3'].' - '.$row_2['station_3'].'</span><br/>' );
									  }
									  
									  if($row_2['ligne_4']!='' AND $row_2['station_4']!=''){
										 echo utf8_encode ( '
												<span>'.$r['ligne_4'].' - '.$r['station_4'].'</span><br/>' );
									  }
									  
									  if($row_2['ligne_5']!='' AND $row_2['station_5']!=''){
										  echo utf8_encode ( '
												<span>'.$row_2['ligne_5'].' - '.$row_2['station_5'].'</span><br/>' );
									  }
									  echo'
									  </td>';
									  
						}else{}
									if($row_2['numero_bus_1']!='' AND $row_2['arret_1']!=''){
										  
									  echo'
									  
									  <td width="200px" class="verticalLine" align="center" bgcolor="#FFFFFF">';
										
									if($row_2['numero_bus_1']!='' AND $row_2['arret_1']!=''){
										  echo utf8_encode ( '
										  <span>'.$r['numero_bus_1'].' - '.$row_2['arret_1'].'</span><br/>' );
									 }
									  
									  if($row_2['numero_bus_2']!='' AND $row_2['arret_2']!=''){
										  echo utf8_encode ( '
												<span>'.$row_2['numero_bus_2'].' - '.$row_2['arret_2'].'</span><br/>' );
										  
									  }
									  
									  if($row_2['numero_bus_3']!='' AND $row_2['arret_3']!=''){
										  echo utf8_encode ( '
												<span>'.$row_2['numero_bus_3'].' - '.$row_2['arret_3'].'</span><br/>' );
										  
									  }
									  
									  if($r['numero_bus_4']!='' AND $row_2['arret_4']!=''){
										  echo utf8_encode ( '
												<span>'.$row_2['numero_bus_4'].' - '.$row_2['arret_4'].'</span><br/>' );
										  
									  }
									  
									  if($row_2['numero_bus_5']!='' AND $row_2['arret_5']!=''){
										  echo utf8_encode ( '
												<span>'.$row_2['numero_bus_5'].' - '.$row_2['arret_5'].'</span><br/>' );
										  
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
				 
				 
				/*$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
				$sql->execute();
				$r=$sql->fetch();*/
				
				$lat = $row_2['lat'];
				$lng = $row_2['lng'];
				
				?>    
		 			 
		<?php				
				
				echo'			
				<!----><hr style="border-top:0px!important;">
				  
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
						
								 /*$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
								 $sql->execute();
								 $r=$sql->fetch();*/
								 
								if($row_2['facebook']!=''){
									echo'
								<a href="'.$row_2['facebook'].'" target="_blank"><img src="icones/facebook.png" width="32" height="32" alt="Facebook" ></a> ';
								}else{}
							echo'
							</div>
							<div class="grid-2-4" align="left">
							';	
								if($row_2['twitter']!=''){
									echo'
								<a href="'.$row_2['twitter'].'" target="_blank"><img src="icones/twitter.png" width="32" height="32" alt="Twitter" ></a> ';
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
	
	</section>';
	
	
	
	 
				
  }
  
  
  //echo "</table>";
}
else {

  echo "No result found";
}

?>


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
	  content:"<?php echo $agence ?>"
	  });
	
	infowindow.open(map,marker);
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
 
</body>
</html>