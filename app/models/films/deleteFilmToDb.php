<?php

function deleteFilmToDb(PDO $db, int $id): bool
{
    $id = (int)$id ?? null;
    try {
        $query = "DELETE FROM `films` WHERE `id` = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() === 0) {
            return false;
        }

        return true;
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return false;
    }
}
