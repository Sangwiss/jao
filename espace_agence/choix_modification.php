<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JAO2017</title>

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
		 	echo' 
				<section style="height:100%;">
				';
				
			
				
				echo'
				<div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
						<div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>			
					<div class="container container-color" style="height:100%;">
					
						<div class="row" style="height:100%;">
				
							<div class="col-lg-12">
								<h1 class="page-header">Mes informations</h1>
							</div>	

							
				
							
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="modification_contact.php">
									<img class="img-responsive" src="img/bouton_RESPONSABLEJAO.png" alt="Modifier mon responsable #JAO2017">
								</a>
							</div>

							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="modification_info_perso.php">
									<img class="img-responsive" src="img/bouton_FICHEAGENCE.png" alt="Modifier ma fiche agence">
								</a>
							</div>
							
							<!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#">
									<img class="img-responsive" src="http://placehold.it/400x300" alt="">
								</a>
							</div>-->
						</div>
					</div>
				</section>';
		
		 	}
		}
?>

<!-- Footer -->

<?php $footer = include("footer.php"); ?>

</body>
</html>