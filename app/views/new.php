<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">

            <h1 class="title-1">Новый фильм</h1>

            <form action="" class="form">

                <label class="form__group">
                    <p class="form__label">Название фильма</p>
                    <input type="text" class="form__input" placeholder="Введите название фильма">
                </label>

                <div class="form__row">
                    <label class="form__group">
                        <p class="form__label">Жанр</p>
                        <select name="" id="" class="form__input form__input--select">
                            <option value="">Выберите жанр</option>
                            <option value="documental">Документальный</option>
                            <option value="comedy">Комедия</option>
                            <option value="drama">Драма</option>
                            <option value="detective">Детектив</option>
                            <option value="fantasy">Фентези</option>
                        </select>
                    </label>

                    <label class="form__group">
                        <p class="form__label">Год</p>
                        <input type="text" class="form__input" placeholder="Год премьеры">
                    </label>
                </div>

                <label class="form__group">
                    <p class="form__label">Описание фильма</p>
                    <textarea name="" id="" class="form__textarea" placeholder="Описание фильма"></textarea>
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
