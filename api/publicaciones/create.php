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

$contenido = $_POST["contenido"];
echo $contenido;

$db->prepare(
    "INSERT INTO publicaciones(autor,contenido) VALUES(1,'$contenido')"
)->execute();

header("location: http://appsocial.test");
