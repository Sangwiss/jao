
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
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="/JAO-V2/www/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="/JAO-V2/www/css/jquery-ui.css" rel="stylesheet" type="text/css" />

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

    <!-- Sidemenu -->
    <section id="pushmenu-right" class="pushmenu pushmenu-right side-menu">
        <a id="menu-sidebar-close-icon" class="menu-close"><i class="ion ion-android-close"></i></a>
        <h5 class="white">Sign In</h5>
        <div class="sign-in">
            <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Email" value="" />
            <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Password" value="" />
            <input type="submit" class="btn btn-md btn-color-b form-full" value="Sign In" />
            <a>New Customer?</a>
        </div>
        <ul>
            <li><a class="all-demos-link" target="_blank" href="../demo.html">Main Demo Page</a></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="">Concept</a></li>
            <li><a href="">Iseg</a></li>
            <li><a href="">Coup de coeur Act</a></li>
            <li><a href="">Espace agences</a></li>
            <!-- <li><a href="">Agences</a></li> -->
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
                    <a href="index.html">
                        <h2>#JAO2017</h2>
                    </a>
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
                      <li><a href="index.html">Home</a></li>
            <li><a href="">Concept</a></li>
            <li><a href="">Iseg</a></li>
            <li><a href="">Coup de coeur Act</a></li>
            <li><a href="">Espace agences</a></li>
            <!-- <li><a href="">Agences</a></li> -->
                    </ul>
                </div>
                <!-- End Navbar Navigation -->

            </div>
        </header>
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
                    Ici fil twitter
                </div>
            </div>
        </section>
        <!-- End fil twitter section -->


<?php
session_start();

include("config.php");

function add_param($query, $toadd) {
  if (strlen($query))
  return $query." AND ".$toadd;
  else
  return $toadd;
}

// PARIS BORDEAUX LILLE LYON NANTES STRASBOURG TOULOUSE

$query_nom = $_GET['nom'];
$query_lieu = $_GET['lieu'];
$query_format =  $_GET['format'];
$query_handi_mobilite = $_GET['handi_mobilite'];
$query_handi_malentendant = $_GET['handi_malentendant'];
$query_handi_malvoyant = $_GET['handi_malvoyant'];
$query_horaire = $_GET['horaire'];


$enable_atelier = in_array("Atelier", $query_format);
$enable_conference = in_array("Conference", $query_format);
$enable_debat = in_array("Debat", $query_format);
$enable_projection = in_array("Projection", $query_format);
$enable_exposition = in_array("Exposition", $query_format);
$enable_concours = in_array("Concours", $query_format);
$enable_rencontre = in_array("Rencontre", $query_format);

$enable_nohour = ($_GET['horaire'] == '');
$enable_petit_dejeuner = ($_GET['horaire'] == 'petit_dejeuner');
$enable_matin = ($_GET['horaire'] == 'matin');
$enable_dejeuner = ($_GET['horaire'] == 'dejeuner');
$enable_apres_midi = ($_GET['horaire'] == 'apres_midi');
$enable_aperitif = ($_GET['horaire'] == 'aperitif');
$enable_soiree = ($_GET['horaire'] == 'soiree');

$enable_paris = $_GET['ville'] == 'paris';
$enable_bordeaux = $_GET['ville'] == 'bordeaux';
$enable_lille = $_GET['ville'] == 'lille';
$enable_lyone  = $_GET['ville'] == 'lyon';
$enable_nantes = $_GET['ville'] == 'nantes';
$enable_strasbourg = $_GET['ville'] == 'strasbourg';
$enable_toulouse = $_GET['ville'] == 'toulouse';
$enable_outre_mer = $_GET['ville'] == 'outremer';


$city_to_query_map = array(
  'paris' => array(75, 77, 78, 91, 92, 93, 94, 95),
  'bordeaux' => array(33),
  'lille' => array(59),
  'lyon' => array(69),
  'nantes' => array(44),
  'strasbourg' => array(67),
  'toulouse' => array(31),
  'outremer' => array(971, 973, 975, 972, 974, 976, 984, 987, 986, 988)
);

