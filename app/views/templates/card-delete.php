<?php

global $film;
?>
<article class="film">
    <img src="<?= HOST ?>/public/assets/img/no-photo.png" alt="Film" class="film__img"/>
    <div class="film__desc">
        <h1 class="film__title"><?= showTextToHtml($film['title']) ?></h1>
        <div class="film__badges">
            <div class="badge"><?= showTextToHtml($film['genre']) ?></div>
            <div class="badge"><?= showTextToHtml($film['year']) ?></div>
        </div>
        <div class="film__text">
            <p><?= showTextToHtml($film['description']) ?></p>
        </div>
    </div>
</article>
