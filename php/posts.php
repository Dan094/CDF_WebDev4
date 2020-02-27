<?php

require_once('./data.php');

header("Content-type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$title = $_POST['title'];
$content = $_POST['content'];
$img = $_POST['img'];
$link = $_POST['link'];

saveNewPost($title,$content,$img,$link);

http_response_code(201);
  echo json_encode(["data" => ["title" => $title, "content" => $content, 'img' => $img, 'link' => $link]]);

}

else if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // New Features Go Here
  
    $posts = getAllPosts();
    echo json_encode(["data" => $posts]);
  }
  