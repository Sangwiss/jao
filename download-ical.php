  <?php
  session_start();

  include("config.php");
  include 'ICS.php';

  function getIcalDate($time, $incl_time = true)
  {
    return $incl_time ? date('Ymd\THis\Z', $time) : date('Ymd', $time);
  }


  $event_id = $_GET['event_id'];

  if (strlen($event_id) != 0) {
    try{
      $sql = $dbh->prepare("SELECT * FROM programme WHERE id = ?");
      $sql->execute(array($event_id));
      $evenement = $sql->fetch();

      $sql = $dbh->prepare("SELECT * FROM users WHERE id = ?");
      $sql->execute(array($evenement['user_id']));
      $user = $sql->fetch();

      $heure_debut =  split('h', $evenement['heure_globale_debut']);
      $debut = "";
      if ($heure_debut[0] > 12) {
        $debut = ($heure_debut[0]%12).":".$heure_debut[1]."PM";
      }
      else {
        $debut = ($heure_debut[0]%12).":".$heure_debut[1]."AM";
      }

     $heure_fin = split('h', $evenement['heure_globale_fin']);
     if ($heure_fin[0] > 12) {
       $fin = ($heure_fin[0]%12).":".$heure_fin[1]."PM";
     }
     else {
       $fin = ($heure_fin[0]%12).":".$heure_fin[1]."AM";
     }




    $date = "2017-03-28";

    $dt_debut = new DateTime("2017-03-28 ".str_replace("h", ":", $evenement['heure_globale_debut']).":00");
    $dt_debut->setTimeZone( new DateTimezone('Europe/Paris') );
    // echo $dt_debut->format(DateTime::ISO8601). "<br>";
    // echo "VDdv ".$dt_debut->getTimestamp();
    // echo "<br>".getIcalDate($dt_debut->getTimestamp());
    $dt_fin = new DateTime("2017-03-28 ".str_replace("h", ":", $evenement['heure_globale_fin']).":00");
    $dt_fin->setTimeZone( new DateTimezone('Europe/Paris') );
    // echo $dt_fin->format(DateTime::ISO8601);

     $datetime_debut = $date." ".$debut;
     $datetime_fin = $date." ".$fin;
    //  getIcalDate

    // echo getIcalDate($dt_debut->getTimestamp())." ".getIcalDate($dt_fin->getTimestamp());

      header('Content-type: text/calendar; charset=utf-8');
      header('Content-Disposition: attachment; filename=invite.ics');


      $ics = new ICS(array(
        'location' => $user['adresse'],
        'description' => $evenement['thematique'],
        'dtstart' => getIcalDate($dt_debut->getTimestamp()),
        'dtend' => getIcalDate($dt_fin->getTimestamp()),
        'summary' => $evenement['nom_evenement'],
        'url' => '',
      ));

      echo $ics->to_string();
    }
    catch (Exception $e) {
      echo $e;
    }
  }
  ?>
