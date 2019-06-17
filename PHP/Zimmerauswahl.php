<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="../CSS/styleAllg.css">
</head>
<body>

<!--
 3.1: - Navgiationsstruktur
      - Benamung
      - Layout
-->

<div class="container">
    <div class="header-container">
        <a class="Logo" href="sytleAllg">
            <img src="../CSS/img/Hotel.jpg" height="130" alt="Hotel-grp5">
        </a>
        <nav>
            <ul class="clearfix">
                <li><a href="Zimmerauswahl">Zimmerauswhal</a></li>
                <li><a href="ÜberUns">Über Uns</a></li>
                <li><a href="Zimmerauswahl">Zimmerauswhal</a></li>
                <li><a href="Zimmerauswahl">Zimmerauswhal</a></li>
                <li><a href="Zimmerauswahl">Zimmerauswhal</a></li>
            </ul>
        </nav>
    </div>


    <?php
    //  DB Verbindung siehe verbindung.php
    include("verbindung.php");
    ?>


    <!---
    - Footer dort werden Namen und Gruppe aufgelistet
    -->
    <div class="footer-container">
        <footer>Gruppe 5</footer>
        <footer>Henrichs Niko, Frechen Kai, Naumann Marcel, Niehaves Lennart</footer>
    </div>

</div>

</body>
</html>