<?php snippet('framework', [ 'bodyclasses' => ''], slots: true); ?>


<p class=""><?= $page->text() ?></p>

<?php endsnippet() ?>
<style>
 
a:link,.email-link{
    font-weight: 700;
    color:rgb(228 144 142);
    text-decoration: none;
}
.collegamenti {
  color: rgb(228 144 142);
  text-decoration: underline;
}
.email-link{
  color:black !important;
  /* text-decoration: none !important; */

}
</style>

<?php snippet('header'); ?>


<div class="flex flex-col m-6 lg:container lg:mx-auto">


    <a class="text-title" href="<?= $site->url() ?>"><?= $site->title() ?></a>
    <div class="pt-1  pb-8 text-headline-project-title-mobile  leading-3 lg:text-headline-project-title	"><?= $page->title() ?></div>

    <hr class=" pb-8">

    <div class="pt-1 text-headline-project "><?= $page->titolo()->kirbyText()  ?></div>


    <p class=" underline pb-8 text-base "><?= $page->testo()->kirbyText() ?></p>

    <div class=" py-8 grid grid-cols-1 md:grid-cols-2 gap-4">

        <?php foreach ($page->gallery()->toFiles() as $image): ?>
        <img class="h-auto max-w-full " src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        <?php endforeach ?>

    </div>

    
    
</div>
<hr class=" py-5">

<?php /* FOOTER */ ?>
        <footer class="">
            <?= snippet('comps/footer') ?>
        </footer>

