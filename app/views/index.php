<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>


    <main class="main">
        <div class="container">
            <!--            <div class="alert-wrapper">-->
            <!--                <div class="alert alert--success">Фильм был добавлен</div>-->
            <!--                <div class="alert alert--error">Ошибка добавления</div>-->
            <!--                <div class="alert alert--warning">Предупреждение</div>-->
            <!--            </div>-->

            <?php
            require_once DIR_VIEWS . '/templates/nav-genres.php';
            ?>

            <?php
            if (!empty($films)): ?>
                <div class="cards-small-wrapper">
                    <?php
                    foreach ($films as $film) {
                        require DIR_VIEWS . '/templates/small-card.php';
                    }
                    ?>
                </div>
            <?php
            else: ?>
                <h1 class="title-1">Фильмы данной категории отсутствуют, выдерите другую категорию или попробуйте
                    позже</h1>
            <?php
            endif ?>


        </div>
    </main>

<?php
require_once DIR_VIEWS . '/templates/footer.php';
