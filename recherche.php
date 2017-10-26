<?php
session_start();

include("config.php");

function add_param($query, $toadd) {
  if (strlen($query))
  return $query." AND ".$toadd;
  else
  return $toadd;
}


$available_formats = array("Atelier", "Conference", "Debat", "Projection", "Exposition", "Concours", "Rencontre");
$city_to_query_map = array(
  'paris' => array(75, 77, 78, 91, 92, 93, 94, 95),
  'bordeaux' => array(33),
  'cannes' => array(6400, 6150),
  'lille' => array(59),
  'lorient' => array(56),
  'lyon' => array(69),
  'montpellier' => array(34),
  'nantes' => array(44),
  'narbonne' => array(11),
  'nice' => array(6000, 6100, 6200, 6300),
  'poitier' => array(86),
  'strasbourg' => array(67),
  'toulouse' => array(31),
  'outremer' => array(971, 973, 975, 972, 974, 976, 984, 987, 986, 988)
);

$regions = array();
$regions = array_merge($regions, $city_to_query_map['bordeaux']);
$regions = array_merge($regions, $city_to_query_map['cannes']);
$regions = array_merge($regions, $city_to_query_map['lille']);
$regions = array_merge($regions, $city_to_query_map['lorient']);
$regions = array_merge($regions, $city_to_query_map['lyon']);
$regions = array_merge($regions, $city_to_query_map['montpellier']);
$regions = array_merge($regions, $city_to_query_map['nantes']);
$regions = array_merge($regions, $city_to_query_map['narbonne']);
$regions = array_merge($regions, $city_to_query_map['nice']);
$regions = array_merge($regions, $city_to_query_map['poitier']);
$regions = array_merge($regions, $city_to_query_map['strasbourg']);
$regions = array_merge($regions, $city_to_query_map['toulouse']);
$city_to_query_map['regions'] = $regions;


$hours_range = array(
  'petit_dejeuner' => array("begin" => "07:00", "end" => "10:00"),
  'matin' => array("begin" => "10:00", "end" => "12:00"),
  'dejeuner' => array("begin" => "12:00", "end" => "14:30"),
  'apres_midi' => array("begin" => "14:30", "end" => "17:00"),
  'aperitif' => array("begin" => "17:00", "end" => "20:00"),
  'soiree' => array("begin" => "20:00", "end" => "23:59"),
);
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93897923-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<?php


$query_nom = $_GET['nom'];
$query_lieu = $_GET['lieu'];
$query_format =  $_GET['format'];
$query_handi_mobilite = $_GET['handi_mobilite'];
$query_handi_malentendant = $_GET['handi_malentendant'];
$query_handi_malvoyant = $_GET['handi_malvoyant'];
$query_horaire = $_GET['horaire'];
$query_display_format =  $_GET['display_format'];

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

echo "<!-- DEBUG\n";
echo ":".$_GET['ville'].": ".$enable_paris;
var_dump($regions);
echo "-->";
$enable_bordeaux = $_GET['ville'] == 'bordeaux';
$enable_cannes = $_GET['ville'] == 'cannes';
$enable_lille = $_GET['ville'] == 'lille';
$enable_lyon  = $_GET['ville'] == 'lyon';
$enable_lorient  = $_GET['ville'] == 'lorient';
$enable_montpellier = $_GET['ville'] == 'montpellier';
$enable_nantes = $_GET['ville'] == 'nantes';
$enable_narbonne = $_GET['ville'] == 'narbonne';
$enable_nice = $_GET['ville'] == 'nice';
$enable_poitier = $_GET['ville'] == 'poitier';
$enable_strasbourg = $_GET['ville'] == 'strasbourg';
$enable_toulouse = $_GET['ville'] == 'toulouse';
$enable_outre_mer = $_GET['ville'] == 'outremer';
//$enable_regions = $_GET['ville'] == 'regions';


$enable_handi_mobilite = ($_GET['handi_mobilite'] == 1);
$enable_handi_malentendant = ($_GET['handi_malentendant'] == 1);
$enable_handi_malvoyant = ($_GET['handi_malvoyant'] == 1);


$chosen_regions = array();
echo "<!--";
foreach (array_keys($city_to_query_map) as $region) {
  echo $region."\n";
  if ($_GET[$region]) {
    $chosen_regions = array_merge($chosen_regions, $city_to_query_map[$region]);
  }
}
echo "-->";
if (strlen($_GET['ville'])) {
  $chosen_regions = $city_to_query_map[$_GET['ville']];
}

$subquery = "";
$params = array();

if (strlen($query_nom)) {
  $subquery = add_param($subquery, "(programme.nom_evenement LIKE ? OR users.nom_agence LIKE ?)");
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
  // $begin = '0000-00-00 '.$hours_range[$query_horaire]['begin'].":00";
  // $end = '0000-00-00 '.$hours_range[$query_horaire]['end'].":00";
  $begin = $hours_range[$query_horaire]['begin'];
  $end = $hours_range[$query_horaire]['end'];
  // $subquery = add_param($subquery, '(STR_TO_DATE( heure_globale_debut,  "%Hh%m") BETWEEN ? AND ?)');
  // $params = array_merge($params, array($begin, $end));
  $subquery = add_param($subquery, '((STR_TO_DATE( ?,  "%H:%i") BETWEEN STR_TO_DATE( heure_debut,  "%Hh%i")  AND STR_TO_DATE( heure_fin,  "%Hh%i") ) OR (STR_TO_DATE( ?,  "%H:%i") BETWEEN STR_TO_DATE( heure_debut,  "%Hh%i")  AND STR_TO_DATE( heure_fin,  "%Hh%i") ))');
  $params = array_merge($params, array($begin, $end));
  $begin = $hours_range[$query_horaire]['begin'];

  echo "<!-- BDG HOUR\n";
  echo $begin."\n";
  echo $end."\n";
  echo "-->";
}

