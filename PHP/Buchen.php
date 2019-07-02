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
       <?php
       if(isset($_GET['auswahl']))
       {
           $zimmerNr = $_GET['auswahl'];
           $date1 = $_GET['d1'];
           $date2 = $_GET['d2'];
       }
       ?>
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