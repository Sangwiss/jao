<?php
	include 'config.php';
?>

<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>JAO2016</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet"/>
    <link href="css/font-awesome.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php

	include('nav.php');

?>


<?php
session_start();
if($_SESSION['user']==''){
		 include_once'401.php';
}else{
		include("config.php");
		$sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		$sql->execute(array($_SESSION['user']));
		$r=$sql->fetch();
		if($r['id']==$_SESSION['user']){
			if($r['lien_video_import']=='oui'){
				echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Vous ne pouvez sauvegarder qu&#039;une seule vid&eacute;o teaser')
									  window.location.href='choix_medias.php';
									   </SCRIPT>"));
			}else{
				echo'
					<section class="gestion">
					';


					 echo' <div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
                        <div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
						<div class="container correct-media  container-color">
							<div class="row container-margin">
								<div class="col-lg-12">
									<h2>video teaser</h2>
									<hr/>
								</div>

								<form method="post" action="import_video_check.php">

									<p>Ajouter un lien de video <br/> Youtube / Vimeo / daylimotion</p>

									<input type="text" name="lien_video" size="40" />

									<br/><br/>

									<input type="hidden" name="lien_video_import" value="oui" />
									<button name="submit" class="none">Sauvegarder le lien</button>

									<br/><br/><br/><br/><br/><br/>

								</form>
							</div>
						</div>
					</section>';
			}
		}
	}
?>

<!-- Footer -->
<?php $footer = include("footer.php"); ?>

</body>
</html>
