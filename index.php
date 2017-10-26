<?php
session_start();

include("config.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Journée agences ouvertes - 2017</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="aacc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="icon" type="image/png" href="">
    <link rel="apple-touch-icon" href="">

    <!-- CSS -->
    <link href="/JAO-V2/www/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
var toggleVisibility = function(element) {
    if(element.style.display=='block'){
        element.style.display='none';
    } else {
        element.style.display='block';
    }
};

</script>

<script type="text/javascript">


$(".scroll-link").click(function ()
    $(".nav-button,.primary-nav").toggleClass("close");
});

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93897923-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Search Overlay Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="ion ion-ios-close-empty"></i></span>
        <form role="search" id="searchform" action="/search" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="ion ion-ios-search"></i></button>
        </form>
    </div>
    <!-- End Search Overlay Menu -->
    <section id="pushmenu-right" class="pushmenu pushmenu-right side-menu">
        <a id="menu-sidebar-close-icon" class="menu-close"><i class="ion ion-android-close"></i></a>

        <ul>
            <li><a href="#"  class="nav-button" onclick="toggleVisibility(document.getElementById('articleId'))"><i style="margin-right:5px;"class="fa fa-search" aria-hidden="true"></i>Chercher une agence</a></li>
            <li><a href="concept.php">Concept</a></li>
            <li><a href="iseg.php">Iseg</a></li>
            <li><a href="act.php">Coup de coeur Act</a></li>
            <li><a href="http://www.agences-ouvertes.com/espace_agence/connexion.php">Espace agences</a></li>
        </ul>
    </section>
    <!--End Sidemenu -->

    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- Header -->
                <header id="header" class="header">
            <div class="container header-inner">

                <!-- Logo -->
                <div class="logo">
                    <a class="header_nomarge" href="index.php">
                        <h2 class="header_logo">#JAO2017</h2>
                    </a>
                  <ul class="list-unstyled">
                      <li class="correc_ul_logo"><a  class="socialaacc" href="https://www.facebook.com/AACC.like/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                      <li class="correc_ul_logo"><a class="socialaacc" href="https://twitter.com/AACClive"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                      <li class="correc_ul_logo"><a class="socialaacc" href="https://www.youtube.com/user/AACCTube"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                      <li class="correc_ul_logo"><a class="socialaacc" href="https://www.instagram.com/aacclive/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <!-- End Logo -->



                <!-- Mobile Navbar Icon -->
                <div class="nav-mobile nav-bar-icon">
                    <span></span>
                </div>
                <!-- End Mobile Navbar Icon -->

                <!-- Navbar Navigation -->
                <div class="nav-menu">
                    <ul class="nav-menu-inner">
                     <!--  <li><a href="home.php">Home</a></li> -->
            <li><a href="#" onclick="toggleVisibility(document.getElementById('articleId'))"><i style="margin-right:5px;"class="fa fa-search" aria-hidden="true"></i>Chercher une agence</a></li>
            <li><a href="concept.php">Concept</a></li>
            <li><a href="iseg.php">Iseg</a></li>
            <li><a href="act.php">Coup de coeur Act</a></li>
            <li><a href="http://www.agences-ouvertes.com/espace_agence/connexion.php">Espace agences</a></li>
            <!-- <li><a href="">Agences</a></li> -->
                    </ul>

                </div>
                <!-- End Navbar Navigation -->

            </div>



        </header>


                   <div class="margeform bk-expand bk-expanded-search dark-theme border-bottom">
  <div class="site-content" style="display: block;">

     <form style="display:none" id="articleId" method="GET" action="recherche.php">
            <?php
            echo '<input type="hidden" name="display_format" value="'.$query_display_format.'" />';
            ?>
            <div class="container-fluid">
              <div style="background-color: white;" class="row">
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-8 col-sm-3">
                  <div id="accordion" class="panel behclick-panel">
                    <div class="panel-heading">
                      <h3 class="panel-title title-search2">Rechercher par :</h3>
                    </div>
                    <div class="panel-body" >




                      <div class="col-md-3 col-sm-3">
                    <div class="panel-heading" >
                      <h4 class="panel-title">
                        <span class="title-search">Par nom :</span>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse in">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <?php
                          echo '<input type="text" class="form-control" value="'.$query_nom.'" name="nom" placeholder="Tapez le nom de votre agence !">';
                          ?>
                        </li>

                      </ul>
                    </div>



                    <div class="panel-heading" >
                      <h4 class="panel-title">
                        <span class="title-search">Accueil handicapé :</span>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse in">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="handi_mobilite" value="1" <?php if ($enable_handi_mobilite) { echo "checked='checked' ";}?>>
                              Mobilité réduite
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="checkbox" >
                            <label>
                              <input type="checkbox" name="handi_malentendant" value="1" <?php if ($enable_handi_malentendant) { echo "checked='checked' ";}?>>
                              Malentendant
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="handi_malvoyant" value="1" <?php if ($enable_handi_malvoyant) { echo "checked='checked' ";}?>>
                              Malvoyant
                            </label>
                          </div>
                        </li>
                      </ul>
                    </div>



                  </div>







                    <div class="col-md-3 col-sm-3">
                      <div class="panel-heading " >
                        <h4 class="panel-title">
                        <span class="title-search">Lieu :</span>
                      </h4>

                      </div>
                      <div id="collapse0" class="panel-collapse collapse in" >
                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="checkbox">
                              <label>
                                <select name="ville">
                                  <option value=""></option>
                                  <option value="paris" <?php if ($enable_paris) { echo "selected='selected' ";}?>>Paris</option>
                                  <option value="bordeaux" <?php if ($enable_bordeaux) { echo "selected='selected' ";}?>>Bordeaux</option>
                                  <option value="cannes" <?php if ($enable_cannes) { echo "selected='selected' ";}?>>Cannes</option>
                                  <option value="lille" <?php if ($enable_lille) { echo "selected='selected' ";}?>>Lille</option>
                                  <option value="lorient" <?php if ($enable_lorient) { echo "selected='selected' ";}?>>Lorient</option>
                                  <option value="lyon" <?php if ($enable_lyon) { echo "selected='selected' ";}?>>Lyon</option>
                                  <option value="montpellier" <?php if ($enable_montpellier) { echo "selected='selected' ";}?>>Montpellier</option>
                                  <option value="nantes" <?php if ($enable_nantes) { echo "selected='selected' ";}?>>Nantes</option>
                                  <option value="narbonne" <?php if ($enable_narbonne) { echo "selected='selected' ";}?>>Narbonne</option>
                                  <option value="nice" <?php if ($enable_nice) { echo "selected='selected' ";}?>>Nice</option>
                                  <option value="poitier" <?php if ($enable_poitier) { echo "selected='selected' ";}?>>Poitier</option>
                                  <option value="strasbourg" <?php if ($enable_strasbourg) { echo "selected='selected' ";}?>>Strasbourg</option>
                                  <option value="toulouse" <?php if ($enable_toulouse) { echo "selected='selected' ";}?>>Toulouse</option>
                                  <option value="outremer" <?php if ($enable_outremer) { echo "selected='selected' ";}?>>Outre mer</option>
                                </select>
                              </label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>



                    <div class="col-md-3 col-sm-3">

                      <div class="panel-heading " >
                        <h4 class="panel-title">
                        <span class="title-search">Format :</span>
                      </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in" >
                        <ul class="list-group">

                          <li class="list-group-item">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" id="" name="format[]" value="Atelier" <?php if ($enable_atelier) { echo "checked='checked' ";}?>>
                                Atelier
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="format[]" value="Conference" <?php if ($enable_conference) { echo "checked='checked' ";}?>>
                                Conference
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="format[]" value="Debat" <?php if ($enable_debat) { echo "checked='checked' ";}?>>
                                Débat
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="format[]" value="Projection" <?php if ($enable_projection) { echo "checked='checked' ";}?>>
                                Projection
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="format[]" value="Exposition" <?php if ($enable_exposition) { echo "checked='checked' ";}?>>
                                Exposition
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="format[]" value="Concours" <?php if ($enable_concours) { echo "checked='checked' ";}?>>
                                Concours
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="format[]" value="Rencontre" <?php if ($enable_rencontre) { echo "checked='checked' ";}?>>
                                Rencontre
                              </label>
                            </div>
                          </li>

                      </ul>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-3">
                    <div class="panel-heading" >
                      <h4 class="panel-title">
                        <span class="title-search">Horaires :</span>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse in">
                      <ul class="list-group">
                        <select name="horaire">
                          <option value="" <?php if ($enable_nohour) { echo "selected='selected' ";}?>>Aucune préférence</option>
                          <option value="petit_dejeuner" <?php if ($enable_petit_dejeuner) { echo "selected='selected' ";}?>>Petit déjeuner</option>
                          <option value="matin" <?php if ($enable_matin) { echo "selected='selected' ";}?>>Matin</option>
                          <option value="dejeuner" <?php if ($enable_dejeuner) { echo "selected='selected' ";}?>>Déjeuner</option>
                          <option value="apres_midi" <?php if ($enable_apres_midi) { echo "selected='selected' ";}?>>Après midi</option>
                          <option value="aperitif" <?php if ($enable_aperitif) { echo "selected='selected' ";}?>>Apéritif</option>
                          <option value="soiree" <?php if ($enable_soiree) { echo "selected='selected' ";}?>>Soirée</option>

                        </select>

                      </ul>
                    </div>
                  </div>



                  <div class="row">
                  <div style="width: 100%;" class="padding-search col-md-8 col-sm-3">
                    <div id="collapse2" class="panel-collapse collapse in">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <button type="submit" class="btn btn-default button-search">Chercher</button>
                        </li>
                      </ul>
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-1"></div>
            </div>
          </div>
          </form>
  </div>

