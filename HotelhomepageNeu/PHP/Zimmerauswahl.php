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

        <nav>
            <ul class="clearfix">
                <li><a href="Index.php">Startseite</a></li>
                <li><a href="Zimmerauswahl.php">Zimmerauswahl</a></li>
                <li><a href="ÜberUns.php">Über Uns</a></li>

            </ul>
        </nav>

        <a class="Logo" href="Index.php">
            <img src="../CSS/img/Hotel.jpg"  width="40%" alt="Hotel-grp5">
        </a>

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