<article class="card-small">
    <img src="<?= HOST ?>/public/assets/img/no-photo.png" alt="<?= $film['title'] ?>" class="card-small-img"/>

    <h2 class="card-small-title">
        <?= $film['title'] ?>
    </h2>

    <div class="card-small-badge">
        <div class="badge"><?= $film['genre'] ?></div>
        <div class="badge"><?= $film['year'] ?></div>
    </div>

    <div class="card-small-readmore">
        <a href="/film/views" class="btn btn--secondary">Подробнее</a>
    </div>

    <div class="card-small-admin-btns">
        <a href="/film/edit" class="btn btn--edit">Редактировать</a>
        <a href="/film/delete" class="btn btn--delete">Удалить</a>
    </div>
</article>
