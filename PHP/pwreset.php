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



    <?php

    $db = mysqli_connect('localhost', 'root', '', 'hotelhomepagegruppe5') or die('Es konnte keine Verbindung zur Datenbank aufgebaut werden.');

    $search_user = $db->prepare("SELECT * FROM kunde WHERE kundeid = ?");
    $search_user->bind_param('i',$_SESSION['user']);
    $search_user->execute();
    $search_result = $search_user->get_result();

    if($search_result->num_rows == 1):
        $search_object = $search_result->fetch_object();
    endif;

    	echo'<form action="" method="post">';
		echo'<i style="font-size:16px;">Geben sie ihr altes Passwort ein:</i>';

		echo'<input type="password" name="pswalt" placeholder="altes Passwort"><br>';
		echo'<br><br>';

		echo'<i style="font-size:16px;">Geben sie ihr neues Passwort ein:</i>';

		echo'<input type="password" name="pswneu" placeholder="neues Passwort"><br>';
		echo'<br>';

		echo'<i style="font-size:16px;">Passwort wiederholen:</i>';

		echo'<input type="password" name="pswerneut" placeholder="Passwort wiederholen"><br>';
		echo'<br>';

		echo'<input type="submit" class="submitbtn" name="change" value="Ändern"> <button type="button" onclick="window.location.href=\'index.php\'" class="cancelbtn">zurück</button><br>';


    if(isset($_POST['user'])):

        $passwort = ($search_object->passwort);
        $passwortneu = $_POST['pswneu'];
        $passworterneut = $_POST['pswerneut'];
        $passwortalt = $_POST['pswalt'];
        $kundeid = $search_object->kundeid;
        //--------------------------




        if(empty($passwortalt)):
            echo'<div style="text-align:center; background-color:rgba(255, 255, 255, 0.5); padding:8px;">';
            echo'</div>';
        else:
            if($passwort != md5($passwortalt)):
                //altes Passwort falsch
                echo'<div style="text-align:center; background-color:rgba(255, 255, 255, 0.5); padding:8px;">';
                echo'</div>';
            else:
                //altes Passwort richtig
                //Überprüfung, ob neue Passwörter eingegeben wurden
                if(empty($passwortneu)):
                    echo'<div style="text-align:center; background-color:rgba(255, 255, 255, 0.5); padding:8px;">';
                    echo'</div>';
                else:
                    //Überprüfung, ob beide Eingaben übereinstimmen
                    if($passwortneu != $passworterneut):
                        echo'<div style="text-align:center; background-color:rgba(255, 255, 255, 0.5); padding:8px;">';
                        echo'</div>';
                    else:
                        //Eintragen des neuen Passwortes
                        $passwortneu = md5($passwortneu);
                        $update = $db->prepare("UPDATE kunde SET passwort = ? WHERE kundeid = kundeid");//Überschreibt das Passwort bei der ID des Nutzers
                        $update->bind_param('s', $passwortneu);
                        $update->execute();
                        if($update !== false):
                            echo'<div style="text-align:center; background-color:rgba(255, 255, 255, 0.5); padding:8px;">';
                            echo 'Das Passwort wurde geändert.';

                            echo'</div>';
                        endif;
                    endif;
                endif;
            endif;


        endif;
    endif;

    //Ende des Eintragens
    echo'</form>';

    ?>

    <!---
    - Footer dort werden Namen und Gruppe aufgelistet
    -->
    <div class="footer-container">
        <?php
        include("../PHP/include/Footer.php");
        ?>
    </div>

</div>

</body>
</html>

<?php
// Verbindung zur DB trennen

mysqli_close($conn);
?>