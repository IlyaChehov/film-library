<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">

            <h1 class="title-1">Удалить фильм?</h1>

            <form action="" class="form">

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

                <div class="back-wrapper">
                    <a href="/" class="btn">Отмена</a>
                    <button class="btn btn--delete">Удалить</button>
                </div>
            </form>

        </div>
    </main>

<?php
require_once DIR_VIEWS . '/templates/footer.php';
