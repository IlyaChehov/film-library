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
        <div class="film__footer">
            <a href="/film/edit?id=<?= $film['id'] ?>" class="btn btn--edit">Редактировать</a>
            <a href="/film/delete?id=<?= $film['id'] ?>" class="btn btn--delete">Удалить</a>
        </div>
    </div>
</article>
