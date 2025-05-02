<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">

            <?php
            require_once DIR_VIEWS . '/templates/nav-genres.php';
            ?>

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

                    <div class="film__footer">
                        <a href="edit.htmldex.php" class="btn btn--edit">Редактировать</a>
                        <a href="delete.htmlx.php" class="btn btn--delete">Удалить</a>
                    </div>
                </div>
                <!-- // Desc -->
            </article>

            <div class="back-wrapper">
                <a href="/" class="btn btn--secondary">Назад</a>
            </div>

            <h2 class="title-1 mb-20">Недавно смотрели</h2>

            <div class="cards-small-wrapper">

                <?php
                require DIR_VIEWS . '/templates/small-card.php';
                require DIR_VIEWS . '/templates/small-card.php';
                ?>

            </div>

        </div>
    </main>

<?php
require_once DIR_VIEWS . '/templates/footer.php';
