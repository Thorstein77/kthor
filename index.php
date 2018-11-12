<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <?php
    require ("php/head.php");
    ?>
    <title>Kristian Thorsteinsson</title>
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