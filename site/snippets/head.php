<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<head>
<?= snippet('matomo') ?>
<?= snippet('seo/meta') ?>

    <?php snippet('meta_information') ?> <?php snippet('robots'); ?>
	<link rel="icon" type="image/x-icon" href="../assets/favicon/favicon.ico">

    <!-- stylesheet links -->
	<!-- <link rel="preload" -->
    <?= css([
		'../assets/css/fonts.css',
		'../assets/css/lightbox.css',
		'../assets/css/flexbin.css',
		'../assets/css/header.css',
		'../assets/css/footer.css',
		'../assets/css/menu.css',
		'../assets/css/mains.css',
		'../assets/css/home.css',
		'../assets/css/projects.css',
		'../assets/css/process.css',
		'../assets/css/about.css',
	]) ?>


</head>