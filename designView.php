<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <?php
    require ("php/head.php");
    ?>
    <title>Design Projekt</title>
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