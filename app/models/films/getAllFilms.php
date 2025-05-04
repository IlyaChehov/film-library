<?php

function getAllFilms(PDO $db, string|null $category): array
{
    $query = $category
        ? "SELECT * FROM `films` WHERE genre = :category ORDER BY `id` DESC"
        : "SELECT * FROM `films` ORDER BY `id` DESC";

    try {
        $stmt = $db->prepare($query);

        if (isset($category)) {
            $stmt->bindValue(':category', $category, PDO::PARAM_STR);
        }

        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return [];
    }
}
