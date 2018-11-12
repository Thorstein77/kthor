<header>
    <div class="menuBar">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.svg">
            </a>
        </div>

        <div class="burger">
            <button class="burgerDrop">
                <i class="fas fa-bars"></i>
            </button>

            <div class="burgerCnt">
                <div class="flex">
                    <a href="index.php">
                        <p>Forside</p>
                    </a>

                    <a href="design.php">
                        <p>Design</p>
                    </a>

                    <a href="web.php">
                        <p>Web</p>
                    </a>

                    <a href="video.php">
                        <p>Video</p>
                    </a>

                    <a href="omMig.php">
                        <p>Om Mig</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $('.burgerDrop').click(function () {
        $('.burgerCnt').toggle("slow")
    })
</script>