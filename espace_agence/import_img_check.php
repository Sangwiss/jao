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
						if ($result) {
							//TABLE PROGRAMME
						$sql=$dbh->prepare("UPDATE `users` SET `image`=?, `img_import`=? WHERE `id`='$user_id';");
						$sql->execute(array($name, $_POST['img_import']));


						echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Succès !')
										window.location.href='choix_medias.php';
										</SCRIPT>"));



						}
				}else {echo utf8_decode(("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Erreur lors de l\'importation du fichier')
										window.location.href='choix_medias.php';
										</SCRIPT>"));}
			}
		}
	}
?>
</body>
</html>
