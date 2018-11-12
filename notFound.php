<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <?php
    require ("php/head.php");
    ?>
    <title>404</title>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require("php/header.php");
?>
<div class="errorPage">
    <div class="errorDiv">
        <h1>404:</h1>
        <br><p>Vi kan ikke finde siden du leder efter.</p>
        <br><a href="index.php" style="color: white">Klik her for at gå tilbage til forsiden.</a>
        <br><br><p>Eller klik et af billederne for at gå til den respektive side</p>
    </div>
    <div class="errorDiv">
        <?php
        include ("php/slide.php")
        ?>
    </div>
</div>
<?php
require("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

</script>

</body>
</html>