<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <?php
    require ("php/head.php");
    ?>
    <title>Sigende titel</title>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>

    <?php
        require ("php/header.php");
    ?>

    <main class="aboutMain">
        <h1>
            Om mig
        </h1>

        <section class="skills">
            <h2>Kompetencer</h2>

            <div class="grid">
                <div class="skill" id="skillsApps">
                    <h3>
                        Software og applikationer
                    </h3>
                    <br>
                    <p>
                        Følgende liste indeholder de applikationer jeg har opbygget
                        kompetence i at bruge igennem undervisning, skoleprojekter
                        og personlige projekter.
                    </p>
                    <br>
                    <ul>
                        <li>PhpStorm</li>
                        <li>Visual Studio</li>
                        <li>Github</li>
                        <li>Adobe Photoshop</li>
                        <li>Adobe Illustrator</li>
                        <li>Adobe InDesign</li>
                        <li>Adobe XD</li>
                        <li>Adobe Premier Pro</li>
                        <li>Adobe After Effects</li>
                    </ul>
                </div>
                <br>
                <div class="skill" id="skillsWide">
                    <h3>
                        Faglige kompetencer
                    </h3>
                    <br>
                    <p>
                        Jeg har gennem uddannelse udviklet kompetence indenfor følgende områder:<br><br>
                    </p>

                    <ul>
                        <li>Webdesign</li>
                        <li>Logodesign</li>
                        <li>Design til tryk</li>
                        <li>Video produktion</li>
                        <li>Motion Design</li>
                        <li>Animation til video</li>
                        <li>Webdevelopment</li>
                        <li>SEO</li>
                        <li>Usability testing</li>
                        <li>SoMe Strategi</li>
                    </ul>
                    <br>
                    <p>
                        Jeg har arbejdet med alle disse områder i skoleprojekter, og i nogle enkelte
                        kundeprojekter skolen har fundet til os. F.eks. har jeg redigeret video for
                        Slagelse Produktionsskole og lavet en kort animationsfilm for Slagelse Musikhus.
                    </p>
                </div>
                <br>
                <div class="skill" id="skillsDesign">
                    <h3>
                        Design
                    </h3>
                    <br>
                    <p>
                        Jeg har arbejdet med projekter indenfor følgende:
                    </p>

                    <br>
                    <ul>
                        <li>Webdesign</li>
                        <li>Logodesign</li>
                        <li>Animation</li>
                        <li>Motion Design</li>
                    </ul>
                    <br>
                    <p>
                        Indenfor design har jeg primært arbejdet med Web- og Logodesign.<br><br>
                        Indenfor Webdesign har jeg arbejdet med projekter fra research fasen, gennem skitse,
                        wireframe og til sidst til mockup og prototype. Wireframe og mockup har jeg primært
                        arbejdet med i Photoshop og prototyper har jeg primært arbejdet med i Adobe XD.<br><br>
                        Jeg har arbejdet med animation og motion design i After Effects i forbindelse med et
                        video projekt vi lavede for Slagelse Musikhus. Vi arbejdede med disse projekter som vi
                        gør med video produktion generelt. Der blev lavet script, shotlist, storyboard og animatics
                        inden vi startede udviklingen af vores design elementer.<br><br>
                    </p>
                </div>
                <br>
                <div class="skill" id="skillsWeb">
                    <h3>
                        Webdevelopment
                    </h3>
                    <br>
                    <p>
                        Jeg har erfaring med at udvikle responsive hjemmesider ved hjælp af HTML og CSS.<br><br>
                        Dertil har jeg erfaring med at skrive jQuery til slideshows, drop down menuer mm.,
                        samt brug af Ajax til at kalde data fra API'er. Jeg kan også læse og skrive JSON kode.<br><br>
                        Jeg har ligeledes erfaring med PHP og SQL, hvor jeg i skoleopgaver har arbejdet
                        med oprettelse af databaser, lister i databaser, og hentning / tilføjelse af data
                        gennem hjemmesider, altså uden om phpmyadmin siden, som jeg dog også kan bruge.<br><br>
                        Jeg kender selvfølgelig også til brug af forskellige former for functions, loops mm.
                        i både PHP og jQuery.<br><br>
                        Jeg har kendskab til, og er i stand til at bruge SEO i min kodning, f.eks. i form af alt og meta
                        tags, samt jeg har kendskab til hvordan en hjemmeside bør struktureres.<br><br>
                        Jeg kan også arbejde i c#, dette er dog pt. kun på hobby plan. At arbejde i c# har
                        givet mig en forståelse for Object Orienteret Programmering.<br><br>
                        Følgende er en liste over sprog jeg på nuværende tidspunkt har de faglige kompetencer
                        til at arbejde i:<br><br>
                    </p>

                    <ul>
                        <li>HTML5</li>
                        <li>CSS3 / SCSS</li>
                        <li>jQuery & Ajax</li>
                        <li>JSON</li>
                        <li>PHP</li>
                        <li>SQL</li>
                    </ul>
                </div>
                <br>
            </div>
        </section>

        <section>
            <h2>Privat</h2>
        </section>
    </main>

    <?php
        require ("php/footer.php");
    ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

</script>

</body>
</html>