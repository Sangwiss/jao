<?php

// Database Connection
$cnn = mysql_connect("localhost", "agencesouv2017", "qDmhMntK9HXB77Ez") or die("Error connecting to database\n".mysql_error()."\n");
$db = mysql_select_db("agencesouvertes2017", $cnn);

?>