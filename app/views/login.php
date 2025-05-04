<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

    <main class="main">
        <div class="container">
            <h1 class="title-1">Вход для администратора</h1>
            <form action="" class="form">

                <label class="form__group">
                    <p class="form__label">Логин</p>
                    <input type="text" class="form__input" placeholder="Логин" autocomplete="off">
                </label>

                <label class="form__group">
                    <p class="form__label">Пароль</p>
                    <input type="text" class="form__input" placeholder="Пароль">
                </label>

                <button class="btn">Войти</button>
            </form>
        </div>
    </main>

<?php require_once DIR_VIEWS . '/templates/footer.php';
