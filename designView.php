<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Design Projekt</title>

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
require ("db/db.php");

$var = mysqli_real_escape_string($db, $_GET["variable"]);
$dbDesign = mysqli_query($db, "SELECT * FROM kthordesign WHERE dId = '$var'");
$data = mysqli_fetch_assoc($dbDesign);
?>

    <div class="designView">
        <h1>
            <?php echo $data["dName"] ?>
        </h1>

        <div class="flex">
            <div>
                <img src="<?php echo $data["dImg1"] ?>">
            </div>

            <div>
                <img src="<?php echo $data["dImg2"] ?>">
            </div>
        </div>
    </div>

<?php
require ("php/footer.php");
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

</script>

</body>
</html>