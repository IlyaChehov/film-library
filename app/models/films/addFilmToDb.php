<?php

function addFilmToDb(PDO $db, array $data): bool
{
    foreach ($data as $key => $value) {
        if (empty($value)) {
            $data[$key] = null;
        }
    }
    try {
        $query = "INSERT INTO `films` (`title`, `year`, `genre`, `description`) VALUES (:title, :year, :genre, :description)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':title', $data['title'], PDO::PARAM_STR);
        $stmt->bindValue(':year', $data['year'], PDO::PARAM_INT);
        $stmt->bindValue(':genre', $data['genre'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $data['description'], PDO::PARAM_STR);
        $stmt->execute();

        return true;
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return false;
    }
}
