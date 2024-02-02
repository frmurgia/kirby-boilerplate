<?php snippet('head') ?>
<div class="grid-draw">
    <?php snippet('header') ?>



    <main>

        <div class="process-content">
            <div class="content-items">

                <div class="process-info"><?= page("process")->homeinfo() ?> </div>



                <div class="section1">
                    <hr class="title-line">
                    <h1>
                        <div class="title-1"><?= page("process")->title1() ?> </div>
                    </h1>
                    <span class="description1"><?= page("process")->description1() ?> </span>
                </div>

                <div class="image-container">

                    <?php
  if($coverImage = $page->files()->findBy('template', 'cover')) {
  echo $coverImage->url();
}
?>
                    <?php  ($image = $page->cover()->file()) ?>
                    <img class="img-home" src="<?= $page->cover()->toFile()->url() ?>">
                </div>

                <div class="section2">
                    <hr class="title-line">
                    <h1>
                        <div class="title-2"><?= page("process")->title2() ?> </div>
                    </h1>
                    <span class="description2"><?= page("process")->description2() ?> </span>
                </div>

                <div class="image-container2">
                    <?php  ($image = $page->image()->file('cover2')) ?>
                    <img class="img-home2" src="<?= $page->cover2()->toFile()->url() ?>">
                </div>

                <div class="section3">
                    <hr class="title-line">
                    <h1>
                        <div class="title-3"><?= page("process")->title3() ?> </div>
                    </h1>
                    <span class="description3"> <?= page("process")->description3() ?> </span>
                </div>

                <div class="image-container3">
                    <?php  ($image = $page->image()->file('cover3')) ?>
                    <img class="img-home3" src="<?= $page->cover3()->toFile()->url() ?>">
                </div>

                <div class="section4">
                    <hr class="title-line">
                    <h1>
                        <div class="title-4"><?= page("process")->title4() ?> </div>
                    </h1>
                    <span class="description4"> <?= page("process")->description4() ?> </span>
                </div>

                <div class="image-container4">
                    <?php  ($image = $page->image()->file('cover4a')) ?>
                    <img class="img-home4" src="<?= $page->cover4a()->toFile()->crop(300, 300,1000)->url() ?>">
                    <?php  ($image = $page->image()->file('cover4b')) ?>
                    <img class="img-home4" src="<?= $page->cover4b()->toFile()->crop(300, 300,1000)->url() ?>">
                    <?php  ($image = $page->image()->file('cover4c')) ?>
                    <img class="img-home4" src="<?= $page->cover4c()->toFile()->crop(300, 300,1000)->url() ?>">
                </div>



                <div class="section5">
                    <hr class="title-line">
                    <h1>
                        <div class="title-5"><?= page("process")->title5() ?> </div>
                    </h1>
                    <span class="description5"> <?= page("process")->description5() ?> </span>
                </div>

                <div class="image-container5">
                    <?php  ($image = $page->image()->file('cover5')) ?>
                    <img class="img-home5" src="<?= $page->cover5()->toFile()->url() ?>">
                </div>


                <div class="section6">
                    <hr class="title-line">
                    <h1>
                        <div class="title-6"><?= page("process")->title6() ?> </div>
                    </h1>
                    <span class="description6"><?= page("process")->description6() ?> </span>
                </div>

                <div class="image-container6">
                    <?php  ($image = $page->image()->file('cover6')) ?>
                    <img class="img-home6" src="<?= $page->cover6()->toFile()->url() ?>">
                </div>
            </div>
        </div>

    </main>
    <?php snippet('footer') ?>