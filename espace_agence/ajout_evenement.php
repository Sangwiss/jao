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
include 'nav.php';

if($_SESSION['user']==''){
         include_once'401.php';
}else{
    echo'
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <section class="gestion">
        ';
        
        include 'menu.php';
        
        echo'
                    <div class="container">
                    
                        <div class="row">
                
                            <div class="col-lg-12">
                                <h1 class="page-header">Type d\'événement : </h1>
                            </div>
                            
                            <form method="post" action="formulaire_evenement.php">
                                <input type="hidden" name="type_evenement" value="Workshop" />
                                <button class="col-lg-3 col-md-4 col-xs-6 thumb resize" name="submit">
                                    <a class="thumbnail" href="ajout_contact.php">
                                        <img class="img-responsive" src="" alt="Workshop">
                                    </a>
                                </button>
                            </form>
                            
                            <form method="post" action="formulaire_evenement.php">
                                <input type="hidden" name="type_evenement" value="Conférence" />
                                <button class="col-lg-3 col-md-4 col-xs-6 thumb resize" name="submit" class="resize">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="" alt="Conférence">
                                    </a>
                                </button>
                            </form>
                            
                        <!--<form method="post" action="formulaire_evenement.php">
                                <input type="hidden" name="type_evenement resize" value="Débat" />
                                <button class="col-lg-3 col-md-4 col-xs-6 thumb resize" name="submit">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="" alt="Débat">
                                    </a>
                                </button>
                            </form> -->
                            
                            <form method="post" action="formulaire_evenement.php">
                                <input type="hidden" name="type_evenement" value="Projection" />    
                                <button class="col-lg-3 col-md-4 col-xs-6 thumb resize" name="submit">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="" alt="Projection">
                                    </a>
                                </button>
                            </form>
                            
                            <form method="post" action="formulaire_evenement.php">
                                <input type="hidden" name="type_evenement" value="Exposition" />
                                <button class="col-lg-3 col-md-4 col-xs-6 thumb resize" name="submit">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="" alt="exposition">
                                    </a>
                                </button>
                            </form>
                            
                            <form method="post" action="formulaire_evenement.php">
                                <input type="hidden" name="type_evenement" value="Concours" />
                                <button class="col-lg-3 col-md-4 col-xs-6 thumb resize" name="submit">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="" alt="concours">
                                    </a>
                                </button>
                            </form>
                            
                            <form method="post" action="formulaire_evenement.php">
                                <input type="hidden" name="type_evenement" value="Rencontre" />
                                <button class="col-lg-3 col-md-4 col-xs-6 thumb resize" name="submit">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="" alt="rencontre">
                                    </a>
                                </button>

                                <form method="post" action="formulaire_evenement.php">
                                <input type="hidden" name="type_evenement" value="Autre" />
                                <button class="col-lg-3 col-md-4 col-xs-6 thumb resize" name="submit">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="" alt="Autre">
                                    </a>
                                </button>

                            </form>
                        </div>
                    </div>
            </section>
            
            
            
            <br/><br/><br/><br/><br/><br/>';
}
  ?>
  
 <!-- Footer -->
<?php $footer = include("footer.php"); ?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
   
</body>
</html>


