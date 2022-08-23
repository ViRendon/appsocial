<?php

header('Content-Type: application/json; charset=utf-8');

$db = new PDO(
    'mysql:host=localhost;port=3306;dbname=appsocial',
    'root',
    '',
    [
        \PDO::ATTR_PERSISTENT => false,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]
);

$dbquery = $db->prepare("SELECT id,autor,contenido,creado FROM publicaciones ORDER BY id desc");
$result = $dbquery->execute();
if($result){
    $publicaciones = $dbquery->fetchAll(PDO::FETCH_ASSOC);
    $publicaciones = json_encode($publicaciones);
    echo $publicaciones;
}