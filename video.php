<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <?php
    require ("php/head.php");
    ?>
    <title>Video Projekter</title>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>
    <?php
        require ("php/header.php");
    ?>
    <main class="videoMain">
        <div class="videoTitle">
            <h1>Video</h1>

            <p>Følgende er et par eksempler på videoer jeg har været med til at producere.<br>
            Jeg har erfaring med video produktion i Adobe Premier Pro samt animation og effekter i Adobe After Effects.</p>
        </div>

        <div class="flex">
            <div class="videoObject">
                <h2>Multimedie Duellen</h2>

                <div class="videoResponsive">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/me1FCEM_Uwc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

                <p>Denne video er produceret for Erhvervsakademiet Slagelse med formål at promovere den nye studieordning på Multimediedesigner uddannelsen.<br>
                Vi havde ikke mulighed for at opnå optimale forhold for green og bluescreen under optagelserne, hvilket desværre har haft en indflydelse på kvaliteten.</p>

            </div>

            <div class="videoObject" id="skelet">
                <h2>Det Ensomme Skelet</h2>
                <div class="videoResponsive">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vwcbbWs5ILY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <p>Denne video er produceret for Slagelse Musikhus, til brug på "De Dødes Nat" 2018.<br>
                Baggrunde og figurer er produceret i Adobe Illustrator, og efterfælgende animeret i Adobe After Effects.</p>
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