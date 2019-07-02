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
    if(isset($_GET['login'])) {
        $email = $_POST['email'];
        $passwort = md5($_POST['passwort']);

        $sql = "SELECT *FROM kunde where email ='$email' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            if ($row['password'] == $passwort) {
                $_SESSION['id'] = $row['user'];
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

                <input type="email" name="email" placeholder="Email eingeben"><br><br>

                <input type="password" name="passwort" placeholder="Passwort eingeben"><br>

                <input type="submit" value="Abschicken">
            </div>
        </form>


        <?php
    }
    ?>

    <div class="footer-container">
        <?php
        include("../PHP/include/Footer.php");
        ?>
    </div>

</div>

</body>
</html>
