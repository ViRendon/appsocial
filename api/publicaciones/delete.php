<?php

$db = new PDO(
    'mysql:host=localhost;port=3306;dbname=appsocial',
    'root',
    '',
    [
        \PDO::ATTR_PERSISTENT => false,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]
);

$id = $_GET["id"];

$db->prepare("DELETE FROM publicaciones WHERE id = $id")->execute();

header("location: http://appsocial.test");