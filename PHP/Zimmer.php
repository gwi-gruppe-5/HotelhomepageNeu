<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="icon" href="../favicon.png" type="img/png">
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

        <?php
        include("../PHP/include/Header.php");
        ?>



    </div>

    <div class="body-container">
        <h1>Unsere Zimmer</h1>
        <div>


        <h2>Einzelzimmer</h2>
        <img src="../CSS/img/Zimmer/Z3.PNG" width="40%">
        <p>Unser Einzelzimmer ist ideal für kurzfristige Übernachtungen<br>

        </p>

             <br>
    <div>
    <div style="margin-top: 30%">
        <h2>Komfortzimmer</h2>
        <img src="../CSS/img/Zimmer/Z2.PNG" width="40%">
        <p>Unser Komfortzimmer ist ideal für stadtnahe Übernachtungen oder romatische Wochenenden zu Zweit</p>
        <br>
    </div>

    <div style="margin-top: 30%">
        <h2>Luxuszimmer</h2>
        <img src="../CSS/img/Zimmer/Z3.PNG" width="40%">
        <p>Unser Luxuszimmer bietet viel Raum für ein entspanntes Verweilen.</p>
        <br>
    </div>

    <div style="margin-top: 30%">
        <h2>Juniorsuite</h2>
        <img src="../CSS/img/Zimmer/Z6.PNG" width="40%">
        <p>Junior Suite - Viel Platz und Luxus für ein gemütliches, großzügiges Arrangement</p>
        <br>
    </div>

        <div style="margin-top: 30%">
            <h2>Suitesuperior</h2>
            <img src="../CSS/img/Zimmer/Z8.PNG" width="40%">
            <p>Die Suite Superior - das ganz besondere Erlebnis für die besonderen Momente im Leben</p>
            <br>
        </div>



    </div>

    <?php
    //  DB Verbindung siehe verbindung.php
    include("../PHP/include/DBVerbindung.php");
    ?>


    <!---
    - Footer dort werden Namen und Gruppe aufgelistet
    -->
            <div class="footer-container" style="margin-top: 30%">
                <?php
                include("../PHP/include/Footer.php");
                ?>
            </div>

</div>

</body>
</html>