<?php
session_start();


echo'<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet"/>
    <link href="css/font-awesome.css" rel="stylesheet" />';
	
	
//echo $_SESSION['user'];
if($_SESSION['user']==''){
	echo'
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.php">#JAO2016</a>-->
				<a class="navbar-brand" href="index.php">#JAO2016</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="programme.php">Programme</a>
                    </li>
                    <li>
                        <a href="concept.php">Concept</a>
                    </li>
                    <li>
                        <a href="rdv.php">RDV des 7 ISEG</a>
                    </li>
                   <!-- <li>
                        <a href="#">Coup de coeur ACT</a>
                    </li>
                    <li>
                        <a href="#">Partenaires</a>
                    </li> -->
                    <li>
                        <a href="connexion.php">Espace Agences</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>';
}else if($_SESSION['user']!=''){ 
  echo'
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">#JAO2016</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="programme.php">Programme</a>
                    </li>
                    <li>
                        <a href="concept.php">Concept</a>
                    </li>
                    <li>
                        <a href="rdv.php">RDV des 7 ISEG</a>
                    </li>
                   <!-- <li>
                        <a href="#">Coup de coeur ACT</a>
                    </li>
                    <li>
                        <a href="#">Partenaires</a>
                    </li> -->
					<li>
                        <a href="gestion.php">Mon compte</a>
                    </li>
					<li>
                        <a href="logout.php">Déconnexion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>';
  }
?>