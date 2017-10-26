<?php

	//require_once 'config.php';

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>#JAO2016</title>

<link href="css/thumbnail-gallery.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet" />

<style>

tr:nth-child(even) { background: #DDDDDD; z-index: -1; }

</style>


</head>

<body>

<?php
$nav = include('nav.php');
?>

<header><center><img src="img/bandeau_titre.jpg" alt="hd" width="70%"/></center></header>

<br/><br/>

<div><center><p><h4><a href="pdf/Mon_Programme_JAO2016_En_Bref.pdf" target="_blank">TELECHARGER LA VERSION PDF DU PROGRAMME</a></h4></p></center></div>

<div><center><p><h4>Tout pour réussir votre ‪#‎JAO2016‬ en 1 appli ici : <a href="http://bit.ly/AppliJAO2016" target="_blank">iOS</a> / <a href="https://play.google.com/store/apps/details?id=com.odysys.aacc" target="_blank">Androïd</a>
</a></h4></p></center></div>

<br/><br/>

<?php


include('db_prog.php');

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Paris/RP' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>PARIS/RP</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

?>

<br/><br/><br/><br/><br/><br/>

<?php

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Bordeaux' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>BORDEAUX</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

?>


<br/><br/><br/><br/><br/><br/>

<?php

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Lille' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>LILLE</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

?>


<br/><br/><br/><br/><br/><br/>

<?php

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Lyon' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>LYON</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

?>

<br/><br/><br/><br/><br/><br/>

<?php

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Montpellier' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>MONTPELLIER</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

?>

<br/><br/><br/><br/><br/><br/>

<?php

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Nantes' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>NANTES</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

?>

<br/><br/><br/><br/><br/><br/>

<?php

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Strasbourg' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>STRASBOURG</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

?>

<br/><br/><br/><br/><br/><br/>

<?php

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Toulouse' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>TOULOUSE</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

?>


<br/><br/><br/><br/><br/><br/>

<?php

// Fetch data from DB
$query = "SELECT id FROM programme WHERE user_id='$user_id' ";
$query = mysql_query($query);
$count = mysql_num_rows($query);

$query = "SELECT * FROM programme WHERE zone='Outre-Mer' ORDER BY nom_agence, heure_debut ASC";	
$query = mysql_query($query);

echo'
<table align="center" bgcolor="#000" width="1500"><tr><td align="center"><span style="color:#ffffff;"><h3>OUTRE-MER</h3></span></td></tr></table>
<table bgcolor="#fff" cellspacing="0" cellpadding="10px" width="1500px" align="center">
    <tbody>
			<tr> <td style=" border-left:solid 1px;" align="right"><strong>Agence</strong></td> <td style="border-right:solid 1px;" align="center"></td> <td align="center" style="border-right:solid 1px;"><strong>&Eacute;vénement</strong></td> <td align="center" style="border-right:solid 1px;" align="center"><strong>Type</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Horaire</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Sur inscription</strong></td> <td align="center" style="border-right:solid 1px;"><strong>Accès Handicap</strong></td> </tr>';
		 while($row = mysql_fetch_array($query)) {
			 $user_id = $row['user_id'];
			 
			 $query_2 = "SELECT * FROM programme WHERE user_id='$user_id'";	
			 $query_2 = mysql_query($query_2);
			 $row_2 = mysql_fetch_array($query_2);
			  
			 $query_3 = "SELECT * FROM users WHERE id='$user_id'";	
			 $query_3 = mysql_query($query_3);
			 $row_3 = mysql_fetch_array($query_3);
	
			 
			 
			 
			 
			echo'
			
                <tr>
                
                    <td style="border-left:solid 1px; padding:10px 10px 10px 10px;" width="100px" align="center">';
							
							echo '<img src="uploads/'.$row_2['logo_agence'].'" width="100" alt="" ><br/>';
							
							
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="200px">';
						
						echo utf8_encode( $row_3['adresse'] ).'<br/>';
						echo utf8_encode( $row_3['cp'].', '.$row_3['ville'] );
					
					echo'	
					</td>
					
					
					  <td style="border-right:solid 1px; padding-right:10px; padding-left:10px;" width="350px">';
							
							echo utf8_encode( $row['nom_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo utf8_encode(  $row['type_evenement'] );
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
							echo $row['heure_debut'].' - '.$row['heure_fin'];
						
					echo'	
                    </td>
					
					
					<td style="border-right:solid 1px;" width="70px" align="center">';
							
							echo $row['inscription'];
						
					echo'	
                    </td>
					
					<td style="border-right:solid 1px;" width="100px" align="center">';
							
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
									  
									   <img src="icones/malvoyant.png" height="32" width="32" /></div>
									  ';
									  
									  }else{}
									  
							if($row_2['mobilite_reduite']=='non' && $row_2['malentendant']=='non' && $row_2['malvoyant']=='non'){
								echo'-';
							}
						
					echo'	
                    </td>
                
                </tr>';
		}
				echo'
    </tbody>
</table>
<table align="center" width="1500"><tr><td style="border-top:solid 1px;" align="center"></td></tr></table>';

echo'<br/><br/><br/><br/><br/><br/>';

include('footer.php');

?>



</body>
</html>