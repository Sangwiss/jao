<?php

	require_once 'config.php';

?>

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



<!--
<meta property="og:image" content="http://example.fr/vignette-page-accueil.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="3523">
<meta property="og:image:height" content="2372">
 
<meta property="og:image" content="http://example.fr/logo.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">-->





<link href="css/test.css" rel="stylesheet" />


<!-- // Google Map Scripts -->
<script src="http://maps.googleapis.com/maps/api/js"></script>




<link rel="stylesheet" href="slide/css/bootstrap.min.css" />
<script type="text/javascript" src="slide/js/jquery-1.8.0.min.js"></script> 
<script src="slide/js/bootstrap.min.js"></script>
							<style> 
							
								.carousel-caption {
								}
								.carousel-inner>.item>img, .carousel-inner>.item>a>img
								{
									/*height:400px;*/
									width:100%;
								}
							
							</style> 

<title>#JAO2016</title>
</head>

<body>
	<?php
	
		include 'nav.php';
		
	?>
    
    <?php
	if($_POST['id']!=''){
if(isset($_POST['submit'])){		
	$id = $_POST['id'];
	//echo $id;
	$user_id = $_POST['user_id'];
	$nom_agence = $_POST['nom_agence'];
	$event_id = $_POST['event_id'];
	
	//echo $id.'<br/>'.$user_id.'<br/>'.$nom_agence;
	
	$sql=$dbh->prepare("SELECT * FROM programme WHERE user_id='$id'");
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

				$sql=$dbh->prepare("SELECT * FROM users WHERE id='$id'");
				$sql->execute();
				$r=$sql->fetch();

				 echo'
				 <div class="styleContentBloc">
					<div class="contentBoxHead-footer" style="padding-top:10px; padding-bottom:10px; padding-left:220px; padding-right:220px; text-align: center;" align="center"><h3>'.$r['nom_agence'].'</h3></div>';
									
									
									$sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
									$sql->execute();
									$r=$sql->fetch();
									if($r['mobilite_reduite']=='oui'){
									  echo'
									  <center>
										<div class="box-legend"><img src="icones/mobilite.png" height="32" width="32" /></center>
										';
									  }else{}
									  
									  if($r['malentendant']=='oui'){
									  echo'
									  
										<center><img src="icones/malentendant.png" height="32" width="32" /></center>
									  ';
									  }else{}
									  
									  if($r['malvoyant']=='oui'){
									  echo'
									  
									   <center><img src="icones/malvoyant.png" height="32" width="32" /></center>';
									  
									  }else{}
									  
									  
									  $sql=$dbh->prepare("SELECT * FROM programme WHERE user_id='$id'");
									  $sql->execute();
									  $r=$sql->fetch();
	echo'
					<br/><br/>
				
				
                  <!--<div class="grid">-->';
				  
				  
				  $sql=$dbh->prepare("SELECT * FROM users WHERE nom_agence='$nom_agence'");
				  $sql->execute();
				  $r=$sql->fetch();
				  
				  if($r['lien_video_import']=='oui'){
				  echo'
				  <div>';
					
					echo'
					<center><p>'.$r['lien_video'].'</p></center>
					
					<!--<img src="medias/'.$r['image'].'" alt="" class="u-mbs">
                      <h4 class="contentBoxPod-largeTitle">Dialog Designer</h4>
                      <p class="txtAlternate">With Dialog Designer, create with just a few clicks your voice intelligence : Visual Programming, Natural Language processing, Huge linguistic database.</p> -->
                    
						</div>
					</div>
				</div>';
				
				
				}else if($r['lien_video_import']=='non'){}
					
					
					
			  
			 
			  
			  
			  
			  //VIDEO SLIDESHOW
			  
			 include_once('db_slide.php');
							
							$query_video  = "select * from liens_videos where user_id='$id' order by id desc limit 60";
							$res_video    = mysqli_query($connection,$query_video);
							$count  =   mysqli_num_rows($res_video);
							$slides_video='';
							$Indicators_video='';
							$counter_video=0;
							
								while($row_video=mysqli_fetch_array($res_video))
								{
							
									//$title = $row['title'];
									//$desc = $row['desc'];
									$video = $row_video['lien_video'];
									if($counter_video == 0)
									{
										$Indicators_video .='<li data-target="#slide" data-slide-to="'.$counter_video.'" class="active"></li>';
										$slides_video .= '<div class="item active">
										<center>'.$video.'</center>
									   <!-- <div class="carousel-caption">
										  <h3>'.$title.'</h3>
										  <p>'.$desc.'.</p>         
										</div>-->
									  </div>';
							
									}
									else
									{
										$Indicators_video .='<li data-target="#slide" data-slide-to="'.$counter_video.'"></li>';
										$slides_video .= '<div class="item">
										<center>'.$video.'</center>
									   <!-- <div class="carousel-caption">
										  <h3>'.$title.'</h3>
										  <p>'.$desc.'.</p>         
										</div>-->
									  </div>';
									}
									$counter_video++;
								}
			 
			if($count!=''){ 
			echo'  
			
			 <hr>
			 
			 
			<div id="video">
                <div class="contentBoxPod">
                  <!-- <h2 class="contentBoxPod-title"></h2>-->
                  <div class="grid">
					<div>';
                      
							
							echo'
							
							<div class="container" style="width: 730px;">
								  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="0">
									<!-- Indicators -->
									<ol class="carousel-indicators">';
									 echo $Indicators_video;
									 echo'
									</ol>
							
									<!-- Wrapper for slides -->
									<div class="carousel-inner">';
									echo $slides_video;
									
									echo' 
									</div>
							
									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									  <span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									  <span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								  </div>
								</div>
				';
					  
					  
					  
					  
					  
					  
					  
					  
					  
					echo'  
                    </div>
                  </div>
                </div>';
			}else{}
				
			  //IMAGES SLIDESHOW
			  
			  include_once('db_slide.php');
							
							$query  = "select * from images where user_id='$id' order by id desc limit 60";
							$res    = mysqli_query($connection,$query);
							$count  =   mysqli_num_rows($res);
							$slides='';
							$Indicators='';
							$counter=0;
							
								while($row=mysqli_fetch_array($res))
								{
							
									//$title = $row['title'];
									//$desc = $row['desc'];
									$image = $row['image'];
									if($counter == 0)
									{
										$Indicators .='<li data-target="#slide" data-slide-to="'.$counter.'" class="active"></li>';
										$slides .= '<div class="item active">
										<img src="medias/'.$image.'" alt="" />
									   <!-- <div class="carousel-caption">
										  <h3>'.$title.'</h3>
										  <p>'.$desc.'.</p>         
										</div>-->
									  </div>';
							
									}
									else
									{
										$Indicators .='<li data-target="#slide" data-slide-to="'.$counter.'"></li>';
										$slides .= '<div class="item">
										<img src="medias/'.$image.'" alt="" />
									   <!-- <div class="carousel-caption">
										  <h3>'.$title.'</h3>
										  <p>'.$desc.'.</p>         
										</div>-->
									  </div>';
									}
									$counter++;
								}
			  
			  
			  if($count!=''){
			  
			  echo'
			  <hr>
			  
              <div id="description">
                <div class="contentBoxPod">
                  <!-- <h2 class="contentBoxPod-title"></h2>-->
                  <div class="grid">
					<div>';
                      
					  
					  
					  
					  
					  
					  
					  
					  
							
							
							echo'
							
							
							
							<div class="container" style="width: 730px;">
								  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="0">
									<!-- Indicators -->
									<ol class="carousel-indicators">';
									 echo $Indicators;
									 echo'
									</ol>
							
									<!-- Wrapper for slides -->
									<div class="carousel-inner">';
									echo $slides;
									
									echo' 
									</div>
							
									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									  <span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									  <span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								  </div>
								</div>
				';
					  
					  
					  
					  
					  
					  
					  
					  
					  
					echo'  
                    </div>
                  </div>
                </div>';
				
				
				
				
				
				}else{}
				
				
				
				
				
				
				
				
				
				
				//BOUCLE EVENEMENT(S)
				echo'
				<hr>
				<div id="events">
                <div class="contentBoxPod">
                  <!-- <h2 class="contentBoxPod-title"></h2>-->
                  <div class="grid">
					<div>';
				
				$sql=$dbh->prepare("SELECT * FROM programme WHERE user_id='$id'");
				$sql->execute();
				
				echo'
				<center><span id="inscription"><img src="icones/time.png" width="32" alt=""></span></center>';
				
				
				while($r=$sql->fetch()){
				$check=$r['user_id'];
					echo'
					
					<table><tbody><tr>
					
						<td align="center">
						
							<p><h3>'.$r['nom_evenement'].'</h3></p><br/>
							<p>'.$r['thematique'].'</p><br/>
							<p><img src="icones/circular-clock.png" alt="horloge" height="32" width="32" /><br/></span> <span>'.$r['heure_debut'].' - '.$r['heure_fin'].'</p>';
							
							if($r['places_limitees']=='oui'){
							echo'
							<p><img src="icones/people-watching-a-movie.png" alt="nombres de places" height="32" width="32" style="padding-right:0.3em;" />'.$r['nb_places'].'</p> ';
							}
							
							if($r['inscription']=='oui'){
								echo'
								<p><u>Inscription obligatoire</u></p>
								<p>avant le '.$r['limite_inscription'].'</p>';						  
						    }
							
							if($r['evenement_complet']=='oui'){
								echo'
								<p>&Eacute;vénement complet</p> ';
							}else{}
							
						echo'	
						</td>
						</tr></tbody></table>
						';
						
				}
					
				
				echo'

				<table class="verticalLine"><tbody><tr>
					
						<td align="center" class="verticalLine">';
						if($check!=''){
						
						echo'
					<p>
						<form method="post" action="pagination.php">
							<button name="submit">
								<input type="hidden" name="user_id" value="'.$id.'"/>
								<input type="hidden" name="nom_agence" value="'.$nom_agence.'"/>
								<center>
									<!--<h4 style="color:red;">CONSULTER L\'INT&Eacute;GRALIT&Eacute; DU PROGRAMME DE '.strtoupper($nom_agence).'</h4>-->
									<img src="icones/bt/prog_complet.jpg" alt="" />
								</center>
							</button>
						</form>
					</p>';
					
						}else{echo'<h4 style="color:red;">Programme en cours d’élaboration</h4>';}
			
			
			echo'
			</td>
			</tr></tbody></table>';
				
				echo'
                    </div>
                  </div>
                </div>';
				
				
				
				
				
				
				
				
				
				
				
				
				
				echo'
				
				
				<!--<hr>-->
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine" >
						
						
						
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
						
						
						//echo '<td class="styleContentNone" width="15px"></td>';
						
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
							
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine">
						
						
						
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
				<!----><hr>
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine">
						
						
						';
							
							$sql=$dbh->prepare("SELECT * FROM programme WHERE user_id='$id'");
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
						
						<td class="styleContentNonePag"></td>
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
									  
									  
									  <p>
									  <center>
									  <span><img src="icones/gps.png" height="32" width="32" /></span><br/><br/>
									  
									  	'.$r['adresse'].'<br/>';
										
										if($r['adresse_2']!=''){
										echo'
									  	'.$r['adresse_2'].'<br/>';
										}else{}
										
										echo'
										'.$r['cp'].', '.$r['ville'].'
									  </center>  
									  </p>
									  
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
				<hr>
				  
				  <div>
					<div class="contentBoxPodStyleContentGoogleMap">
					  <div class="grid">
						
						<div id="googleMap" style="width:880px; height:380px;"></div>
						
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