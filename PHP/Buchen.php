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
           $date1 = $_POST['date1'];
           $date2 = $_POST['date2'];
       }

       if(isset($_GET['buchen']))
       {
           if{}
       }
       ?>
   </div>

    <form action="?buchen=1" method="post">
        Anreisedatum
        <input type="date" name="date1">
        Abreisedatum
        <input type="date" name="date2"><br>
        <input type="submit" value="Buchen">

    </form>


    <!---
    - Footer dort werden Namen und Gruppe aufgelistet
    -->
    <?php
    include("../PHP/include/Footer.php");
    ?>

</div>

</body>
</html>