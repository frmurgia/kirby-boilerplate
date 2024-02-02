<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('carusel-slick') ?>



<main>

    <!-- titolo fisso -->
    <div class="container-home">
        <h1 class="main-title">studio signa</h1>
    </div>

    <!-- contenitore carousel -->
    <div class="container-carusel">
        <!-- primo carousel -->
        <div class="carousel">
            <?php foreach ($page->gallery()->toFiles() as $image): ?>
            <div>
                <img class="home-img" src="<?= $image->crop(2560,1600)->url() ?>" alt="<?= $image->alt()->esc() ?>">
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- secondo carousel -->
    <div class="container-carusel-mobile">
        <div class="carousel">
            <?php foreach ($page->gallery()->toFiles() as $image): ?>
            <div>
                <img class="home-img-mobile" src="<?= $image->crop(1000,2300,1000,'center')->url() ?>" alt="<?= $image->alt()->esc() ?>">
            </div>
            <?php endforeach ?>
        </div>
    </div>

    




    <script>
    // Inizializzazione del carousel utilizzando Slick
    $('.carousel').slick({
        mobileFirst: true,
        swipeToSlide: true,
        lazyLoad: 'progressive',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        pauseOnHover: false,
        autoplaySpeed: 1400, // Modifica la velocità dell'autoplay se necessario
        infinite: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear'
        // Altre opzioni personalizzabili di Slick
    });
    </script>










</main>


<!-- <?php snippet('carusel-script') ?> -->


<footer>

    <ul class="last-container">

        <a class="item-3" href="<?=page('about')->url() ?>"><?= page('about')->title()->escape() ?></a>

        <a class="item-4" href="<?=page('process')->url() ?>"><?= page('process')->title()->escape() ?></a>
    </ul>
</footer>