<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">
            <h1 class="title-1 mb-20">Редактировать фильм</h1>

            <?php if (isset($resultEditFilm)): ?>

                <div class="alert-wrapper">

                    <?php if ($resultEditFilm === true): ?>

                        <div class="alert alert--success">Фильм был отредактирован</div>

                    <?php elseif ($resultEditFilm === false): ?>

                        <div class="alert alert--error">Ошибка редактирования фильма</div>

                    <?php else: ?>

                        <div class="alert alert--warning"><?= $resultEditFilm ?></div>

                    <?php endif; ?>

                </div>

            <?php endif;

            require_once DIR_VIEWS . '/templates/card-edit.php';

            if (!empty($errors)): ?>

                <div class="alert-wrapper">

                    <?php foreach ($errors as $error): ?>
                        <div class="alert alert--error"><?= $error ?></div>
                    <?php endforeach; ?>

                </div>
            <?php endif;

            require_once DIR_VIEWS . '/templates/form-edit.php'; ?>

        </div>
    </main>

<?php require_once DIR_VIEWS . '/templates/footer.php';
