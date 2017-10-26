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
                <!--<a class="navbar-brand" href="index.html">#JAO2017</a>-->
				<a class="navbar-brand" href="gestion.php">#JAO2017</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

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
                <a class="navbar-brand" href="gestion.php">#JAO2017</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
					<li>
                        <ul id="menu">
  <li class="violet"><a class="menu-padding" href="gestion.php">Mon espace personnel</a>
    <ul>
      <li><a href="mon_programme.php">Ma #JAO2017</a>
    <ul>
      <li><a href="formulaire_evenement.php">Créer mon événement</a></li>
      <li><a href="formulaire_evenement.php">Ajouter format(s) événement</a></li>
      <li><a href="choix_evenement.php">Modifier mon événement</a></li>
      <li><a href="choix_evenement.php">Supprimer format(s) événement</a></li>
    </ul>
      </li>
      <li><a href="choix_modification.php">Mes informations</a>
    <ul>
      <li><a href="modification_contact.php">Modifier mon responsable #JAO2017</a></li>
      <li><a href="modification_info_perso.php">Modifier ma fiche agence</a></li>
    </ul>
      </li>
      <li><a href="kit_com.php">Kit de communication</a></li>
      <li><a href="choix_medias.php">Mes éléments de communication</a>
    <ul>
      <li><a href="import_img.php">Mon visuel</a></li>
      <li><a href="import_video.php">Ma vidéo</a></li>
      <li><a href="import_medias.php">Autre</a></li>
    </ul>
      </li>
    </ul>
  </li>
    </ul>
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




</ul>