<?php snippet('framework', [ 'bodyclasses' => ''], slots: true); ?>


<p class=""><?= $page->text() ?></p>

<?php endsnippet() ?>

<?php snippet('header'); ?>


<style>
strong{
    font-weight: 700;
    color:rgb(228 144 142);
}


a:link,.email-link{
    font-weight: 700;
    color:rgb(228 144 142);
    text-decoration: none;
}
</style>



<div class="flex flex-col m-6 lg:container lg:mx-auto">
    <a class="text-title" href="<?= $site->url() ?>"><?= $site->title() ?></a>


    <div class=" text-headline-mobile pt-1  pb-12  lg:text-headline "><?= $page->headline() ?></div>



    <ul class="" <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>

        <?php foreach ($page->children()->listed()->filterBy('intendedTemplate', 'anno') as $anno): ?>
        <li>
            <span class="animate-fade font-bold cursor-pointer" onclick="toggleText(this)">
                <button class=" cursor-s-resize; cursor-pointer text-anno "> <?= $anno->title() ?>
                </button>

                <div class="text-base leading-loose hidden  selection:bg-collegamenti"><?= $anno->text()->toBlocks() ?>
                </div>
            </span>
        </li>
        <?php endforeach; ?>



    </ul>

</div>


<script>
$(document).ready(function() {
    $("button").click(function() {
        // Trova il fratello successivo con la classe '.hidden' e lo apre
        $(this).next(".hidden").slideToggle();
    });
});
</script>

</style>
<?php /* FOOTER */ ?>
        <footer class="">
            <?= snippet('comps/footer') ?>
        </footer>

