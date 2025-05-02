<?php

require_once dirname(__DIR__) . '/config/constants.php';
require_once DIR_CORE . '/helpers.php';
require_once DIR_CORE . '/database.php';

$dbConfig = require_once DIR_CONFIG . '/databaseConfig.php';
$db = connectToDb($dbConfig);

require_once DIR_CORE . '/router.php';
