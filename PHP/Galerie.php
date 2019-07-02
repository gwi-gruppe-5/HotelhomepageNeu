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

        <!-- Slideshow container -->
        <div class="slideshow-container" style="margin-top: 100px">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="../CSS/img/Rooftop.PNG" style="width:100%">
                <div class="text">Dach</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="../CSS/img/Rezeption.PNG" style="width:100%">
                <div class="text">Rezeption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="../CSS/img/Hotel.jpg" style="width:100%">
                <div class="text">Hotel</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="../CSS/img/Buffet.PNG" style="width:100%">
                <div class="text">Buffet</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="../CSS/img/Personal.PNG" style="width:100%">
                <div class="text">Personal</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="../CSS/img/Pool.PNG" style="width:100%">
                <div class="text">Pool</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="../CSS/img/Strand.PNG" style="width:100%">
                <div class="text">Strand</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="../CSS/img/Frühstück.PNG" style="width:100%">
                <div class="text">Frühstück</div>
            </div>

<br>
            <!-- Next and previous buttons -->


        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center; margin-top: 35%;position: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
        </div>



        

    </div>

    <!---
    - Footer dort werden Namen und Gruppe aufgelistet
    -->
    <?php
    include("../PHP/include/Footer.php");
    ?>

</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>
</body>
</html>
