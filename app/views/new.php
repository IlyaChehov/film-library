<?php

global $categories;
require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">

            <h1 class="title-1">Новый фильм</h1>

            <?php
            if (!empty($errors)): ?>
                <div class="alert-wrapper">
                    <?php
                    foreach ($errors as $error): ?>
                        <div class="alert alert--error"><?= $error ?></div>
                    <?php
                    endforeach; ?>
                </div>
            <?php
            endif; ?>

            <?php
            if (isset($idFilm) && $idFilm): ?>
                <div class="alert-wrapper">
                    <div class="alert alert--success">Фильм успешно добавлен</div>
                </div>
            <?php
            elseif (isset($idFilm) && !$idFilm): ?>
                <div class="alert-wrapper">
                    <div class="alert alert--error">Ошибка добавления фильма, попробуйте позже</div>
                </div>
            <?php
            endif ?>

            <form class="form" method="post" enctype="multipart/form-data">

                <label class="form__group">
                    <p class="form__label">Название фильма</p>
                    <input value="<?= $fields['title'] ?? '' ?>" name="title" type="text" class="form__input"
                           placeholder="Введите название фильма">
                </label>

                <div class="form__row">
                    <label class="form__group">
                        <p class="form__label">Жанр</p>
                        <select name="genre" class="form__input form__input--select">

                            <option disabled <?= isset($fields['genre']) ? '' : 'selected' ?>>Выберите жанр</option>

                            <?php
                            foreach ($categories as $category):
                                if (isset($fields['genre']) && $fields['genre'] === $category): ?>
                                    <option selected value="<?= $category ?>"><?= $category ?></option>
                                <?php
                                endif; ?>
                                <option value="<?= $category ?>"><?= $category ?></option>
                            <?php
                            endforeach ?>

                        </select>
                    </label>

                    <label class="form__group">
                        <p class="form__label">Год</p>
                        <input value="<?= $fields['year'] ?? '' ?>" name="year" type="text" class="form__input"
                               placeholder="Год премьеры">
                    </label>
                </div>

                <label class="form__group">
                    <p class="form__label">Описание фильма</p>
                    <textarea name="description" class="form__textarea"
                              placeholder="Описание фильма"><?= $fields['description'] ?? '' ?></textarea>
                </label>

                <label class="form__group">
                    <input type="file">
                </label>

                <button class="btn">Сохранить</button>
            </form>

        </div>
    </main>

<?php
require_once DIR_VIEWS . '/templates/footer.php';
