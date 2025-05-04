<?php

global $categories;
require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">

            <h1 class="title-1">Новый фильм</h1>

            <?php if (!empty($errors)): ?>
                <div class="alert-wrapper">

                    <?php foreach ($errors as $error): ?>

                        <div class="alert alert--error"><?= $error ?></div>

                    <?php endforeach; ?>

                </div>
            <?php endif; ?>

            <?php if (isset($idFilm) && $idFilm): ?>

                <div class="alert-wrapper">
                    <div class="alert alert--success">Фильм успешно добавлен</div>
                </div>

            <?php elseif (isset($idFilm) && !$idFilm): ?>

                <div class="alert-wrapper">
                    <div class="alert alert--error">Ошибка добавления фильма, попробуйте позже</div>
                </div>

            <?php endif;
            require_once DIR_VIEWS . '/templates/form-add.php'; ?>

        </div>
    </main>

<?php require_once DIR_VIEWS . '/templates/footer.php';
