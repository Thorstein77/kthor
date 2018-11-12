<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <?php
    require ("php/head.php");
    ?>
    <title>Design Projekter</title>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>
    <?php
    require ("php/header.php");
    require ("db/db.php");
    ?>

    <main class="designMain">
        <div class="designTitle">
            <h1>Design</h1>

            <p>På uddannelsen som Multimediedesigner har jeg primært arbejdet med web og logo design.</p>
        </div>

        <div class="flex">
            <div class="designObject">
                <h2>Honning Logo</h2>

                <div>
                    <img src="images/biLogo.jpg">
                </div>

                <p>
                    Dette var det første logo jeg designede på uddannelsen.<br>
                    Vores opponent gruppe ønskede et design der ville kunne bruges som et stempel på produkter.
                </p>
            </div>

            <div class="designObject">
                <h2>Dominio de Pontas</h2>

                <div>
                    <a href="designView.php?variable=1">
                        <img src="images/ddpTeaser.png">
                    </a>
                </div>

                <p>
                    Dette var en webdesign og development opgave på andet semester.
                </p>
            </div>

            <div class="designObject">
                <h2>Gyserbasen</h2>

                <div>
                    <a href="designView.php?variable=2">
                        <img src="images/gbTeaser.PNG">
                    </a>
                </div>

                <p>
                    Dette projekts oprindelige formål var at øve brug af API.<br>
                    Det er dog blevet udvidet til at inkludere PHP, SQL mm.<br>
                    Vi valgte i studiegruppen at udvikle et fuldt design til dette projekt, selvom dette ikke var et krav fra underviseren.
                </p>
            </div>
        </div>
    </main>

    <?php
    require ("php/footer.php");
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

</script>

</body>
</html>