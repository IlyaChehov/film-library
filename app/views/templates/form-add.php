<?php

global $categories;
?>

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

                <?php foreach ($categories as $category):

                    if (isset($fields['genre']) && $fields['genre'] === $category): ?>
                        <option selected value="<?= $category ?>"><?= $category ?></option>
                    <?php endif; ?>
                    <option value="<?= $category ?>"><?= $category ?></option>

                <?php endforeach ?>

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
    <div class="flex-btns-row">
        <a href="<?= HOST ?>" class="btn btn--secondary">Отмена</a>
        <button class="btn btn--edit">Сохранить</button>
    </div>
</form>
