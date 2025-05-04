<?php

function getFilmToBd(PDO $db, string|null $id): array|false
{
    try {
        $query = "SELECT * FROM `films` WHERE `id` = :id";

        $stmt = $db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return false;
    }
}
