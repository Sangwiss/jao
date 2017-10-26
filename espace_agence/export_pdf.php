<?php
	
		 	echo' 
				<section style="height:100%;">
					<div class="container" style="height:100%;">
					
						<div class="row" style="height:100%;">
				
							<div class="col-lg-12">
								<h1 class="page-header">Modifications</h1>
							</div>';	
													
							if (!isset($_POST['submit'])) {
?>
								
									  <h3>Exporter en CSV :</h3>
									
									  <form action="<?php print $PHP_SELF?>" enctype="multipart/form-data" method="post">  
										  <label>Nom du fichier<br/><input type="text" name="title" /></label><br/><br/>
										  <button type="submit" name="submit" value="Exporter" class="none">Générer les données</button><br/><br/>
									  </form>
								 
								
								<!-- Ecriture des fichiers PHP -->
								<?php } else {
								$title = $_POST['title']."_".date("Y-m-d-H-i-s");
								
								// create a file pointer connected to the output stream
								$output = fopen('./data/'.$title.'.csv', 'w');
								$array = array();
								$array = array_map("utf8_decode", $array);
								
								
								// output the column headings
								fputcsv($output, $array);
								
								
								$sql=$dbh->prepare("SELECT `logo_agence`, `adresse`, `nom_evenement`, `type_evenement`, `heure_debut`, `heure_fin`, `inscription`, `mobilite_reduite`, `malentendant`, `malvoyant` FROM `programme` WHERE admin='non'");
								
								// boucle d'injection des lignes de la table informations
								$sql->execute();
								 while($r=$sql->fetch(PDO::FETCH_ASSOC)){
									 $encoding = array_map("utf8_decode", $r);
									 fputcsv($output, $encoding);
								 } 
								 
								 echo '<form method="post" action="./data/'.$title.'.csv">';
								 echo '<button type="submit" name="csv" class="none">Télécharger le fichier CSV</button>';
								 echo '</form>';
								 
								 if(isset($_POST['csv'])){
									 echo 'sweet dreams';
								 }
								 
								 fclose($fp);
								 
								}
								?>
										
														</div>
													</div>
												</section>
