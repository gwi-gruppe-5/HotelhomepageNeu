<?php
$servername ="127.0.0.1";
$username ="User";
$passwort ="";
$db ="";

$conn = mysqli_connect($servername, $username, $passwort, $db);
//Die Session wird gestartet sobald man die verbindung.php in andere Seiten einfügt
session_start();
?>