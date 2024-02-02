<aside class="right-panel">
    <p>
    <h2 class="title-project"><?= $page->title()->escape() ?></h2>
    </p>

    <summary class='project-text'> <?= $page->text()->html() ?>
    </summary>

    <table class="row-container">
        <tr class="riga1">
            <th class="item-riga">
                <div class="categoria">
                    <p>
                        <medium> Tipologia
                    </p>
                    </medium>
                    <p> <small> <?= $page->category()->escape() ?> </small></p>
                </div>
            </th>
            <th class="item-riga">
                <div class="luogo">
                    <p>
                        <medium>Luogo
                    </p>
                    </medium>
                    <p> <small> <?= $page->luogo()->escape() ?> </small> </p>
                </div>
            </th>
            <th class="item-riga">
                <div class="anno">
                    <p>
                        <medium> Anno
                    </p>
                    </medium>
                    <p> <small> <?= $page->anno()->toDate('Y') ?> </small> </p>
                </div>
            </th>
        </tr>
        <tr class="riga2">
            <th class="item-riga">
                <div class="cliente">
                    <p>
                        <medium>Cliente
                    </p>
                    </medium>
                    <p> <small> <?= $page->Cliente()->escape() ?> </small> </p>
                </div>
            </th>
            <th class="item-riga">
                <div class="collaboratori">
                    <p>
                        <medium>Collaboratori
                    </p>
                    </medium>
                    <p> <small> <?= $page->collaboratori()->escape()?> </small> </p>
                </div>
            </th>
            <th class="item-riga">
                <div class="stato">
                    <p>
                        <medium>Stato
                    </p>
                    </medium>
                    <p> <small> <?= $page->stato()->escape() ?> </small> </p>
                </div>
            </th>
        </tr>
    </table>

    <div class="pagination">
        <?php if ($page->hasPrevListed()): ?>
        <div class="prev-project">
            <a class="boxed-project-prev" href="<?= $page->prevListed()->url() ?>">← prev project</a>
        </div>
        <?php endif ?>

        <?php if ($page->hasNextListed()): ?>
        <div class="next-project">
            <a class="boxed-project-next" href="<?= $page->nextListed()->url() ?>">next project →</a>
        </div>
        <?php endif ?>
    </div>


</aside>