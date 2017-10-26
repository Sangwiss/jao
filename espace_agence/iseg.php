<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Journée agences ouvertes - 2017</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="icon" type="image/png" href="">
    <link rel="apple-touch-icon" href="">


    <meta property="og:url"content="<?php echo 'http://www.agences-ouvertes.com/espace_agence/fiche-agence.php?id='.$_GET['id']; ?>" />
    <meta property="og:type"content="website" />
    <meta property="og:title"content="Journée Agences Ouvertes 2017" />
    <meta property="og:description"content="Liberté, Égalité, Publicité, faites votre programme #JAO2017 ! www.agences-ouvertes.com/" />
    <?php
      if ($user['img_import'] == "oui" && file_exists('medias/'.$user['image'])) {
        echo '<meta property="og:image"content="http://agences-ouvertes.com/espace_agence/medias/'.rawurlencode($user['image']).'" />';
      }
      else {
        echo '<meta property="og:image"content="http://agences-ouvertes.com/espace_agence/medias/banniere_jao.jpg" />';
      }
    ?>
    <meta property="og:image:width" content="630" />
    <meta property="og:image:height" content="315" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="/JAO-V2/www/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="/JAO-V2/www/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2nFIT__X9KTmndMwqwCnDNSPrt1-dtco" type="text/javascript"></script>

    <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <script type="text/javascript">
var toggleVisibility = function(element) {
    if(element.style.display=='block'){
        element.style.display='none';
    } else {
        element.style.display='block';
    }
};

</script>

</head>
<?php
session_start();

include("config.php");

$agence = $_GET['id'];

$query = "SELECT * FROM users WHERE users.id = ?";
$sql = $dbh->prepare($query);
$sql->execute(array($agence));
$user = $sql->fetch();



$query = "SELECT * FROM contact WHERE user_id = ?";
$sql = $dbh->prepare($query);
$sql->execute(array($agence));
$contact = $sql->fetch();

$query = "SELECT * FROM programme WHERE user_id = ?";
$sql = $dbh->prepare($query);
$sql->execute(array($agence));
$programmes = $sql->fetchAll();

$query = "SELECT * FROM public WHERE user_id = ?";
$sql = $dbh->prepare($query);
$sql->execute(array($agence));
$public = $sql->fetch();

$query = "SELECT * FROM images WHERE user_id = ?";
$sql = $dbh->prepare($query);
$sql->execute(array($agence));
$images = $sql->fetchAll();

$has_metro = false;
$has_bus = false;
$has_tram = false;

$i = 0;
while ($i != 5) {
  if ($user['ligne_'.$i] != '' || $user['station_'.$i] != '') {
    $has_metro = true;
  }
  $i++;
}

$i = 0;
while ($i != 5) {
  if ($user['numero_bus_'.$i] != '' || $user['arret_'.$i] != '') {
    $has_bus = true;
  }
  $i++;
}

if ($user['numero_tram_1'] != '' || $user['arret_tram_1'] != '') {
  $has_tram = true;
}

?>

