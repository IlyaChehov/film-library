<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">

            <h1 class="title-1 mb-20">Редактировать фильм</h1>

            <article class="film">

                <img src="../../public/assets/img/film.jpg" alt="Film" class="film__img"/>

                <!-- Desc -->
                <div class="film__desc">

                    <h1 class="film__title">
                        Властелин колец: Две крепости
                    </h1>

                    <div class="film__badges">
                        <div class="badge">Фентези</div>
                        <div class="badge">2002</div>
                    </div>

                    <div class="film__text">
                        <p>
                            Братство распалось, но Кольцо Всевластья должно
                            быть уничтожено. Фродо и Сэм вынуждены
                            довериться Голлуму, который взялся провести их к
                            вратам Мордора. Громадная армия Сарумана
                            приближается: члены братства и их союзники
                            готовы принять бой. Битва за Средиземье
                            продолжается.
                        </p>
                    </div>

                </div>
                <!-- // Desc -->
            </article>

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
                            <option value="Документальный">Документальный</option>
                            <option value="Комедия">Комедия</option>
                            <option value="Драма">Драма</option>
                            <option value="Детектив">Детектив</option>
                            <option value="Фэнтези">Фэнтези</option>
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

                <div class="flex-btns-row">
                    <a href="/" class="btn btn--secondary">Отмена</a>
                    <button class="btn btn--edit">Сохранить</button>
                </div>
            </form>

        </div>
    </main>

<?php
require_once DIR_VIEWS . '/templates/footer.php';
