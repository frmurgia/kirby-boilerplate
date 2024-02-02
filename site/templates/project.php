<?php snippet('head') ?>
<?= css([
		'../assets/css/project.css',
	]) ?>

<?php snippet('header') ?>

<?php snippet('carusel-slick') ?>


<main>


    <div class="container-carusel-project">
        <div class="slider">
            <?php foreach ($page->gallery()->toFiles() as $image): ?>
            <div>
                <img class="home-img " src="<?= $image->url() ?>"
                    alt="<?= $image->alt()->esc() ?>">
            </div>
            <?php endforeach ?>
        </div>
    </div>





    <?php snippet('aside') ?>
    </div>


</main>

<script>
$('.slider').slick({

    slidesToShow: 1, // Personalizza il numero di slide da mostrare
    slidesToScroll: 1, // Personalizza il numero di slide da scorrere alla volta

    autoplay: true,
    mobileFirst: true,
    swipeToSlide: true,
    adaptiveHeight: true,
    lazyLoad: 'progressive',
    infinite: true,
    centerMode: true,
    pauseOnHover: false,
    autoplaySpeed: 1200, // Modifica la velocità dell'autoplay se necessario




    infinite: true,
    centerMode: true,

    speed: 1000,
    fade: true,
    cssEase: 'linear',
    dots: true
});
</script>
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
    autoplaySpeed: 1200, // Modifica la velocità dell'autoplay se necessario
    infinite: true,
    speed: 1000,
    fade: true,
    cssEase: 'linear'
    // Altre opzioni personalizzabili di Slick
});
</script>



<?php snippet('footer') ?>