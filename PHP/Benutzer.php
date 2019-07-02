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
    Button zum Registrieren / Login
    -->



    <div class="body-container">
        <section class="body">
            <h1>Hotelhomepage Gruppe 5</h1>
            <a class="button" href="Login.php">Login</a>
            <a class="button" href="Registrieren.php">Registrieren</a>
<<<<<<< Updated upstream
=======
            <a class="button" href="pwreset.php">Passwort ändern</a>
>>>>>>> Stashed changes
        </section>

        <div class="text-container">
            <article>Um Zimmer reservieren zu können, <br>
                müssen sie sich anmelden/registrieren.</article>
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
