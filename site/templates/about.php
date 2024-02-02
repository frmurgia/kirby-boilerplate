<?php snippet('head') ?>

<?php snippet('header') ?>

<main>
    <div class="container-about">

        <div class="intro-about">
            <div class=" img-studio">
                <?php  ($image = $page->image()->file('studio_cover')) ?>
                <img class=" img-studio" src="<?= $page->studio_cover()->toFile()->url() ?>">
            </div>
            <div class=" about-text">
                <h1 class="who">Chi siamo?</h1> </br>
                <p>
                    <regular-about><?= $page->descrizione()->toBlocks()?></regular-about>
                </p>
                <a href=' '> </a>
                <br>

                <div class="contatti">
                    <br>
                    <p class="underline-link">
                        <regular-about-contatti> ⌂ <?= $page->indirizzo() ?></regular>
                    </p></br>
                    <p class="contatti-text"> <a class="underline-link" href="mailto:"> @ <?= $page->email() ?></a>.
                        </regular>
                    </p><br>

                </div>
            </div>

        </div>
    </div>


    <!-- <?php snippet('about-team') ?> -->

    <?php snippet('footer') ?>