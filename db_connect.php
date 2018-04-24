<?php
$dbhost = "localhost";
$dbuser = "datingSiteAdmin";
$dbpass = "datingpass";
$db = "datingSite";

/* host, user, password, database */
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(!$link) {
	echo "Kunde inte kontakta databasen ";
	exit();
}

/*
Kollar att teckenuppsättningen är utf-8
*/
if(!mysqli_set_charset($link, "UTF8")) {
	echo "kunde inte använda UTF-8";
	exit();
}

/*
Väljer databasen med mysqli_select_db-funktionen
$link-variabeln används för att kontakta databasen
*/
if(!mysqli_select_db($link, $db)) {
	echo "Kunde inte kontakta databasen $db";
	exit();
}
?>