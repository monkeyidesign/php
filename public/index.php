<?php require "../bootstrap.php";

$sql = $db->prepare('SELECT * FROM blog_post');
$sql->execute();
$posts = $sql->fetchAll();

var_dump($posts);