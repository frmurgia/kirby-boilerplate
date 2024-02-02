
<div class="info">
<p><h2><?= $page->title()->escape() ?></h2></p>
  <div class="grid">
  
    <div class="column text" style="--columns: 4">
    <hr class="line-project">
    
     <span class='project-text'> <?= $page->text()->kt() ?></span>
         
      <?php if ($client = $page->client()->toPage()): ?>
      <p><h2>Client: <?= $client->title()->escape() ?></h2></p>
      <?php endif ?>

      <?php if ($page->link()->isNotEmpty()): ?>
      <p><?= Html::a($page->link()->toUrl(), 'studio site') ?></p>
      <?php endif ?>
    </div>
    

<table>
  <tr>
   <td><p> Categoria </p> <hr class="pr">  <td> 
    
    <th> <p ><?= $page->category()->escape() ?></p><hr class="pr">     </th> 
  </tr>
  <tr>
    <td> <p>Anno </p><hr class="pr">   <td>  
    <th><p ><medium><?= $page->anno()->toDate('Y') ?></medium></p>   <hr class="pr">  </th>
  </tr>
  <tr>
    <td><p> Stato </p> <hr class="pr">  <td>  
    <th> <p ><medium><?= $page->stato()->escape() ?></medium></p>  <hr class="pr">   </th>
  </tr>
  <tr>
    <td> <p>Luogo </p> <hr class="pr"> <td>  
    <th> <p> <medium><?= $page->luogo()->escape() ?></medium></p>   <hr class="pr">  </th>
  </tr>
</table>
</div>