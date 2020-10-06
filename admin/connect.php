<?php
$dsn = 'mysql:host=localhost;dbname=cmswebsite';
$user = 'root';
$password = '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $db_connect = new PDO($dsn, $user, $password, $option);
    $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDo::ERRMODE_EXCEPTION);

} catch (PDOException $exception) {
    echo 'Failed' . $exception->getMessage();
}