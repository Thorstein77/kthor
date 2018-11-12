<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Kristian Thorsteinsson</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Tillader brug af Font Awesome ikoner -->
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <!-- Googlefonts -->

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

        <?php
        require ("php/header.php");
        ?>
    <div class="background">
        <main class="indexMain">
            <div class="info">

                <h1>
                    Kort om mig
                </h1>

                <div class="flex">
                    <p>
                        Mit navn er Kristian og jeg læser Multimediedesign på
                        Erhvervsakademi Sjælland i Slagelse.<br>
                        Jeg leder pt. efter en praktikplads indenfor Webdesign
                        og / eller Webdevelopment.
                    </p>

                    <div>
                        <img src="images/mig.JPG" alt="Picture of me">
                    </div>
                </div>
            </div>

            <?php
            require ("php/slide.php");
            ?>
        </main>

        <?php
        require("php/footer.php");
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

    </script>

</body>
</html>