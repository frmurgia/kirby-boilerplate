<?php snippet('head') ?>

<?php
// Ottieni il percorso della pagina corrente
$currentPath = $_SERVER['REQUEST_URI'];

// Inizializza la variabile $currentPage in base al percorso
if (strpos($currentPath, '/projects') !== false) {
    $currentPage = 'projects';
} elseif (strpos($currentPath, '/about') !== false) {
    $currentPage = 'about';
} elseif (strpos($currentPath, '/process') !== false) {
    $currentPage = 'process';
} else {
    $currentPage = 'home'; // Pagina predefinita
}
?>

<header class="header">
    <ul class="first-container">
        <li class="item-1 <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">
            <a href="<?= $site->url() ?>"><?= $site->title()->escape() ?></a>
        </li>

        <li class="item-2 <?php echo ($currentPage === 'projects') ? 'active' : ''; ?>">
            <a href="<?= page('projects')->url() ?>"><?= page('projects')->title()->escape() ?></a>
        </li>
    </ul>

    <?php

$uniqueTags = []; // Aggiungi 'Tutti' agli uniqueTags
foreach ($site->index()as $project) {
    $tags = $project->category()->split(',');
    foreach ($tags as $tag) {
        $trimmedTag = trim($tag); // Rimuovi eventuali spazi bianchi extra
        if (!in_array($trimmedTag, $uniqueTags)) {
            $uniqueTags[] = $trimmedTag;
        }
    }
}

?>
    <div class="filter">
        <div id="filter-menu">
            <a href="<?= $page->url() ?>" <?= empty(get('filter')) ? 'class="active"' : '' ?>>Tutti</a>
            <?php
                // Crea i link per gli altri tag univoci
                foreach ($uniqueTags as $uniqueTag) {
                echo '<a href="?filter=' . $uniqueTag . '" ' . (get('filter') === $uniqueTag ? 'class="active"' : '') . '>' . $uniqueTag . '</a>';
                }
                ?>
        </div>
    </div>
</header>


<?php snippet('projects', ['projects' => collection('projects')]) ?>


<?php snippet('footer') ?>