</div>
        <!-- End Header -->

        <!-- CONTENT --------------------------------------------------------------------------------->

        <!-- Intro Section -->
        <section id="intro">
            <!-- Hero Slider Section -->

            <!-- End Hero Slider Section -->
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- fil twitter -->
        <section id="about" class="pt pt-sm-80">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"></div>
                    <!-- <a class="twitter-timeline" data-lang="fr" data-width="400" data-height="600" href="https://twitter.com/TwitterDev/lists/national-parks">A Twitter List by TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                </div>
            </div>
        </section>
        <!-- End fil twitter section -->

<?php

$query = "SELECT *, users.logo_agence as logo_agence, users.nom_agence as u_nom_agence, users.id as user_id FROM users LEFT JOIN programme on programme.user_id = users.id GROUP BY users.id ORDER BY users.nom_agence ASC";

try {
  $sql = $dbh->prepare($query);
  $sql->execute();
  $programmes = $sql->fetchAll();
}
catch (Exception $e) {
  echo "err : ".$e;
}

function afficher_agence($programme) {
echo '
  <div class="nf-item branding coffee spacing">
  <a href="fiche-agence.php?id='.$programme['user_id'].'">
    <div class="item-box thumbnail card-wrapper "><div class="image">';
            if ($programme['logo_agence'] != "" && file_exists('espace_agence/uploads/'.$programme['logo_agence'])) {
              echo '<img alt="logo" src="espace_agence/uploads/'.rawurlencode($programme['logo_agence']).'" class="card-image im">
          </div></div>';
            }
            else if ($programme['logo_agence'] != "" && file_exists('espace_agence/uploads/'.$programme['logo_agence'])) {
              echo '<img alt="logo" src="espace_agence/uploads/'.rawurlencode($programme['logo_agence']).'" class="card-image im">
          </div></div>';
            }
            else {
              echo '<img alt="default" src="espace_agence/medias/banniere_jao.jpg" class="card-image">
          </div></div>';
            }

            echo '<div class="card-label-and-text"><div class="card-label">
                    '.$programme['u_nom_agence'].'</div>
                    <div class="card-text-wrapper">
          <span class="card-text">'.$programme['nom_evenement'].'</span>
                </div>
      </div>
        </a>
  </div>';
}

