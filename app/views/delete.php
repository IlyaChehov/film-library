<?php

global $film;
require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">

            <h1 class="title-1">Удалить фильм?</h1>

            <?php
            if (isset($isDeleteFilm)): ?>
                <div class="alert-wrapper">
                    <?php
                    if ($isDeleteFilm): ?>
                        <div class="alert alert--success">Фильм был удален</div>
                    <?php
                    else: ?>
                        <div class="alert alert--error">Ошибка удаления фильма</div>
                    <?php
                    endif; ?>
                </div>
            <?php
            endif; ?>

            <form method="post" class="form">

                <?php
                require_once DIR_VIEWS . '/templates/card-delete.php' ?>

                <div class="back-wrapper">
                    <a href="/" class="btn">Отмена</a>
                    <button class="btn btn--delete">Удалить</button>
                </div>
            </form>

        </div>
    </main>

<?php
require_once DIR_VIEWS . '/templates/footer.php';
