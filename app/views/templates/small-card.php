<?php

global $film;
?>

<article class="card-small">
    <img src="<?= HOST ?>/public/assets/img/no-photo.png" alt="<?= $film['title'] ?>" class="card-small-img"/>

    <h2 class="card-small-title"><?= showTextToHtml($film['title']) ?></h2>
    <div class="card-small-badge">
        <div class="badge"><?= showTextToHtml($film['genre']) ?></div>
        <div class="badge"><?= showTextToHtml($film['year']) ?></div>
    </div>
    <div class="card-small-readmore">
        <a href="<?= HOST ?>/film/views?id=<?= $film['id'] ?>" class="btn btn--secondary">Подробнее</a>
    </div>
    <div class="card-small-admin-btns">
        <a href="<?= HOST ?>/film/edit?id=<?= $film['id'] ?>" class="btn btn--edit">Редактировать</a>
        <a href="<?= HOST ?>/film/delete?id=<?= $film['id'] ?>" class="btn btn--delete">Удалить</a>
    </div>
</article>
