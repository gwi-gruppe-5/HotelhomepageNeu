<?php
$servername ="";
$username ="";
$passwort ="";
$db ="";

$conn = mysqli_connect($servername, $username, $passwort, $db);
//Die Session wird gestartet sobald man die verbindung.php in andere Seiten einfügt
session_start();
?>