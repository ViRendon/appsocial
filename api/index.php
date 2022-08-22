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

// $db->prepare(
//     "INSERT INTO publicaciones(autor,contenido) VALUES(1,'publicacion1')"
// )->execute();


$dbquery = $db->prepare("SELECT id,autor,contenido,creado FROM publicaciones");
$result = $dbquery->execute();
if($result){
    $publicaciones = $dbquery->fetchAll(PDO::FETCH_ASSOC);
    var_dump($publicaciones);
}