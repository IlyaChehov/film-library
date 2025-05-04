<?php
global $categories;
?>
<div class="categories">
    <a href="/">Все фильмы</a>

    <?php
    foreach ($categories as $category): ?>
        <a href="<?= HOST ?>?category=<?= $category ?>"><?= $category ?></a>
    <?php
    endforeach ?>
</div>
