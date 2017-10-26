<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>#JAO2017</title>
</head>

<body>
<?php
session_start();
include("config.php");

if(isset($_POST['submit'])){
		 include("config.php");
		 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
		 $sql->execute(array($_SESSION['user']));
		 $r=$sql->fetch();
		 $user_id = $r['id'];
		 $nom_agence=$r['nom_agence'];
		 $lien_video=$_POST['lien_video'];
		 if($r['id']==$_SESSION['user']){


			if($_FILES['file']!=''){

			// Importation //

					define ("filesplace","./medias");

						if (is_uploaded_file($_FILES['file']['tmp_name'])) {

						// on vérifie maintenant l'extension
						$type_file = $_FILES['file']['type'];

						if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png') && !strstr($type_file, 'gif') )
						{
							exit("Le fichier n'est pas valide.");
						}

						$name = $_FILES['file']['name'];
						$result = move_uploaded_file($_FILES['file']['tmp_name'], filesplace."/$name");
						if ($result == 1) {

						//TABLE IMAGES
						$sql=$dbh->prepare("INSERT INTO `images`(`id`, `user_id`, `nom_agence`, `image`) VALUES (NULL, ?, ?, ?);");
						$sql->execute(array($user_id, $nom_agence, $name));

						echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Succès')
										window.location.href='choix_medias.php';
									   	</SCRIPT>"));

						}
				}else if($_POST['lien_video']=='' && $_FILES['file']==''){echo 'Erreur : aucun média à sauvegarder';}

				if($_POST['lien_video']!=''){
					$link = $lien_video;
					$media_url = "";

					//DAILYMOTION
					preg_match('#<object[^>]+>.+?http://www.dailymotion.com/swf/video/([A-Za-z0-9]+).+?</object>#s', $link, $matches);
					if(!isset($matches[1])) {
							preg_match('#http://www.dailymotion.com/video/([A-Za-z0-9]+)#s', $link, $matches);
							if(!isset($matches[1])) {
									preg_match('#http://www.dailymotion.com/embed/video/([A-Za-z0-9]+)#s', $link, $matches);
									if(strlen($matches[1])){ $media_url = 'dailymotion:_:'.$matches[1]; }
							}elseif(strlen($matches[1])){
									$media_url = 'dailymotion:_:'.$matches[1];
							}
					}elseif(strlen($matches[1])){
							if(strlen($matches[1])){ $media_url = 'dailymotion:_:'.$matches[1]; }
					}

					//YOUTUBE
					if(preg_match('#(?<=(?:v|i)=)[a-zA-Z0-9-]+(?=&)|(?<=(?:v|i)\/)[^&\n]+|(?<=embed\/)[^"&\n]+|(?<=(?:v|i)=)[^&\n]+|(?<=youtu.be\/)[^&\n]+#', $link, $videoid)){
							if(strlen($videoid[0])) { $media_url = 'youtube:_:'.$videoid[0]; }
					}

					//VIMEO
					if(preg_match('#(https?://)?(www.)?(player.)?vimeo.com/([a-z]*/)*([0-9]{6,11})[?]?.*#', $link, $videoid)){
							if(strlen($videoid[5])) { $media_url = 'vimeo:_:'.$videoid[5]; }
					}


					if(!strlen($media_url)){
						// INVALIDE
					}

					$exp = explode(':_:', $media_url);
					$html = "";
					switch ($exp[0]) {
						case 'youtube':
							$html = '<iframe width="590" height="390" src="//www.youtube.com/embed/'.$exp[1].'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>';
							break;
						case 'vimeo':
							$html = '<iframe width="590" height="390" src="http://player.vimeo.com/video/'.$exp[1].'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
							break;
						case 'dailymotion':
							$html = '<iframe width="590" height="390" src="http://www.dailymotion.com/embed/video/'.$exp[1].'" frameborder="0" allowfullscreen></iframe>';
							break;

						default:
							# code...
							break;
					}
					echo "INSERT LIENS VIDEO = ".$media_url. " for ".$user_id;
					//TABLE LIENS_VIDEOS
					try {
					$sql=$dbh->prepare("INSERT INTO `liens_videos` (`id`, `user_id`, `nom_agence`, `lien_video`) VALUES (NULL, ?, ?, ?);");
					$sql->execute(array($user_id, $nom_agence, $html));
				}
				catch (Exception $e) {
										echo $e;
									}

					echo "DVdvd";

					echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
									window.alert('Succès')
									window.location.href='choix_medias.php';
									   </SCRIPT>"));


				}else if($_POST['lien_video']=='' && $_FILES['file']==''){echo 'Erreur : aucun média à sauvegarder';}
			}
		}
	}
?>
</body>
</html>