$base_query = "SELECT *, users.id as user_id, users.adresse, nom_evenement, users.logo_agence as logo_agence, users.nom_agence, users.ville, users.cp, type_evenement, users.image as image, users.img_import FROM users LEFT JOIN programme ON programme.user_id = users.id";

$count_base_query = "SELECT COUNT(DISTINCT users.id) as cnt, type_evenement FROM users LEFT JOIN programme ON programme.user_id = users.id";


$query = $base_query;

if (strlen($subquery)) {
  $query .= " WHERE ".$subquery." AND (type_evenement = ?)";
}
else {
  $query .= " WHERE (type_evenement = ?)";
}

$count_subquery = "";

$params_count = $params;
if (count($query_format) == 0) {
  $query_format = $available_formats;
}

foreach ($query_format as $format) {
  if (strlen($count_subquery) != 0) {
    $count_subquery .= " OR ";
  }
  $count_subquery .= "type_evenement = ?";
  $params_count = array_merge($params_count, array($format));
}

$subquery = add_param($subquery, "(".$count_subquery.")");
$count_query = $count_base_query;
if (strlen($subquery)) {
  $count_query .= " WHERE ".$subquery;
}

$count_query .= " GROUP BY type_evenement";

try {
  $sql = $dbh->prepare($count_query);
  $sql->execute($params_count);
  $counters = $sql->fetchAll();

}
catch (Exception $e) {
  echo "count query error ".$e;
}

$counters_helper = array();

foreach ($counters as $counter) {
  $counters_helper[$counter['type_evenement']] = $counter['cnt'];
}


if ($counters_helper[$query_display_format] == null || $counters_helper[$query_display_format] == 0) {
  if ($counters_helper[$counters[0]['type_evenement']])
    $query_display_format = $counters[0]['type_evenement'];
  else
    $query_display_format = 'Atelier';
}


if (strlen($query_display_format) == 0) {
  $query_display_format = $counters[0]['type_evenement'];
}
if ($query_display_format == NULL) {
  $query = str_replace("type_evenement = ?", 1, $query);
}
else {
  $params[] = $query_display_format;
}

// echo "<br>count_subquery=".$count_subquery."  ;<br>";

$query .= " GROUP BY users.id";

try {
  $sql = $dbh->prepare($query);
  $sql->execute($params);
  $programmes = $sql->fetchAll();

}
catch (Exception $e) {
  echo "regular query error ".$e;
}

?>

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
            <li><a href="#" onclick="toggleVisibility(document.getElementById('articleId'))"><i style="margin-right:5px;"class="fa fa-search" aria-hidden="true"></i>Chercher une agence</a></li>
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
                              <label><!--anticornwall-->
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
        <section>
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


        <!-- Work Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">

              <ul class="nav nav-pills" role="tablist">
                <?php
                foreach ($query_format as $format) {

                  if ($counters_helper[$format]) {
                    if ($format == $query_display_format) {
                      echo '<li role="presentation" class="active">';
                    }
                    else {
                      echo '<li role="presentation">';
                    }
                    $bk = $_GET;
                    $bk['display_format'] = $format;
                    $build = http_build_query($bk);
                    echo '<a href="?'.$build.'">'.$format.' ('.$counters_helper[$format].')</a></li>';
                  }
                }
                ?>
              </ul>

              <?php
              $i = 0;
                foreach ($programmes as $programme) {
                  if ($i % 3 == 0) {
                    if ($i != 0) {
                      echo "</div>";
                    }
                    echo '<div style="background-color: white;" class="row container-grid nf-col-3">';
                  }
                  echo '
  <div class="nf-item branding coffee spacing">
  <a href="fiche-agence.php?id='.$programme['user_id'].'"><!-- '.$programme['event_id'].' -->
    <div class="item-box thumbnail card-wrapper "><div class="image">';
    echo "<!-- DBGGG \n";
    var_dump($programme['image']);
    echo ":".($programme['image'] != "").":\n";
    echo ":".(file_exists('medias/'.$programme['image'])).":";
    echo "-->";
            if ($programme['image'] != "" && file_exists('espace_agence/uploads/'.$programme['image'])) {
              echo '<img alt="banniere" src="espace_agence/uploads/'.rawurlencode($programme['image']).'" class="card-image im">
          </div></div>';
            }
            else if ($programme['logo_agence'] != "" && file_exists('espace_agence/uploads/'.$programme['logo_agence'])) {
              echo '<img alt="1" src="espace_agence/uploads/'.rawurlencode($programme['logo_agence']).'" class="card-image">
          </div></div>';
            }

            else {
              echo '<img alt="1" src="/medias/AACC_Flat.jpg"  class="card-image">
          </div></div>';
            }
            echo '
            <div class="card-label-and-text"><div class="card-label">
                    '.$programme['nom_agence'].'</div>
                    <div class="card-text-wrapper">
          <span class="card-text">'.$programme['nom_evenement'].'</span>
        </div>
      </div>
        </a>
  </div>';

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
