<?php
include('db.php');
//include('config.php');

 if(isset($_REQUEST['actionfunction']) && $_REQUEST['actionfunction']!=''){
$actionfunction = $_REQUEST['actionfunction'];
  
   call_user_func($actionfunction,$_REQUEST,$con,$limit,$adjacent);
}
function showData($data,$con,$limit,$adjacent){
  $page = $data['page'];
   if($page==1){
   $start = 0;  
  }
  else{
  $start = ($page-1)*$limit;
  }
  
  /**/
  $sql = "select * from programme";
  $rows  = $con->query($sql);
  $rows  = $rows->num_rows;
  
  $sql = "select * from programme ORDER BY nom_agence ASC limit $start,$limit";
  
  
  $data = $con->query($sql);
  if($data->num_rows>0){
   while( $row = $data->fetch_array(MYSQLI_ASSOC) ){ 
      //$str="<tr><td>".$row['id']."</td><td>".$row['type_evenement']."</td><td>".$row['nom_agence']."</td></tr>";
		
		/*$row['user_id'];
		echo $row['nom_agence'].'<br/>';	
		
		 
 		 echo $row['user_id'].'<br/>';
		 
		 
		 
		$sql_2 = "select * from users WHERE id='".$row['user_id']."'";
		$data_2 = $con->query($sql_2);
		
		if($data_2->num_rows>0){
		$row_2 = $data_2->fetch_array(MYSQLI_ASSOC);
			
		 echo $row_2['id'].'<br/>';
		 echo $row_2['username'];
		 
		}
		
		echo utf8_encode ( '
		<hr style="border-top:0px!important;">
			  
              <div id="description">
                <div class="contentBoxPod">
                  <!--<h2 class="contentBoxPod-title">Thématique</h2>-->
                  <div class="grid">
					<div>
                      <p class="txtLead">'.$row['thematique'].'</p>
                    </div>
                  </div>
                </div>
				
				
		<hr style="border-top:0px!important;">
		 ');
		 
		 
		 $sql_2 = "select * from users WHERE id='".$row['user_id']."'";
		 $data_2 = $con->query($sql_2);
		 if($data_2->num_rows>0){
			$row_2 = $data_2->fetch_array(MYSQLI_ASSOC);
			echo $row_2['lat'];
			
		 }*/
		 
		$agence = $row['nom_agence'];
		$event = $row['event_id'];
		 		 
		$sql_2 = "select * from users WHERE id='".$row['user_id']."'";
		$data_2 = $con->query($sql_2);
		if($data_2->num_rows>0){
			$row_2 = $data_2->fetch_array(MYSQLI_ASSOC);
			
			
			$sql_3 = "select * from intervenants WHERE event_id='".$event."'";
		$data_3 = $con->query($sql_3);
		if($data_3->num_rows>0){
			$row_3 = $data_3->fetch_array(MYSQLI_ASSOC);
			
		 
		 echo '
	
      <main id="app-main" role="main">
        <section class="content">';
		
          echo'
          </div>
          <div class="wrapper">
            <div class="contentBox">
              <!--<div class="contentBoxHead">-->';
			  if($row_2['img_import']=='oui'){
			  echo utf8_encode ( '
				<!--<div style="background-image: url(medias/'.$row_2['image'].');" class="contentBoxHead-head">-->
				<img src="medias/'.$row_2['image'].'" alt="'.$row_2['image'].'" class="bg" />
				
				' );
			  }else if($row_2['img_import']=='non')
			  { echo'<div>';	}
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
                  <div class="contentBoxHead-middle-no-image">
                    <div class="contentBoxHead-middle-thumb-no-image">
                      <div><img src="uploads/'.$row_2['logo_agence'].'" alt="'.$row_2['logo_agence'].'" width="120" height="139" ></div>
                    </div>';
				  }
			  echo'		
                     <!--<div class="contentBoxHead-middle-text">
                     <h1 class="contentBoxHead-middle-title">'.$row_2['nom_agence'].'</h1>
                      <p class="txtLead">'.$row_2['nom_evenement'].'</p>
                    </div>
                  </div>-->
                </div>';
		
				

				echo utf8_encode ( '
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
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				echo'
				<hr style="border-top:0px!important;">
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine" bgcolor="#fff">
						
						
						
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
										'.$row_3['nom_1'].' '.$row_3['prenom_1'].' <br/> '.$row_3['fonction_1'].' <br/> '.$row_3['societe_1'].'
									</td>
								
							
								</tr>
							
							
								</tbody></table>
								 
								 
							
							</div>
						</td>
						');	
						
						}
						
						
						echo '<td class="styleContentNone"></td>';
						
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
												'.$row_3['nom_2'].' '.$row_3['prenom_2'].' <br/> '.$row_3['fonction_2'].' <br/> '.$row_3['societe_2'].'
											</td>
									  

									 	 </tr>
										 
									 </tbody></table>');
									  
						}else{}
						
						echo'
							</div>
						</td>	
							
					  </tr></tbody></table>
					  
					  ';
				
							
				
				
				
				
				
				
				echo'
							
				  	
						<table class="verticalLine"><tbody><tr class="verticalLine" bgcolor="#fff">
						
						
						
						';
						
							
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
										'.$row_3['nom_3'].' '.$row_3['prenom_3'].' <br/> '.$row_3['fonction_3'].' <br/> '.$row_3['societe_3'].'
									</td>
								
							
								</tr>
							
							
								</tbody></table>
								 
								 
							
							</div>
						</td>
						');	
						
						}
						
						
						echo '<td class="styleContentNone"></td>';
						
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
												'.$row_3['nom_4'].' '.$row_3['prenom_4'].' <br/> '.$row_3['fonction_4'].' <br/> '.$row_3['societe_4'].'
											</td>
									  

									 	 </tr>
										 
									 </tbody></table>');
									  
						}else{}
						
						echo'
							</div>
						</td>	
							
					  </tr></tbody></table>
					  
					  ';
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				echo'
				
				<hr style="border-top:0px!important;">
				  	
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
									  
									  
									  echo'
									  <tr>
									  ';
							
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
				
				echo'			
				<!--<hr style="border-top:0px!important;">
				  
				  <div>
					<div class="contentBoxPodStyleContentGoogleMap">
					  <div class="grid">
						
						<div id="map"></div>
						
					  </div>
					</div>-->
				
				
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
	
	</section>
	
	
	
	';
		}//row3
		 }//row_2
		 
		 
		 
		 
		?>    
		 			 <script type="text/javascript">
						var map;
						$(document).ready(function(){
						  map = new GMaps({
							el: '#map',
							lat: <?php echo $lat ?> ,
							lng: <?php echo $lng ?> ,
							zoom: 16
						  });
						  map.addMarker({
							lat: <?php echo $lat ?>,
							lng: <?php echo $lng ?>,
							title: '',
							infoWindow: {
							  content: '<?php echo $agence ?>'
							},
							mouseover: function(e){
							  if(console.log)
								console.log(e);
							}
						  });
						});
					 </script>
		<?php	 
		 
   }
   }else{
    $str .= "No Data Available";
   }   
