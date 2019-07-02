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

       }
       include("../PHP/include/DBVerbindung.php");
       if(isset($_GET['buchen']))
       {

           if($_GET['buchen']==1)
           {

               $date2 = $_POST['date2'];
               $date1 = strtotime($_POST["date1"]);
               $date1 = date('Y-m-d ', $date1);
               $date2 = strtotime($_POST["date2"]);
               $date2 = date('Y-m-d ', $date2);
               $anzahl =$_POST['anzahl'];

               $cDate = date("Y-m-d");
               echo $date1;
               $sql = "INSERT INTO `buchung` (`BuchungID`, `BuchungDatum`, `AnreiseDatum`, `AbreiseDatum`, `AnzahlPersonen`, `Zimmer_ZimmerID`, `Kunde_KundeID`) VALUES (NULL,'$cDate','$date1' , '$date2',$anzahl , $zimmerNr, '3')";


               if($conn->query($sql)==true)
               {
                   echo "Zimmer gebucht vom ".$date1." bis zum ".$date2;
               }
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

           }
       }
       ?>
   </div>

    <form action="?buchen=1&auswahl=1" method="post">
        Anreisedatum
        <input type="date" name="date1">
        Abreisedatum
        <input type="date" name="date2"><br>
        Anzahl Personen
        <input type="text" name="anzahl"><br>
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