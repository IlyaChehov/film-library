<?php

function editFilmToDb(PDO $db, array $data, int $id): bool|string
{
    $id = (int)$id ?? null;
    foreach ($data as $key => $value) {
        if (empty($value)) {
            $data[$key] = null;
        }
    }

    $query = "SELECT * FROM `films` WHERE `id` = :id LIMIT 1";

    $stmt = $db->prepare($query);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $currentFilm = $stmt->fetch();

    if (
        $currentFilm['title'] === $data['title'] &&
        $currentFilm['year'] === (int)$data['year'] &&
        $currentFilm['genre'] === $data['genre'] &&
        $currentFilm['description'] === $data['description']
    ) {
        return 'Данные фильма уже актуальны, обновления не требуются';
    }

    try {
        $query = "UPDATE `films` SET `title` = :title, `year` = :year, `genre` = :genre, `description` = :description WHERE `id` = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':title', $data['title'], PDO::PARAM_STR);
        $stmt->bindValue(':year', $data['year'], PDO::PARAM_INT);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':genre', $data['genre'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $data['description'], PDO::PARAM_STR);
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
