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

    <!---
    Button zum Registrieren / Login
    -->

    <div class="body-container">
        <section class="body">
            <h1>Hotelhomepage Gruppe 5</h1>
            <a class="button" href="Login.php">Registrieren</a>
            <a class="button" href="Registrieren.php">Login</a>
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