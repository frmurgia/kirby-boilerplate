

    </main>
<footer>
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
<ul class="last-container"> 
  <li class="item-3 <?php echo ($currentPage === 'about') ? 'active' : ''; ?>">
    <a href="<?= page('about')->url() ?>"><?= page('about')->title()->escape() ?></a>
  </li>

  <li class="item-4 <?php echo ($currentPage === 'process') ? 'active' : ''; ?>">
    <a href="<?= page('process')->url() ?>"><?= page('process')->title()->escape() ?></a>
  </li>
</ul>



    </footer>
