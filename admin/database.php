<?php

function connect() {
    $config = include ($_SERVER['DOCUMENT_ROOT'] . '/config.php');
    $connection = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
    return $connection;
}
