<?php

function connectToDb($dbConfig): PDO
{
    [
        'host' => $host,
        'dbname' => $dbname,
        'username' => $username,
        'password' => $password,
        'charset' => $charset,
        'options' => $options
    ] = $dbConfig;

    try {
        $dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";
        return new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        error_log($e->getMessage());
        die('Ошибка соединения с базой данных.');
    }
}
