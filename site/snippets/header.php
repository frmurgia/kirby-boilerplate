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
  
        
</header>










