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


    <?php
    //  DB Verbindung siehe verbindung.php
    include("../PHP/include/DBVerbindung.php");
    ?>


    <!---
    - Footer dort werden Namen und Gruppe aufgelistet
    -->
    <div class="footer-container">
        <?php
        include("../PHP/include/Footer.php");
        ?>
    </div>

</div>

</body>
</html>