// Petit déjeuner 7h00-9h00
// Matin 9h00 - 12h
// Déjeuner 12h-14h
// Après midi 14h-18h
// Apéritif 18h-20h
// Soirée 20h 2h

$hours_range = array(
  'petit_dejeuner' => array("begin" => "07:00", "end" => "09:00"),
  'matin' => array("begin" => "09:00", "end" => "12:00"),
  'dejeuner' => array("begin" => "12:00", "end" => "14:30"),
  'apres_midi' => array("begin" => "14:30", "end" => "18:00"),
  'aperitif' => array("begin" => "18:00", "end" => "20:00"),
  'soiree' => array("begin" => "20:00", "end" => "06:00"),


);

$chosen_regions = array();

foreach (array_keys($city_to_query_map) as $region) {
  if ($_GET[$region]) {
    $chosen_regions = array_merge($chosen_regions, $city_to_query_map[$region]);
  }
}
if (strlen($_GET['ville'])) {
  $chosen_regions = $city_to_query_map[$_GET['ville']];
}

$enable_handi_mobilite = ($_GET['handi_mobilite'] == 1);
$enable_handi_malentendant = ($_GET['handi_malentendant'] == 1);
$enable_handi_malvoyant = ($_GET['handi_malvoyant'] == 1);



$subquery = "";
$params = array();

if (strlen($query_nom)) {
  $subquery = add_param($subquery, "(programme.nom_evenement LIKE ? OR programme.nom_agence LIKE ?)");
  $params = array_merge($params, array("%$query_nom%", "%$query_nom%"));
}

if (count($chosen_regions)) {
  $region_query = "";

  foreach ($chosen_regions as $region) {
      if (strlen($region_query)) {
        $region_query .= " OR ";
      }
      $region_query .= "users.cp LIKE ?";
      $params[] = "$region%";
  }
  $subquery = add_param($subquery, "(".$region_query.")");
}
echo "format_query = ".count($query_format);
if (count($query_format)) {
  $format_query = "";
  foreach ($query_format as $format) {
    if (strlen($format_query)) {
      $format_query .= " OR ";
    }
    $format_query .= "programme.type_evenement = ?";
    $params[] = $format;
  }

  $subquery = add_param($subquery, "(".$format_query.")");
  // $params[] = "$query_format";
}

if ($query_handi_mobilite == 1) {
    $subquery = add_param($subquery, "users.mobilite_reduite = ?");
    $params[] = "oui";
}

if ($query_handi_malentendant == 1) {
    $subquery = add_param($subquery, "users.malentendant = ?");
    $params[] = "oui";
}

if ($query_handi_malvoyant == 1) {
    $subquery = add_param($subquery, "users.malvoyant = ?");
    $params[] = "oui";
}

if (strlen($query_horaire)) {
  $begin = '0000-00-00 '.$hours_range[$query_horaire]['begin'].":00";
  $end = '0000-00-00 '.$hours_range[$query_horaire]['end'].":00";

  $subquery = add_param($subquery, 'STR_TO_DATE( heure_globale_debut,  "%hh%m") BETWEEN ? AND ?');
  $params = array_merge($params, array($begin, $end));
}

$base_query = "SELECT *, programme.id as programme_id, users.adresse, nom_evenement, programme.nom_agence, users.ville, users.cp, type_evenement FROM programme LEFT JOIN users ON programme.user_id = users.id";

$count_query = "SELECT *, programme.id as programme_id, users.adresse, nom_evenement, programme.nom_agence, users.ville, users.cp, type_evenement FROM programme LEFT JOIN users ON programme.user_id = users.id";


$query = $base_query;
if (strlen($subquery)) {
  $query .= " WHERE ".$subquery;
}

