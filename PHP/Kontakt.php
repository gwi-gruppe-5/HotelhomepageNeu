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
            <center><h1>Hotelhomepage Gruppe 5</h1></center>
            <center><a class="button" href="Login.php">Registrieren</a></center>
            <center><a class="button" href="Registrieren.php">Login</a></center>
        </section>

        <div class="text-container">
            <br>
            <center><article>Um Zimmer reservieren zu können, <br>
                müssen sie sich anmelden/registrieren.</article></center>
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