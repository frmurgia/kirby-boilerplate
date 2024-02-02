<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2 class="h1" id="team"><?= $page->teamHeading()->escape() ?></h2>

<div class="main-container">

    <ul class="grid-about">

        <p class="who">Team</p>

        <hr class="hr-about">
        <?php foreach (collection('team') as $member): ?>
        <?php if ($image = $member->image()): ?>
        <!-- griglia  -->
        <li class="column-about">

            <!--  immagini -->
            <div class="team-image">

                <img class="team-image" src="<?= $image->crop(300)->url() ?>">

                </a>
            </div>

            <div class="team-text">
                <p class="flex-items1">
                    <regular-about><?= $member->position()->escape() ?></regular-about>
                </p>
                <p class="flex-items2">
                    <big-about><?= $member->title()->escape() ?></big-about><a class="flex-items"> </a>
                </p>
                <a class="icon-social" href="<?= $member->linkedin()->url() ?>" target="_blank">
                    <i style="font-size: 24px" class="fa">&#xf08c;</i>
                </a>




                <p class="flex-items3">
                    <regular-about><?= $member->about()->escape() ?></regular-about>
                </p>
            </div>
        </li>

        <hr class="hr-about">

        <?php endif ?>
        <?php endforeach ?>
    </ul>