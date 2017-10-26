<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>#JAO</title>
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
		 $user_id=$r['id'];
		 $lien_video=$_POST['lien_video'];
		 echo $lien_video;
		 if($r['id']==$_SESSION['user']){ 

			 if($r['lien_video_import']=='non'){
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
										
								
					//TABLE PROGRAMME
					$sql=$dbh->prepare("UPDATE `users` SET `lien_video`=?, `lien_video_import`=? WHERE `id`='$user_id';");	
					$sql->execute(array($html, $_POST['lien_video_import']));

					echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Succès !')
										window.location.href='choix_medias.php';
										</SCRIPT>"));



									
									
						}else {echo "<p>Erreur : champ vide</p>";}
		 	   		 }else if($r['lien_video_import']=='oui')

		 	   		 		{
					 
					 
								echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Vous ne pouvez sauvegarder qu&#039;une seule vid&eacute;o teaser')
									  window.location.href='choix_medias.php';
									   </SCRIPT>"));
							}
			}
		}
?>	
</body>
</html>