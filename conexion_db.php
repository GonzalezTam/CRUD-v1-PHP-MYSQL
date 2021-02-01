<?php

$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = '';
$db_database = 'cruddatabase';
$db_charset = 'utf8';

$link = mysqli_connect($db_host, $db_user, $db_password, $db_database);
mysqli_set_charset($link, $db_charset);

$rsu = mysqli_query($link, 'SELECT * FROM usuarios');

mysqli_close($link);