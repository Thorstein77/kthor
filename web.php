<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Webdevelopment Projekter</title>

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

    <h1 class="webH1">Web Development</h1>

    <main class="webMain">
        <div class="webInfo">
            <p>
                Jeg har i løbet af uddannelsen som multimediedesigner udviklet en del hjemmesider.<br>
                Disse er udviklet i samarbejde med andre studerende og jeg kan derfor ikke tage æren for alt koden selv.<br>
                Jeg har under min uddannelse stiftet bekendskab med, og føler mig godt tilpas med at arbejde i, følgende sprog:<br><br>
            </p>

            <ul>
                <li>HTML5</li>
                <li>CSS3 & SCSS</li>
                <li>jQuery, samt Ajax og plugins</li>
                <li>JSON</li>
                <li>PHP & SQL</li>
            </ul>
            <br>
            <p>
                Her følger et lille udpluk af de hjemmesider jeg har været med til at udvikle.
            </p>
        </div>

        <div class="grid">
            <div class="gridObject">
                <h2>
                    Dominio dePontas
                </h2>

                <div>
                    <a href="codeprojects/ddp/index.html" target="_blank">
                        <img src="images/ddpTeaser.png">
                    </a>
                </div>

                <p>
                    Denne hjmmeside er udviklet som et af vores bunde projekter på andet semester.<br>
                    Dette var både et design, kommunikations og webdevelopment projekt.<br>
                    <a href="https://github.com/Thorstein77/ddp" target="_blank"><b>Link til koden på github.</b></a>
                </p>
            </div>

            <div class="gridObject">
                <h2>
                    Gyserbasen
                </h2>

                <div>
                    <a href="codeprojects/gyserbasen/index.html" target="_blank">
                        <img src="images/gbWeb.PNG">
                    </a>
                </div>

                <p>
                    Denne hjemmeside er stadig under udvikling og af sikkerhedsmæssige årsager er den ikke lagt op endnu. Koden kan dog findes gennem linket til github.<br>
                    Denne hjemmeside startede ud som et projekt med formål at lære at bruge API.<br>
                    Vi har siden udvidet den med PHP kode og en database, men vi bruger stadig API.<br>
                    <a href="https://github.com/Thorstein77/gb" target="_blank"><b>Link til koden på github.</b></a>
                </p>
            </div>

            <div class="gridObject">
                <h2>
                    JCI Slagelse
                </h2>

                <div>
                    <a href="codeprojects/jci/index.html" target="_blank">
                        <img src="images/jciWeb.PNG">
                    </a>
                </div>

                <p>
                    Dette er eksamensprojekt fra andet semester.<br>
                    Hjemmesiden blev udviklet for JCI Slagelse.<br>
                    <a href="https://github.com/Thorstein77/jci" target="_blank"><b>Link til koden på github.</b></a>
                </p>
            </div>

            <div class="gridObject">
                <h2>
                    kthor.dk
                </h2>

                <div>
                    <img src="images/kthorWeb.PNG">
                </div>

                <p>
                    Her kan koden til denne side downloades.<br>
                    <a href="https://github.com/Thorstein77/kthor" target="_blank"><b>Link til koden på github.</b></a>
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