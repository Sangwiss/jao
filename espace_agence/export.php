<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JAO2016</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
	session_start();
	if($_SESSION['user']==''){
		 include_once'401.php';
	}
	else{
		include 'nav.php';
		
		 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 while($r=$sql->fetch()){
			if($r['admin']=='oui'){  
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
								$array = array("Utilisateur", "Email", "Nom de l'agence", "Adresse", "Complément d'adresse", "Ville", "Zone", "Code postal", "Téléphone", "Site internet", "Facebook", "Twitter", "Mobilité réduite", "Malentendant", "Malvoyant");
								$array = array_map("utf8_decode", $array);
								
								
								// output the column headings
								fputcsv($output, $array);
								
								
								$sql=$dbh->prepare("SELECT `username`, `email`, `nom_agence`, `adresse`, `adresse_2`, `ville`, `zone`, `cp`, `telephone`, `site_web`, `facebook`, `twitter`, `mobilite_reduite`, `malentendant`, `malvoyant` FROM `users` WHERE admin='non'");
								
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
												</section>';
								<?php	
											}
										}
									}
								?>

<!-- Footer -->
<?php $footer = include("footer.php"); ?>

</body>
</html>