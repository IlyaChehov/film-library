<?php

global $categories;
?>

<form class="form" method="post" enctype="multipart/form-data">
    <label class="form__group">
        <p class="form__label">Название фильма</p>
        <input value="<?= showTextToHtml($fields['title'] ?? '') ?>" name="title" type="text" class="form__input"
               placeholder="Введите название фильма">
    </label>
    <div class="form__row">
        <label class="form__group">
            <p class="form__label">Жанр</p>
            <select name="genre" class="form__input form__input--select">
                <option disabled <?= empty($fields['genre']) ? 'selected' : '' ?>>Выберите жанр</option>

                <?php foreach ($categories as $category):?>
                    <option value="<?= $category ?>" <?= ($fields['genre'] ?? '') === $category ? 'selected' : '' ?>><?= $category ?></option>
                <?php endforeach ?>

            </select>
        </label>
        <label class="form__group">
            <p class="form__label">Год</p>
            <input value="<?= showTextToHtml($fields['year'] ?? '') ?>" name="year" type="text" class="form__input"
                   placeholder="Год премьеры">
        </label>
    </div>
    <label class="form__group">
        <p class="form__label">Описание фильма</p>
        <textarea name="description" class="form__textarea"
                  placeholder="Описание фильма"><?= showTextToHtml($fields['description'] ?? '') ?></textarea>
    </label>
    <label class="form__group">
        <input type="file">
    </label>
    <div class="flex-btns-row">
        <a href="<?= HOST ?>" class="btn btn--secondary">Отмена</a>
        <button class="btn btn--edit">Сохранить</button>
    </div>
</form>
