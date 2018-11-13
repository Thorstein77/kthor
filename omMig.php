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

                    <img src="images/ddpTeaser.png">
                    <p>
                        Eksempel på et design jeg var med til at udarbejde under et skoleprojekt.
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

        <section class="private">
            <h2>Om Mig - Personligt</h2>

            <div class="flex">
                <div class="privateSkill">
                    <h3>
                        Leveforhold
                    </h3>
                    <br>
                    <p>
                        Jeg er 29 år og bor i Slagelse med min kæreste, min hund og kat.
                        Min kæreste og jeg har været sammen i over 5 år, og boet sammen i snart 2.<br><br>
                        Min fritid bruger jeg primært på forskellige hobbier, f.eks. maler og spiller
                        jeg Warhammer 40k.<br><br>
                        Ud over hobbier bruger jeg også tid på at forbedre mine færdigheder
                        i applikationer som Photoshop og Illustrator, samt bruger tid på at øve mig i
                        opsætning af hjemmesider, kode i c# mm.<br><br>
                    </p>
                </div>

                <div class="privateSkill" id="hobby">
                    <h3>
                        Hobby
                    </h3>
                    <br>
                    <div class="flex">
                        <div class="hobby">
                            <p>
                                Jeg ser ikke udelukkende mit hobby arbejde som værende tidsfordriv.<br><br>
                                Når jeg f.eks. maler Warhammer bruger jeg en del tid på at finde farve kombinationer,
                                normalt på
                                <a href="https://color.adobe.com/create/color-wheel/" target="_blank" style="color: white">
                                    Adobe's farve hjul.
                                </a>
                                Jeg får derfor øvet mig i farveteori, samtidig med jeg hygger mig med min hobby.<br><br>
                                Skulle det havde interesse, kan noget af mit hobby arbejde ses ved at klikke på billedet her.
                                <a href="https://www.instagram.com/thorstein77/" target="_blank">
                                    <img src="images/starweaver.jpg">
                                </a>
                            </p>
                        </div>

                        <div class="hobby">
                            <p>
                                Nogle af mine hobbier er dog ikke helt så produktive. Efter en lang dag kan jeg godt
                                finde på at stresse af ved at spille videospil.<br><br>
                                Nogle weekender mødes jeg med venner for at spille Pathfinder, et pen and paper rollespil
                                baseret på Dungeons and Dragons.<br><br>
                            </p>

                            <ul>
                                <li>Warhammer</li>
                                <li>Pen and Paper Rollespil</li>
                                <li>Videospil</li>
                            </ul>
                            <br>
                            <img src="images/Wanted.png">
                            <p>
                                Ovenfor er et eksempel på et lille sjovt projekt jeg har lavet i Photoshop
                                i min fritid.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
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