<?php

	require_once 'config.php';

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JAO</title>

<!-- CUSTOM JS -->
 <script type="text/javascript" src="js/valid_form_contact.js" language="javascript" charset="utf-8"></script>
</head>

<body>
	<?php
		session_start();
		include 'nav.php';
	?>
    
    <?php
		 if($_SESSION['user']==''){
			require_once'401.php';
		 }else{
			 include("config.php");
			 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
			 $sql->execute(array($_SESSION['user']));
			 while($r=$sql->fetch()){
				if($r['contact_rempli']=='non' AND $r['contact_secondaire']=='non'){
					echo '
					
					<section class="gestion">  
					';
					
					include 'menu.php';
					
					echo'
								 <div class="container">
									<div class="row">
							
										<div class="col-lg-12">
											<h1 class="page-header">Modifier vos contacts</h1>
										</div>
										
										<div class="col-lg-12">
											<h3>Vous n\'avez renseigné aucuns contacts : <a href="ajout_contact.php">ajouter des contacts</a></h3>
										</div>
										
									</div>
								</div>		
					</section>
					
					';
					}else{	 
				 
			 if($r['id']==$_SESSION['user']){ 
			 	$sql=$dbh->prepare("SELECT * FROM contact WHERE user_id=?");
			 	$sql->execute(array($_SESSION['user']));			
				$r=$sql->fetch();
						
					if($r['user_id']==$_SESSION['user']){

							
						$telephone_1 = strtr($r['telephone_contact'], '.', ' ');
						$portable_1 = strtr($r['portable_contact'], '.', ' ');
						$telephone_2 = strtr($r['telephone_contact_2'], '.', ' ');
						$portable_2 = strtr($r['portable_contact_2'], '.', ' ');						
						
						echo'
						
							<section>  
							
								';
					
					
					echo'
					<div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
						<div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
							
								 <div class="container container-color">
									<div class="row container-margin">
							
										<div class="col-lg-12">
											<h1 class="page-header">Modifier vos contacts</h1>
										</div>
										
								<form method="post" action="modification_contact_check.php" name="contact" onsubmit="return validateForm()">
										<h3>Responsable de l\'organisation de la Journée Agences Ouvertes</h4>
								
								
									<br/><br/>
									
									<h4>Contact principal * : </h4>
											  <br/>
											  <label>Nom *</label>
											  <br/><br/>
											  <input type="text" name="nom_contact" required size="30" value="'.$r['nom_contact'].'"/>
											  
											  <br/>
											  <br/>
											  
											  <label>Prénom *</label>
											  <br/><br/>
											  <input type="text" name="prenom_contact" required="required" size="30" value="'.$r['prenom_contact'].'"/>
											  
											  <br/>
											  <br/>
											  
											  <label>Fonction *</label>
											  <br/><br/>
											  <input type="text" name="fonction_contact" required="required" size="30" value="'.$r['fonction_contact'].'"/>
											  
											  <br/>
											  <br/>
											  
											  <label>Téléphone *</label>
											  <br/><br/>
											  <input type="text" name="telephone_contact" required="required" size="30" maxlength="10" value="'.$telephone_1.'"/>
											  
											  <br/>
											  <br/>
											  
											  <label>Portable</label>
											  <br/><br/>
											  
											  <input type="text" name="portable_contact" size="30" maxlength="10" value="'.$portable_1.'"/>
											  
											  <br/>
											  <br/>
											  
											  <label>Email *</label>
											  <br/><br/>
											  <input type="email" name="email_contact" required="required" size="30" value="'.$r['email_contact'].'"/>
											  
											  <br/>
											  <br/>
											  
											  <label>Twitter </label>
											  <br/><br/>
											  <input type="text" name="twitter_contact" size="30" value="'.$r['twitter_contact'].'"/>
											  
											  <br/>
											  <br/>
											  <br/>
											  <br/>';
											  
							 if($r['nom_contact_2']!='' OR $r['prenom_contact_2']!=''){
								 echo '	
										<h4>Second contact :</h4>
												  <br/>
												  <label>Nom </label>
												  <br/><br/>
												  <input type="text" name="nom_contact_2" size="30" value="'.$r['nom_contact_2'].'"/>
												  
												  <br/>
												  <br/>
												  
												  <label>Prénom </label>
												  <br/><br/>
												  <input type="text" name="prenom_contact_2" size="30" value="'.$r['prenom_contact_2'].'"/>
												  
												  <br/>
												  <br/>
												  
												  <label>Fonction </label>
												  <br/><br/>
												  <input type="text" name="fonction_contact_2" size="30" value="'.$r['fonction_contact_2'].'"/>
												  
												  <br/>
												  <br/>
												  
												  <label>Téléphone </label>
												  <br/><br/>
												  <input type="text" name="telephone_contact_2" size="30" maxlength="10" value="'.$telephone_2.'"/>
												  
												  <br/>
												  <br/>
												  
												  <label>Portable </label>
												  <br/><br/>
												  
												  <input type="text" name="portable_contact_2" size="30" maxlength="10" value="'.$portable_2.'"/>
												  
												  <br/>
												  <br/>
												  
												  <label>Email </label>
												  <br/><br/>
												  <input type="email" name="email_contact_2" size="30" value="'.$r['email_contact_2'].'"/>
												  
												  
												  <br/>
												  <br/>
												  <br/>';
							
											
					}else{}
					
					echo'
												   <button name="submit" class="none">Mettre à jour les données</button>
												  
												</form>
											</div>
										</div>
										
										<br/> <br/> <br/>
										<br/> <br/> <br/>
										<br/> <br/> <br/>
								
							</section>
					
					';
					}
			  }			
		 }
	}
}
	?>
    
    <!-- Footer -->
    <?php $footer = include("footer.php"); ?>
</body>
</html>