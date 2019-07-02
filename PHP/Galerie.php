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
        <section class="Galerie">
            <div class="Bilder">
                <img src="../CSS/img/Frühstück.png" width="932" height="500" style="margin-right: 20px;">

                <img src="../CSS/img/Rezeption.png" width="932" height="500">
            </div>
        </section>


        <section class="body">
            <center><h1>Hotelhomepage Gruppe 5</h1></center>
            <center><a class="button" href="Login.php">Registrieren</a></center>
            <center><a class="button" href="Registrieren.php">Login</a></center>
        </section>

        <div class="text-container">
            <center><article>Um Zimmer reservieren zu können, <br>
                müssen sie sich anmelden/registrieren.</article></center>
        </div>
    </div>

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
