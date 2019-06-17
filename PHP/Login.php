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
    include("DBVerbindung.php");
    ?>

    <?php
    if(isset($_GET['login'])) {
        $email = $_POST['email'];
        $passwort = md5($_POST['passwort']);

        $sql = "SELECT *FROM kunde where email ='$email' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            if ($row['passwort'] == $passwort) {
                $_SESSION['id'] = $row['nickname'];
            }
        } else {

            echo "<div class=error-container>
                    <p>email oder passwort falsch</p>
                  </div>";
        }
    }
    if (isset($_GET['logout'])){
        session_unset();
    }
    if (isset($_SESSION['id'])){
        $i = $_SESSION['id'];
        echo "";
        ?>
        <div class="logout-container">
           <form action="?logout=1" method="post">
                <input type="submit" value="Logout">
            </form>
        </div>
        <?php
    }
    else {

        ?>

        <form action="?login=1" method="post">
            <div class="login">
                <h1>Login</h1>
                <hr>
                <input type="email" name="email" placeholder="Email eingeben"><br><br>

                <input type="password" name="passwort" placeholder="Passwort eingeben"><br>

                <input type="submit" value="Abschicken">
            </div>
        </form>


        <?php
    }
    ?>

    <div class="footer-container">
        <footer>Gruppe 5</footer>
        <footer>Henrichs Niko, Frechen Kai, Naumann Marcel, Niehaves Lennart</footer>
    </div>

</div>

</body>
