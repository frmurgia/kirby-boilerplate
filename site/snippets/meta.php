<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- <title><?= $site->title()->escape() . ' | ' . esc(implode(' / ', $site->breadcrumb()->not('home')->pluck('title'))) ?></title> -->

<?= snippet(($example ?? 'home') . '/meta') ?>
  