echo utf8_decode($str); 
pagination($limit,$adjacent,$rows,$page);  
}
function pagination($limit,$adjacents,$rows,$page){	
	$pagination='';
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$prev_='';
	$first='';
	$lastpage = ceil($rows/$limit);	
	$next_='';
	$last='';
	if($lastpage > 1)
	{	
		
		//previous button
		if ($page > 1) 
			$prev_.= "<a class='page-numbers' href=\"?page=$prev\">previous</a>";
		else{
			//$pagination.= "<span class=\"disabled\">previous</span>";	
			}
		
		//pages	
		if ($lastpage < 5 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
		$first='';
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a class='page-numbers' href=\"?page=$counter\">$counter</a>";					
			}
			$last='';
		}
		elseif($lastpage > 3 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			$first='';
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a class='page-numbers' href=\"?page=$counter\">$counter</a>";					
				}
			$last.= "<a class='page-numbers' href=\"?page=$lastpage\">Last</a>";			
			}
			
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
		       $first.= "<a class='page-numbers' href=\"?page=1\">First</a>";	
			for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a class='page-numbers' href=\"?page=$counter\">$counter</a>";					
				}
				$last.= "<a class='page-numbers' href=\"?page=$lastpage\">Last</a>";			
			}
			//close to end; only hide early pages
			else
			{
			    $first.= "<a class='page-numbers' href=\"?page=1\">First</a>";	
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a class='page-numbers' href=\"?page=$counter\">$counter</a>";					
				}
				$last='';
			}
            
			}
		if ($page < $counter - 1) 
			$next_.= "<a class='page-numbers' href=\"?page=$next\">next</a>";
		else{
			//$pagination.= "<span class=\"disabled\">next</span>";
			}
		$pagination = "<div class=\"pagination\" onclick=\"load_js();\">".$first.$prev_.$pagination.$next_.$last;
		//next button
		
		$pagination.= "</div>\n";		
	}

	echo '<div>'.$pagination.'</div>';  
}
?>