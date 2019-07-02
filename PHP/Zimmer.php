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
            <a href="zimmer_suchen.php?zimmer=1"><img src="../CSS/img/Zimmer/Zimmer1.PNG" width="40%"></a>
        <p>Unser Einzelzimmer ist ideal für kurzfristige Übernachtungen<br>

        </p>

             <br>
    <div>
    <div style="margin-top: 30%">
        <h2>Komfortzimmer</h2>
        <a href="zimmer_suchen.php?zimmer=2"> <img src="../CSS/img/Zimmer/Zimmer2.PNG" width="40%"></a>
        <p>Unser Komfortzimmer ist ideal für stadtnahe Übernachtungen oder romatische Wochenenden zu Zweit</p>
        <br>
    </div>

    <div style="margin-top: 30%">
        <h2>Luxuszimmer</h2>
        <a href="zimmer_suchen.php?zimmer=3"><img src="../CSS/img/Zimmer/Zimmer3.PNG" width="40%"></a>
        <p>Unser Luxuszimmer bietet viel Raum für ein entspanntes Verweilen.</p>
        <br>
    </div>

    <div style="margin-top: 30%">
        <h2>Juniorsuite</h2>
        <a href="zimmer_suchen.php?zimmer=4"><img src="../CSS/img/Zimmer/Zimmer4.PNG" width="40%"></a>
        <p>Junior Suite - Viel Platz und Luxus für ein gemütliches, großzügiges Arrangement</p>
        <br>
    </div>

        <div style="margin-top: 30%">
            <h2>Suitesuperior</h2>
           <a href="zimmer_suchen.php?zimmer=5"><img src="../CSS/img/Zimmer/Zimmer5.PNG" width="40%"></a>
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

<?php
// Verbindung zur DB trennen

mysqli_close($conn);
?>