$query .= " GROUP BY event_id, type_evenement";

// echo $query."<br><br><br><br><br><br><br>";

try{
  $sql = $dbh->prepare($query);
  $sql->execute($params);
  $programmes = $sql->fetchAll();
}
catch (Exception $e) {
  echo $e;
}

// echo "<br><br><br>count=".count($programmes)."<br><br><br>";
// var_dump($programmes);

?>

        <!-- Work Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
              <?php
              $i = 0;
                foreach ($programmes as $programme) {
                  if ($i % 3 == 0) {
                    if ($i != 0) {
                      echo "</div>";
                    }
                    echo '<div class="row container-grid nf-col-3">';
                  }
                  echo '
                    <div class="nf-item branding coffee spacing">
                      <div class="item-box">
                          <a href="portfolio-single1.html">
                              <img alt="1" src="/JAO-V2/www/img/portfolio/1.jpg" class="">
                                  <div class="">
                                      <h5 class="">'.$programme['nom_agence'].'</h5>
                                      <p class="">'.$programme['nom_evenement'].'</p>
                                  </div>
                          </a>
                      </div>
                    </div>';
                  // echo $programme['programme_id']." ".$programme['nom_evenement']."<br/><a href='download-ical.php?event_id=".$programme['programme_id']."'>Voir sur iCal</a><br/><a href='http://maps.apple.com/maps?q=".$programme['adresse']."'>Voir Plan</a><br/><br/>";



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
        <footer class="footer pt-80">
            <div class="container">
                <div class="row mb-60">
                    <!-- Logo -->
                    <div class="col-md-3 col-sm-3 col-xs-12 mb-xs-30">
                        <a class="footer-logo" href="home.html">
                            <img src="/JAO-V2/www/img/logo-black.png" /></a>
                    </div>
                    <!-- Logo -->

                    <!-- Newsletter -->
                    <div class="col-md-4 col-sm-5 col-xs-12 mb-xs-30">
                        <div class="newsletter">
                            <form>
                                <input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
                                <button class="newsletter-btn btn btn-xs btn-white" type="submit" value=""><i class="fa fa-angle-right mr-0"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- End Newsletter -->

                    <!-- Social -->
                    <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-12">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Social -->
                </div>
                <!--Footer Info -->
                <div class="row footer-info mb-60">
                    <div class="col-md-3 col-sm-12 col-xs-12 mb-sm-30">
                        <p class="mb-xs-0">Our ante tincidunt tempus, Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                        <a class="btn-link-a" href="about-1.html">Read More</a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30 mb-xs-0">
                        <ul class="link">
                            <li><a href="blog-grid-3col.html">Blog</a></li>
                            <li><a href="portfolio-grid-3col.html">Portfolio</a></li>
                            <li><a href="login-register.html">Login & Signup</a></li>
                            <li><a href="faq-1.html">FAQ</a></li>
                            <li><a href="about-1.html">About</a></li>
                            <li><a href="service-1.html">Service</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30">
                        <ul class="link">
                            <li><a href="contact-1.html">Contact Us</a></li>
                            <li><a href="shop-checkout.html">Shopping Cart</a></li>
                            <li><a href="404-error-1.html">404 Error</a></li>
                            <li><a href="home.html">Home</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <p>502, DieSachbearbeiter, Schönhauser Allee, 167c10435 Berlin,Germany.</p>
                        <ul class="link-small">
                            <li><a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>yourname@domain.com</a></li>
                            <li><a><i class="fa fa-phone left"></i>+40 (0) 012 345 6789</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Footer Info -->
            </div>

            <hr />

            <!-- Copyright Bar -->
            <section class="copyright ptb-60">
                <div class="container">
                    <p class="">
                        © 2015 <a><b>Mazel Template</b></a>. All Rights Reserved.
                        <br />
                        Template  by <a target="_blank" href="http://nileforest.com/"><b>nileforest</b></a>
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


    <form method="GET" action="recherche.php">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6 col-sm-3">
          <div id="accordion" class="panel panel-primary behclick-panel">
            <div class="panel-heading">
              <h3 class="panel-title">Rechercher par :</h3>
            </div>
            <div class="panel-body" >
              <div class="panel-heading " >
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse0">
                    <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Lieux
                  </a>
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

                      <!-- echo '<input type="text" class="form-control" name="lieu" value="'.$query_lieu.'" placeholder="Paris, Lyon...">'; -->



                </ul>
              </div>

              <div class="panel-heading " >
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse1">
                    <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Format
                  </a>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in" >
                <ul class="list-group">

                      <li class="list-group-item">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="format[]" value="Atelier" <?php if ($enable_atelier) { echo "checked='checked' ";}?>>
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
                      <!-- <select name="format">
                        <option value=""></option>
                        <option value="Atelier" <?php if ($enable_atelier) { echo "selected='selected' ";}?>>Atelier</option>
                        <option value="Conference" <?php if ($enable_conference) { echo "selected='selected' ";}?>>Conference</option>
                        <option value="Debat"<?php if ($enable_debat) { echo "selected='selected' ";}?>>Debat</option>
                        <option value="Projection" <?php if ($enable_projection) { echo "selected='selected' ";}?>>Projection</option>
                        <option value="Exposition" <?php if ($enable_exposition) { echo "selected='selected' ";}?>>Exposition</option>
                        <option value="Concours"<?php if ($enable_concours) { echo "selected='selected' ";}?>>Concours</option>
                        <option value="Rencontre" <?php if ($enable_rencontre) { echo "selected='selected' ";}?>>Rencontre</option>
                      </select> -->


                </ul>
              </div>
              <div class="panel-heading" >
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i> Horaires</a>
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

                  <!-- <li class="list-group-item">
                    <div class="checkbox" >
                      <label>
                        <input type="radio" name="horaire" value="" <?php if ($enable_nohour) { echo "checked='checked' ";}?>>
                        Aucune préférence
                      </label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox">
                      <label>
                        <input type="radio" name="horaire" value="petit_dejeuner" <?php if ($enable_petit_dejeuner) { echo "checked='checked' ";}?>>
                        Petit déjeuner
                      </label>
                    </div>
                  </li>

                  <li class="list-group-item">
                    <div class="checkbox" >
                      <label>
                        <input type="radio" name="horaire" value="matin" <?php if ($enable_matin) { echo "checked='checked' ";}?>>
                        Matin
                      </label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox"  >
                      <label>
                        <input type="radio" name="horaire"value="dejeuner" <?php if ($enable_dejeuner) { echo "checked='checked' ";}?>>
                        Déjeuner
                      </label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox"  >
                      <label>
                        <input type="radio" name="horaire" value="apres_midi" <?php if ($enable_apres_midi) { echo "checked='checked' ";}?>>
                        Après midi
                      </label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox"  >
                      <label>
                        <input type="radio" name="horaire" value="aperitif" <?php if ($enable_aperitif) { echo "checked='checked' ";}?>>
                        Apéritif
                      </label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox"  >
                      <label>
                        <input type="radio" name="horaire" value="soiree" <?php if ($enable_soiree) { echo "checked='checked' ";}?>>
                        Soirée
                      </label>
                    </div>
                  </li> -->
                </ul>
              </div>
              <div class="panel-heading" >
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i> Accueil handicapé</a>
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
              <div class="panel-heading" >
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Par nom</a>
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse in">
                <ul class="list-group">
                  <li class="list-group-item">
                    <?php
                    echo '<input type="text" class="form-control" value="'.$query_nom.'" name="nom" placeholder="Search term...">';
                    ?>
                  </li>

                </ul>
              </div>

              <div id="collapse2" class="panel-collapse collapse in">
                <ul class="list-group">
                  <li class="list-group-item">
                    <button type="submit" class="btn btn-default">Chercher</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
