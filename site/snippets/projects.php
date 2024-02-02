<main>
<div class="container">
    <div class="flexbin flexbin-margin">
        <?php $filterBy = get('filter'); ?>
        <?php foreach ($page
            ->children()
            ->listed()
            ->when($filterBy, function ($filterBy) {
                return $this->filterBy('category', $filterBy);
            }) as $project): ?>
            <a class="project-item lazyload" href="<?= $project->url() ?>">
                <?php if ($image = $project->copertina()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                    <p class="project-title"><?= $project->title() ?></p>
                <?php endif ?>
            </a>
        <?php endforeach ?>
    </div>
</div>
</main>