<?php

global $film, $categories;
?>

<form method="post" class="form">
    <label class="form__group">
        <p class="form__label">Название фильма</p>
        <input name="title" value="<?= $film['title'] ?>" type="text" class="form__input"
               placeholder="Введите название фильма">
    </label>
    <div class="form__row">
        <label class="form__group">
            <p class="form__label">Жанр</p>
            <select name="genre" class="form__input form__input--select">

                <option disabled <?= isset($film['genre']) ? '' : 'selected' ?>>Выберите жанр</option>
                <?php foreach ($categories as $category):

                    if (isset($film['genre']) && $film['genre'] === $category): ?>

                        <option selected value="<?= $category ?>"><?= $category ?></option>

                    <?php endif; ?>

                    <option value="<?= $category ?>"><?= $category ?></option>

                <?php endforeach ?>
            </select>
        </label>
        <label class="form__group">
            <p class="form__label">Год</p>
            <input name="year" value="<?= $film['year'] ?>" type="text" class="form__input" placeholder="Год премьеры">
        </label>
    </div>
    <label class="form__group">
        <p class="form__label">Описание фильма</p>
        <textarea name="description" id="" class="form__textarea"
                  placeholder="Описание фильма"><?= $film['description'] ?></textarea>
    </label>
    <label class="form__group">
        <input type="file">
    </label>
    <div class="flex-btns-row">
        <a href="<?= HOST ?>" class="btn btn--secondary">Отмена</a>
        <button class="btn btn--edit">Сохранить</button>
    </div>
</form>
