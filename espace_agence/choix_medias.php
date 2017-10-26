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

    if (isset($_GET['image_id'])) {
      $sql=$dbh->prepare("DELETE FROM images WHERE id=? AND user_id=?");
      $sql->execute(array($_GET['image_id'], $_SESSION['user']));
    }
    if (isset($_GET['video_id'])) {
      $sql=$dbh->prepare("DELETE FROM liens_videos WHERE id=? AND user_id=?");
      $sql->execute(array($_GET['video_id'], $_SESSION['user']));
    }
    if (isset($_GET['key_visual'])) {
      $sql=$dbh->prepare("UPDATE `users` SET `image`='', `img_import`='non' WHERE `id`= ?");
      $sql->execute(array($_SESSION['user']));
    }
    if (isset($_GET['video'])) {
      $sql=$dbh->prepare("UPDATE `users` SET `lien_video`='', `lien_video_import`='non' WHERE `id`= ?");
      $sql->execute(array($_SESSION['user']));
    }


		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 while($r=$sql->fetch()){

       $sql_image=$dbh->prepare("SELECT * FROM images WHERE user_id=?");
       $sql_image->execute(array($r['id']));

        $sql_video=$dbh->prepare("SELECT * FROM liens_videos WHERE user_id=?");
        $sql_video->execute(array($r['id']));

		 	echo'
				<section>
				';


				echo'
         <div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
                        <div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
					<div class="container  container-color" style="height:100%;">

						<div class="row container-margin" style="height:100%;">

							<div class="col-lg-12">
								<h1 class="page-header">Votre communication #JAO2017</h1>
							</div>

							<div class="col-lg-12">
								<p>
									Nous vous recommandons de créer vos propres outils de communication.<br><br>

Vos éléments (key visual, vidéo(s), image(s), etc.) serviront d’illustration pour votre programme sur le site #JAO2017. <br>
De plus, nous les partagerons sur nos réseaux sociaux.<br><br>

Par défaut, nous intégrerons sur votre fiche programme le key visual JAO 2017.
								</p>

								<hr/>
							</div>

							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="import_img.php">
									<img class=""  src="img/bouton_MONVISUEL.png" alt="Mon visuel" >
								</a>';
                if($r['img_import']=='oui'){
                echo '<img src="medias/'.$r['image'].'" class="col-lg-6" />
                <a href="?key_visual">X</a><br><br>';
              }

              echo '
							</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="import_video.php">
									<img class=""  src="img/bouton_MAVIDEO.png" alt="Ma vidéo">
								</a>';
                if ($r['lien_video_import']=='oui') {
                  echo $r['lien_video'].'
                  <a href="?video">X</a><br><br>';
                }
                echo '
                <div></div>
							</div>
							<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="import_medias.php">
									<img class="img-responsive" src="img/bouton_AUTRE.png" alt="Autre">
								</a>';
                while ($image=$sql_image->fetch()) {
                    echo '<img src="medias/'.$image['image'].'" class="col-lg-6"><a href="?image_id='.$image['id'].'">X</a><br><br>';

                }
                while ($video=$sql_video->fetch()) {
                    echo $video['lien_video'];
                    echo '<a href="?video_id='.$video['id'].'">X</a><br><br>';

                }

						echo	'</div>

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
