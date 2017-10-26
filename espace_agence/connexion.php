<?php
	session_start();
	if($_SESSION['user']!=''){
		echo "
		<SCRIPT LANGUAGE='JavaScript'>
			window.location.href='gestion.php';
		</SCRIPT>
		";	
	}else{
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
	
        
        <section class="gestion">
            <div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
                        <div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
			<div class="container  container-color">
				<div class="row container-margin">
                	<div class="col-lg-12">
                    	<h1 class="page-header titre_section">Connexion</h1>
                    </div>
                        <form method="POST" action="login.php">
            
                            <p>
                                <label>Nom d'utilisateur :</label> <br/>
                                <input size="30" name="login" type="text" required="required" id="login" class="input"/>
                            </p>
                            
                            <p>
                                <label>Mot de passe :</label><br/>
                                <input name="pass" size="30" type="password" required="required" id="password" class="input"/>
                            </p>
                            
                            <button type="submit" name="Submit" value="Login" class="none">Connexion</button><br><br>

                            <a href="mailto:dbocquet@aacc.fr?subject=Demande de mot de passe JAO">Mot de passe oublié ?</a> 
                    
                        </form>
                    </div>
                    <br/> <br/> <br/>
                                        <br/> <br/> <br/>
                                        <br/> <br/> <br/>
           		 </div>
        </section> 
        
<!-- Footer -->

<?php $footer = include("footer.php"); ?>

           
</body>
</html>
<?php
	}
?>