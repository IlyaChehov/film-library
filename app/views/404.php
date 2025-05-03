<?php

require_once DIR_VIEWS . '/templates/head.php';
require_once DIR_VIEWS . '/templates/header.php';
?>

<main class="main">
    <div class="container">
        <section class="error-404">
            <h1 class="error-404__title">404</h1>
            <h2 class="error-404__subtitle">Нет такой станицы...</h2>
            <div class="error-404__image">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 512 512" fill="#63b3df">
                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
            </div>
            <p class="error-404__text">Похоже, что страница, которую вы ищете потерялась :( <br> Возможно,
                она была удалена, переименована или временно недоступна.</p>
            <a href="/" class="btn error-404__btn">Вернуться на главную</a>
        </section>
    </div>
</main>

<?php
require_once DIR_VIEWS . '/templates/footer.php';
