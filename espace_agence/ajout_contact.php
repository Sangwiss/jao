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

    <title>JAO2017</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    
    <!-- Custom JS -->
    <script type="text/javascript" src="js/valid_form_contact.js" language="javascript" charset="utf-8"></script>

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
	 
	  echo '
		 <section>
		 ';
		 
		 include 'menu.php';
	 
	 if($r['contact_rempli']=='oui' AND $r['contact_secondaire']=='oui'){
		 
		 echo'  
     		<div class="container">
        		<div class="row">
					<div class="col-lg-12">
		 				<h3>Vous avez déjà renseigné vos contacts : <a href="modification_contact.php">modifier vos contacts</a></h3>
					</div>
				</div>
			</div>
		</section>';
	 }else{
		 if($r['contact_rempli']=='non'){ 	
		 echo '<form method="post" action="contact_check.php" name="contact" onsubmit="return validateForm()">';
				
				echo'		
					<div class="container">
					
						<div class="row">
				
							<div class="col-lg-12">
								<h1 class="page-header">Ajouter un responsable JAO</h1>
							</div>
							
							<br/><br/>
				
				<h4>Contact principal * : </h4>
						  <br/>
						  <label>Nom *</label>
						  <br/><br/>
						  <input type="text" name="nom_contact" required size="30" />
						  
						  <br/>
						  <br/>
						  
						  <label>Prénom *</label>
						  <br/><br/>
						  <input type="text" name="prenom_contact" required="required" size="30"/>
						  
						  <br/>
						  <br/>
						  
						  <label>Fonction *</label>
						  <br/><br/>
						  <input type="text" name="fonction_contact" required="required" size="30"/>
						  
						  <br/>
						  <br/>
						  
						  <label>Téléphone *</label>
						  <br/><br/>
						  <input type="text" name="telephone_contact" required="required" size="30" maxlength="10"/>
						  
						  <br/>
						  <br/>
						  
						  <label>Portable *</label>
						  <br/><br/>
						  
						  <input type="text" name="portable_contact" required="required" size="30" maxlength="10"/>
						  
						  <br/>
						  <br/>
						  
						  <label>Email *</label>
						  <br/><br/>
						  <input type="email" name="email_contact" required="required" size="30"/>
						  
						  <br/>
						  <br/>
						  <br/>
						  <br/>
						</div>
					 </div>
					 </section>
				 ';
		 }else{ }
		 if($r['contact_secondaire']=='non'){
			
				
				echo'	
				<section class="gestion">	
					<div class="container">
					
						<div class="row marge-top-form" style="height:100%;">	
							<h4>Si vous souhaitez renseigner un autre contact, précisez : </h4>
									  <br/>
									  <label>Nom </label>
									  <br/><br/>
									  <input type="text" name="nom_contact_2" size="30"/>
									  
									  <br/>
									  <br/>
									  
									  <label>Prénom </label>
									  <br/><br/>
									  <input type="text" name="prenom_contact_2" size="30"/>
									  
									  <br/>
									  <br/>
									  
									  <label>Fonction </label>
									  <br/><br/>
									  <input type="text" name="fonction_contact_2" size="30"/>
									  
									  <br/>
									  <br/>
									  
									  <label>Téléphone </label>
									  <br/><br/>
									  <input type="text" name="telephone_contact_2" size="30" maxlength="10"/>
									  
									  <br/>
									  <br/>
									  
									  <label>Portable </label>
									  <br/><br/>
									  
									  <input type="text" name="portable_contact_2" size="30" maxlength="10"/>
									  
									  <br/>
									  <br/>
									  
									  <label>Email </label>
									  <br/><br/>
									  <input type="email" name="email_contact_2" size="30"/>
									  
									  <br/>
									  <br/>
									  <br/>
									  
									  <button name="submit" class="none">Sauvegarder</button>
						   		</div>
							</div>
					</section>';
		 }
	 }
	 echo '</form>';
}
  ?>  
  
  <br/><br/><br/><br/><br/><br/><br/>
  
 <!-- Footer -->
 <?php $footer = include("footer.php"); ?>
  
</body>
</html>