?>

        <!-- Work Section -->
        <section class="ptb ptb-sm-80 correc_top_session">

           <div class="width-head"><div class="left-right3"><img src="img/ban-jao.png" alt=""></div></div>
                        <div><img class="left-right" src="img/left.png" alt=""><img class="left-right2" src="img/left.png" alt=""></div>
            <div class="container">


              <div style="height:600px" class="row tiboapourcho">
              <div style="background-color:white" class="col-md-12">
                                                   <a style ="float:right;"class="twitter-timeline"  href="https://twitter.com/hashtag/JAO2017" data-widget-id="583985889740771328">Tweets sur #JAO2017</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
                                           <a class="twitter-timeline"  href="https://twitter.com/AACClive" data-widget-id="444113311261401088">Tweets de @AACClive</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
          
          
          
              </div>
              </div>

              <div class="row little_search_bar2">

              <div class="row">

               <div class="col-md-12"> <h2 class="title-little-search-bar2">LES AGENCES PARTICIPANTES</h2></div>
               </div>



        </div>

              <?php
              $i = 0;
                while ($i < 9) {
                  $programme = $programmes[$i];
                  if ($i % 3 == 0) {
                    if ($i != 0) {
                      echo "</div>";
                    }
                    echo '<div class="row container-grid nf-col-3">';
                  }
                  afficher_agence($programme);

                $i++;
              }
              ?>
              </div>


            </div>
            <div class="row little_search_bar">

              <div class="row">
                <div class="spacer-60"></div>
               <div class="col-md-12"> <h2 class="title-little-search-bar">MES AGENCES EN 1 CLIC !</h2></div>
               </div>

               <div class="spacer-60"></div>

                <div class="row">
                  <div class="col-md-3  col-sm-3"></div>
               <div class="col-md-2  col-sm-2"><a class="link_little_search_bar contours_search" href="recherche.php?ville=paris">Paris RP</a></div>
              <div class="col-md-2  col-sm-2"><a class="link_little_search_bar contours_search" href="recherche.php?ville=outremer">Outre-Mer</a></div>
              <div class="col-md-2  col-sm-2"><a class="link_little_search_bar contours_search" href="recherche.php?ville=regions">Régions</a></div>
              <div class="col-md-3  col-sm-3"></div>
            </div>
        </div>

            <div class="container">

            <?php
              $nb = count($programmes);
                while ($i < $nb) {
                  $programme = $programmes[$i];
                  if ($i % 3 == 0) {
                    if ($i != 9) {
                      echo "</div>";
                    }
                    echo '<div class="row container-grid nf-col-3">';
                  }
                  afficher_agence($programme);

                $i++;
              }
              ?>
              </div>




            </div>
          </div>

        </section>
        <!-- End Work Section -->


        <div class="spacer-60"></div>
        <!-- END CONTENT ---------------------------------------------------------------------------->

        <!-- FOOTER -->
          <footer   style="padding-top: 0px" class="footer pt-80">
            <div class="container">


            <!-- Copyright Bar -->
            <section class="copyright ptb-60 padding-correct2">
                <div class="container">

                    <div style="padding-bottom: 30px">
                    <img src="../img/footer.png" alt="" />
                    </div>






                    <div id="navcontainer">
                    <ul id="navlist">

                    <li><a href="#"> <img class="client-logo" src="../img/acteresponsable.png" alt="" /></a></li>

                    <li><a href="#"> <img class="client-logo" src="../img/iseg.png" alt="" /></a></li>

                    <li><a href="#"> <img class="client-logo2" src="../img/jcdecaux.png" alt="" /></a></li>

                    <li><a href="#"> <img class="client-logo2" src="../img/clubannonceur.png" alt="" /></a></li>

                    <li><a href="#"> <img class="client-logo2" src="../img/strategie.png" style="width: 165px;" /></a></li>

                     <li><a href="#"> <img class="client-logo" src="../img/tf1.png" alt="" /></a></li>

                    <li><a href="#"> <img class="client-logo" src="../img/uda.png" alt="" /></a></li>


                    </ul>
                    </div>
                    <p class="">
                        © 2017 <a><b>JAO - AACC</b></a>. All Rights Reserved.
                        <br />
                    </p>
                </div>
            </section>
            <!-- End Copyright Bar -->

        </footer>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="/JAO-V2/www/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/plugin/mediaelement-and-player.min.js"></script>
    <script src="/JAO-V2/www/js/theme.js" type="text/javascript"></script>
    <script src="/JAO-V2/www/js/navigation.js" type="text/javascript"></script>



</body>
</html>
