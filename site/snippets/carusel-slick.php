
<?= css([
		'../assets/css/home.css',
	]) ?>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- CSS -->
<!-- Includi CSS e JavaScript di Slick Carousel -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>




<script>

    // Inizializzazione del carousel utilizzando Slick
    $('.carousel').slick({
        centerMode: true,
        mobileFirst: true,
        swipeToSlide: true,
        adaptiveHeight: true,
        lazyLoad:'progressive',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        pauseOnHover: false,
        autoplaySpeed: 2100, // Modifica la velocità dell'autoplay se necessario
        infinite: true,
        centerMode: true,

  speed: 700,
  fade: true,
  cssEase: 'linear'
        // Altre opzioni personalizzabili di Slick
    });
</script>


<script>

    // Inizializzazione del carousel utilizzando Slick
    $('.carousel-mobile').slick({
        centerMode: true,
        mobileFirst: true,
        swipeToSlide: true,
        adaptiveHeight: true,
        lazyLoad:'progressive',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        pauseOnHover: false,
        autoplaySpeed: 2700, // Modifica la velocità dell'autoplay se necessario
        infinite: true,
        centerMode: true,

  speed: 1000,
  fade: true,
  cssEase: 'linear'
        // Altre opzioni personalizzabili di Slick
    });
</script>
