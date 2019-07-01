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
    if (isset($_GET['suchen']))
    {
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
        $zimmerID = $_POST['zimmer'];

    }

    ?>


    <form action="?suchen=1" method="post">
        Anreisedatum
        <input type="date" name="date1">
        Abreisedatum
        <input type="date" name="date2"><br>
        <input type="radio" name="zimmer" value="1" checked>Einzelzimmer <br>
        <input type="radio" name="zimmer" value="2"> Komfortzimmer<br>
        <input type="radio" name="zimmer" value="3">Luxuszimmer<br>
        <input type="radio" name="zimmer" value="4">Juniorsuite<br>
        <input type="radio" name="zimmer" value="5">Suitesuperior<br>
        <input type="submit" value="Zimmer suchen">


    </form>


    <div class="freie-zimmer">
        <?php
            
        ?>


    </div>

    <div class="footer-container">
        <?php
        include("../PHP/include/Footer.php");
        ?>
    </div>

</div>

</body>

