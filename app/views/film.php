<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">

            <?php
            require_once DIR_VIEWS . '/templates/nav-genres.php';
            require_once DIR_VIEWS . '/templates/card.php'; ?>

            <div class="back-wrapper">
                <a href="<?= HOST ?>" class="btn btn--secondary">Назад</a>
            </div>

            <h2 class="title-1 mb-20">Недавно смотрели</h2>

            <div class="cards-small-wrapper">

                <?php
                // require DIR_VIEWS . '/templates/small-card.php';
                // require DIR_VIEWS . '/templates/small-card.php';
                ?>

            </div>

        </div>
    </main>

<?php require_once DIR_VIEWS . '/templates/footer.php';
