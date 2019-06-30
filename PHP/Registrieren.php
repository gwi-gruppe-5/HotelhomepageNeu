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
            $sql = "SELECT email FROM benutzer where email = '$email'";
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
            $sql = "INSERT INTO benutzer (IP, sessionID, nickname, passwort, gruppenname, email)
                VALUES ('$ip', '1234', '$nickname', '$passwort','$gruppenname', '$email')";

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
            <input type="text" name="nickname" placeholder="Nickname" required><br><br>

            <input type="text" name="gruppenname" placeholder="Gruppenname" required><br><br>

            <input type="email" name="email" placeholder="Email" required><br><br>

            <input type="password" name="passwort" placeholder="Passwort" required><br><br>

            <input type="password" name="passwort2" placeholder="Passwort" required><br><br>

            <input type="submit" value="Abschicken">
        </div>
    </form>

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
}
mysqli_close($conn);
?>