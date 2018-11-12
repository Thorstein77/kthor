<div class="indexSlide">

    <h2>
        Mit Arbejde
    </h2>

    <div class="indexSlideShow">
        <div class="slideShow">
            <h3>Design</h3>
            <a href="design.php">
                <img src="images/ddpTeaser.png">
            </a>
        </div>

        <div class="slideShow">
            <h3>Web Development</h3>
            <a href="web.php">
                <img src="images/web.PNG">
            </a>
        </div>

        <div class="slideShow">
            <h3>Video</h3>
            <a href="video.php">
                <img src="images/video.PNG">
            </a>
        </div>

        <a class="previous" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <p>
        Ovenfor ses eksempler på mit arbejde.
    </p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

    var slide = 1;
    showSlides(slide);

    function plusSlides(n){
        showSlides(slide += n);
    }

    function currentSlide(n) {
        showSlides(slide = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slideShow");

        if (n > slides.length) {slide = 1}
        if (n < 1) {slide = slides.length}
        for(i = 0; i < slides.length; i++){
            slides[i].style.display = "none";
        }
        slides[slide-1].style.display = "block";
    }
</script>