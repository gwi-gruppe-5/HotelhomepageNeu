<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="icon" href="../favicon.png" type="img/png">
    <link rel="stylesheet" href="../CSS/styleAllg.css">
    <link rel="stylesheet" href="../CSS/Logout.css">
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


    <!---
    Button zum Registrieren / Login
    -->

    <div class="body-container">

        <div class="introduction-text">
            <center><h>Herzlich willkommen</h>
            <p>
                Unser Hotel mit Meerblick bietet allen Besuchern ein unvergessliches Erlebnis.<br>
                Durch eine schöne Lage in direkter Strandnähe ist ein toller Urlaub garantiert!<br>
                Wir wünschen Ihnen einen schönen Urlaub in unserem 5-Sterne Hotel.<br><br>
            </p>
            <h2>Unsere Geschichte:</h2>
            <p> Seit vielen Jahren waren wir auf der Suche nach dem perfekten Ort für unser Hotel.<br>
                    In diesen vielen Jahren haben wir viele Orte ausprobiert und uns entschlossen unser Hotel<br>
                    in Bocholt zu starten. Der Ort war der perfekte Start für eine erfolgreiche Erfolgsgeschichte<br>
                    eines mit viel Liebe erbauten Hotels. Der Name Serenity kam durch de Besuch von Joss Whedon,<br>
                    den Direktor des Films Serenity aus dem Jahr 2005. Er war ein großartiger Mann dem wir viel<br>
                    zu verrdanken haben. Aus diesem Grund haben wir beschlossen diesem großartigem Film alle Ehre<br>
                    zu machen und unser Hotel danach benennen.<br>
                </p></center>

        </div>

        <section class="body">
            <h1>Hotelhomepage Gruppe 5</h1>
            <center><a class="button" href="Login.php">Login</a></center><br>
            <center><a class="button" href="Registrieren.php">Registrieren</a></center>
        </section>

        <div class="text-container">
            <center><article><br>
                    Um Zimmer reservieren zu können, müssen sie sich anmelden/registrieren.</article></center>
        </div>
    </div>

    <!---
    - Footer dort werden Namen und Gruppe aufgelistet
    -->
    <div class="footer-container">
        <?php
        include ("../PHP/include/Footer.php")
        ?>
    </div>

</div>

</body>
</html>