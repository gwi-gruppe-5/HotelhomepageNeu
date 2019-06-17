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
        <a class="Logo" href="Index.php">
            <img src="../CSS/img/Hotel.jpg" height="130" alt="Hotel-grp5">
        </a>
        <nav>
            <ul class="clearfix">
                <li><a href="Zimmerauswahl">Zimmerauswhal</a></li>
                <li><a href="ÜberUns">Über Uns</a></li>
                <li><a href="Zimmerauswahl">Zimmerauswhal</a></li>
                <li><a href="Zimmerauswahl">Zimmerauswhal</a></li>
                <li><a href="Zimmerauswahl">Zimmerauswhal</a></li>
            </ul>
        </nav>
    </div>

    <?php
    //  DB Verbindung siehe verbindung.php
    include("verbindung.php");
    ?>


    <?php
    $showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

    if(isset($_GET['register'])) {
        $error = false;
        $email = $_POST['email'];
        $nickname = $_POST['nickname'];
        $gruppenname = $_POST['gruppenname'];
        $passwort = md5($_POST['passwort']);
        $passwort2 = md5($_POST['passwort2']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
            $error = true;
        }
        if (strlen($passwort) == 0) {
            echo 'Bitte ein Passwort angeben<br>';
            $error = true;
        }
        if ($passwort != $passwort2) {
            echo 'Die Passwörter müssen übereinstimmen<br>';
            $error = true;
        }

        //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
        if (!$error) {
            $sql = "SELECT email FROM kunde where email = '$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "Bereits vergeben";
                $error = true;
            }

        }

        //Keine Fehler, wir können den Nutzer registrieren
        if (!$error) {
            $ip = $_SERVER['REMOTE_ADDR'];
            $sql = "INSERT INTO kunde (KundeID,KName,KVorname,KStraße,KOrt,KMobilNr,KJahresumsatz,user ,password,isAdmin,email,Kplz)
                VALUES ('$KId','$KName','$KVorname','$KStraße','$KOrt','$KMobilNr', ,'$user','$password',0,'$email','$KPlz')";

            if (mysqli_query($conn, $sql)) {
                echo "Erfolgreich registriert";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    if($showFormular)
    {

    ?>

    <form action="?register=1" method="post">
        <div class="Registration">
            <h1>Registration</h1>
            <hr>

            <input type="text" name="KName" placeholder="Name" required><br><br>

            <input type="text" name="KVorname" placeholder="Vorname" required><br><br>

            <input type="text" name="user" placeholder="Benutzername" required><br><br>

            <input type="text" name="KStraße" placeholder="Straße" required><br><br>

            <input type="text" name="KPlz" placeholder="PLZ" required><br><br>

            <input type="text" name="KOrt" placeholder="Ort" required><br><br>

            <input type="email" name="email" placeholder="Email" required><br><br>

            <input type="password" name="passwort" placeholder="Passwort" required><br><br>

            <input type="password" name="passwort2" placeholder="Passwort wiederholen" required><br><br>

            <input type="submit" value="Abschicken">
        </div>
    </form>

    <!---
    - Footer dort werden Namen und Gruppe aufgelistet
    -->
    <div class="footer-container">
        <footer>Gruppe 5</footer>
        <footer>Henrichs Niko, Frechen Kai, Naumann Marcel, Niehaves Lennart</footer>
    </div>

</div>

</body>
</html>

<?php
// Verbindung zur DB trennen
}
mysqli_close($conn);
?>