<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>


    <main class="main">
        <div class="container">
            <div class="alert-wrapper">
                <div class="alert alert--success">Фильм был добавлен</div>
                <div class="alert alert--error">Ошибка добавления</div>
                <div class="alert alert--warning">Предупреждение</div>
            </div>

            <?php
            require_once DIR_VIEWS . '/templates/nav-genres.php';
            ?>

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
