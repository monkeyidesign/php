<?php require __DIR__.'/../vendor/autoload.php';

use App\Controller\BlogController;

$getID = 2;
$getSlug = 'another-post';

$posts = new BlogController;
var_dump($posts->list());

$post_id = $posts->post($getID);
var_dump($post_id);

$slug = $posts->postBySlug($getSlug);
var_dump($slug);

