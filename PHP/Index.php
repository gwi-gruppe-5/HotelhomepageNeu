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

    <!---
    Button zum Registrieren / Login
    -->



    <div class="body-container">
        <section class="body">
            <!--<h1>Hotel Serenity</h1>-->
            <div class="body-container">
                <img src="../CSS/img/Main.png"  height="900" style="width:100%;">
                <div class="centered">Viel Spaß in eurem Hotel Serenity!</div>
                <br>
            </div>


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
    <?php
    include("../PHP/include/Footer.php");
    ?>

</div>

</body>
</html>