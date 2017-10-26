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
		 
		 echo' 
				<section class="gestion">
					<div class="container" style="height:100%;">
					
						<div class="row" style="height:100%;">
				
							<div class="col-lg-12">
								<h1 class="page-header">Liste des agences</h1>
							</div>';
		 
							 echo '<table border="1px" bordercolor="#C4C4C4" cellspacing="0" cellpadding="10px" width="1500px" align="center">';
									echo '<tbody>';
		 								echo '<tr align="center"> <td> <strong> Nom de l\'agence </strong> </td> <td> <strong> Nom d\'utilisateur </strong> </td> <td> <strong> Email </strong> </td> <td> <strong> Adresse </strong> </td> <td> <strong> Complément adresse </strong> </td> <td> <strong> Ville </strong> </td> <td> <strong> Zone </strong> </td> <td> <strong> Code postal </strong> </td> <td> <strong> Site internet </strong> </td> </tr>';	
												 while($r=$sql->fetch()){
													if($r['admin']=='oui'){  
														$sql=$dbh->prepare("SELECT * FROM users WHERE admin='non'");
		 												$sql->execute(array($_SESSION['user']));
														while($r=$sql->fetch()){
														echo '<td width="400px" align="center">'.$r['nom_agence'].'</td> <td width="400px"  align="center">'.$r['username'].'</td> </td> <td width="400px"  align="center">'.$r['email'].'</td><td width="400px"  align="center">'.$r['adresse'].'</td><td width="400px"  align="center">'.$r['adresse_2'].'</td><td width="400px"  align="center">'.$r['ville'].'</td><td width="400px"  align="center">'.$r['zone'].'</td><td width="400px"  align="center">'.$r['cp'].'</td><td width="400px"  align="center">'.$r['site_web'].'</td>';
														echo'</tr>';			
														}
													}
												echo '</tbody>';
											 echo '</table>';		
										 echo '</div>';
									echo '</div>';
								echo '</section>';
																				
		}
	}
?>

<!-- Footer -->
<?php $footer = include("footer.php"); ?>

</body>
</html>