<body>
    <span id="fb-root"></span>

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



    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- Header -->
                        <header id="header" class="header">
            <div class="container header-inner">

                <!-- Logo -->
                <div class="logo">
                    <a class="header_nomarge" href="home.php">
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
            <li><a href="concept.php">Concept</a></li>
            <li><a href="iseg.php">Iseg</a></li>
            <li><a href="act.php">Coup de coeur Act</a></li>
            <li><a href="connexion.php">Espace agences</a></li>
           <li><button href="" onclick="toggleVisibility(document.getElementById('articleId'))"><span class="button-search">Mon programme</span></button>


           </a></li>
            <!-- <li><a href="">Agences</a></li> -->
                    </ul>

                </div>
                <!-- End Navbar Navigation -->

            </div>



        </header>

                   <div class="margeform bk-expand bk-expanded-search dark-theme border-bottom">
  <div class="site-content" style="display: block;">

     <form style="display:none;" id="articleId" method="GET" action="recherche.php">
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
                                  <option value="lille" <?php if ($enable_lille) { echo "selected='selected' ";}?>>Lille</option>
                                  <option value="lyon" <?php if ($enable_lyon) { echo "selected='selected' ";}?>>Lyon</option>
                                  <option value="nantes" <?php if ($enable_nantes) { echo "selected='selected' ";}?>>Nantes</option>
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
                  <div style="width: 100%;" class="col-md-8 col-sm-3">
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
            <!-- <div class="flexslider fullscreen-carousel hero-slider-1 ">
                <ul class="slides">


                    <li data-slide="light-slide">
                        <div class="slide-bg-image overlay-light parallax parallax-section1" data-background-img="img/full/11.jpg">
                            <div class="js-Slide-fullscreen-height container">
                                <div class="intro-content">
                                    <div class="intro-content-inner">
                                        <h2 class="h2">Welcome to Mazel</h2>
                                        <p class="lead">We carry a passion for performance marketing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li data-slide="dark-slide">
                        <div class="slide-bg-image overlay-dark dark-bg parallax parallax-section1" data-background-img="img/full/20.jpg">
                            <div class="js-Slide-fullscreen-height container">
                                <div class="intro-content">
                                    <div class="intro-content-inner">
                                        <h2 class="h2">Flexible & Customizable</h2>
                                        <p class="lead">We carry a passion for performance marketing</p>
                                        <br />
                                        <div><a class="btn btn-md btn-white-line xs-hidden">Read More</a><span class="btn-space-10 xs-hidden"></span><a class="btn btn-md btn-white">Learn More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li data-slide="light-slide">
                        <div class="slide-bg-image overlay-light parallax parallax-section1" data-background-img="img/full/02.jpg">
                            <div class="js-Slide-fullscreen-height container">
                                <div class="intro-content">
                                    <div class="intro-content-inner">
                                        <h2 class="h2">One & Mutlipage Theme</h2>
                                        <p class="lead">We carry a passion for performance marketing</p>
                                        <br />
                                        <div><a class="btn btn-md btn-black-line">Read More</a><span class="btn-space-10 xs-hidden"></span><a class="btn btn-md btn-black xs-hidden">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li data-slide="dark-slide">
                        <div class="slide-bg-image overlay-dark dark-bg parallax parallax-section1" data-background-img="img/full/18.jpg">
                            <div class="js-Slide-fullscreen-height container">
                                <div class="intro-content">
                                    <div class="intro-content-inner">
                                        <h2 class="h2">Fully Responsive</h2>
                                        <p class="lead">We carry a passion for performance marketing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div> -->
            <!-- End Hero Slider Section -->
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- fil twitter -->
        <section id="about" class="pt pt-sm-80">
            <div class="container text-center">
                <a class="row" href="javascript:window.history.back();">
                    <div class="button_back">
                    Retour
                  </div>
                </a>
            </div>
        </section>
        <!-- End fil twitter section -->

        <!-- Work Section -->




        <section  style="padding-bottom: 0px" class="ptb ptb-sm-80 content_padding">
            <div class="container">


                   <div class="col-md-12 content_agency">

                    <div><h1 class="title_iseg_town">Programmes ISEG</h1></div>
                    <div class="row row_picture_padding">
                      <div class="col-md-4 col-sm-4"><a href="bordeaux.php"><img src="../img/BORDEAUX.png"></a></div>
                      <div class="col-md-4 col-sm-4"><a href="lille.php"><img src="../img/LILLE.png"></a></div>
                      <div class="col-md-4 col-sm-4"><a href="#"><img src="../img/LYON-denied.png"></a></div>
                      </div>
                      <div class="row row_picture_padding">
                      <div class="col-md-4 col-sm-4"><a href="nantes.php"><img src="../img/NANTES.png"></a></div>
                      <div class="col-md-4 col-sm-4"><a href="paris.php"><img src="../img/PARIS.png"></a></div>
                      <div class="col-md-4 col-sm-4"><a href="#"><img src="../img/STRABOURG-denied.png"></a></div>
                      </div>
                      <div class="row row_picture_padding">
                      <div class="col-md-4 col-sm-4"><a href="toulouse.php"><img src="../img/TOULOUSE.png"></a></div>
                      </div>
                </div>
                
            </div>

        </section>
        <!-- End Work Section -->


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
