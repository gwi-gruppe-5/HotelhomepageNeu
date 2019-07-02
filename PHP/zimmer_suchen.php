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


    ?>


    <form action="?suchen=1" method="post">


        Anreisedatum
        <input type="date" name="date1">
        Abreisedatum
        <input type="date" name="date2"><br>
        <?php
        if(isset($_GET['zimmer']))
        {
            $auswahl = $_GET['zimmer'];
            if ($auswahl == 1)
            {
                echo "<input type=\"radio\" name=\"zimmer\" value=\"1\" checked>Einzelzimmer <br>
                     <input type=\"radio\" name=\"zimmer\" value=\"2\"> Komfortzimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"3\">Luxuszimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"4\">Juniorsuite<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"5\">Suitesuperior<br>";
            }
            elseif ($auswahl == 2)
            {
                echo "<input type=\"radio\" name=\"zimmer\" value=\"1\" >Einzelzimmer <br>
                     <input type=\"radio\" name=\"zimmer\" value=\"2\" checked> Komfortzimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"3\">Luxuszimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"4\">Juniorsuite<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"5\">Suitesuperior<br>";
            }

            elseif ($auswahl == 3)
            {
                echo "<input type=\"radio\" name=\"zimmer\" value=\"1\" >Einzelzimmer <br>
                     <input type=\"radio\" name=\"zimmer\" value=\"2\"> Komfortzimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"3\"checked>Luxuszimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"4\">Juniorsuite<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"5\">Suitesuperior<br>";
            }
            elseif ($auswahl == 4)
            {
                echo "<input type=\"radio\" name=\"zimmer\" value=\"1\" >Einzelzimmer <br>
                     <input type=\"radio\" name=\"zimmer\" value=\"2\"> Komfortzimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"3\">Luxuszimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"4\" checked>Juniorsuite<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"5\">Suitesuperior<br>";
            }
            elseif ($auswahl == 5)
            {
                echo "<input type=\"radio\" name=\"zimmer\" value=\"1\" >Einzelzimmer <br>
                     <input type=\"radio\" name=\"zimmer\" value=\"2\"> Komfortzimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"3\">Luxuszimmer<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"4\">Juniorsuite<br>
                     <input type=\"radio\" name=\"zimmer\" value=\"5\" checked>Suitesuperior<br>";
            }
        }

        ?>
        <input type="submit" value="Zimmer suchen">


    </form>


    <div class="freie-zimmer">

        <?php

        include("../PHP/include/DBVerbindung.php");
        if (isset($_GET['suchen']))
        {
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            $zimmerID = $_POST['zimmer'];
            $sql = "SELECT  zimmer.ZimmerID FROM zimmer LEFT JOIN buchung on zimmer.ZimmerID = buchung.Zimmer_ZimmerID where NOT $date1 BETWEEN buchung.AnreiseDatum and buchung.AbreiseDatum and NOT $date2 BETWEEN buchung.AnreiseDatum and buchung.AbreiseDatum and buchung.AnreiseDatum> '2019-06-30' and zimmer.ZimmerKategorieTyp_ZimmerKategorieTypID = $zimmerID";
            $zimmer = mysqli_query($conn,$sql);
            if ($zimmer->num_rows >0)
            {
                while ($row = $zimmer->fetch_assoc())
                {
                    $nr = $row['ZimmerID'];
                    $sql = "SELECT ZimmerKategorieDescLang FROM zimmerkategorietyp where ZimmerKategorietypID = $zimmerID";



                    echo "<div class='vZimmer'>
                          <h1>Zimmer NR $nr  </h1>
                          <img src='../CSS/img/Zimmer/Zimmer$zimmerID.PNG'

                          </div>
    
                    ";
                    if($nr==1)
                    {
                        echo"Unser Einzelzimmer ist ideal für kurzfristige Übernachtungen.

                             Dieses Zimmer bietet folgende Ausstattung:
                             <ul><li>Dusche</li><li>Einzelbett</li></ul>";
                    }
                    if($nr==2)
                    {
                        echo
                        "Unser Komfortzimmer ist ideal für stadtnahe Übernachtungen oder romatische Wochenenden zu Zweit

                        Dieses Zimmer bietet folgende Ausstattung:
                        <ul><li>Dusche</li><li>Ehebett</li></ul>";
                    }
                    if($nr==3)
                    {
                        echo
                        "Unser Luxuszimmer bietet viel Raum für ein entspanntes Verweilen.
                         Dieses Zimmer bietet folgende Ausstattung:
                        <ul><li>Dusche</li><li>Einzelbett</li><li>Fernseher</li></ul>";
                    }
                    if($nr==4)
                    {
                        echo "Junior Suite - Viel Platz und Luxus für ein gemütliches, großzügiges Arrangement";
                    }

                    if($nr==5)
                    {
                        echo
                        "Die Suite Superior - das ganz besondere Erlebnis für die besonderen Momente im Leben";
                    }
                    if($nr==6)
                    {
                        echo"Unser Einzelzimmer ist ideal für kurzfristige Übernachtungen.

                             Dieses Zimmer bietet folgende Ausstattung:
                             <ul><li>Dusche</li><li>Einzelbett</li></ul>";
                    }
                    if($nr==7)
                    {
                        echo "Junior Suite - Viel Platz und Luxus für ein gemütliches, großzügiges Arrangement";
                    }

                }
            }


        }



        ?>

    </div>

    <div class="footer-container">
        <?php
        include("../PHP/include/Footer.php");
        ?>
    </div>

</div>

</body>

