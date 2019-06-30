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

        <?php
        include("../PHP/include/Header.php");
        ?>

        <a class="Logo" href="Index.php">
            <img src="../CSS/img/Hotel.jpg"  width="40%" alt="Hotel-grp5">
        </a>

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