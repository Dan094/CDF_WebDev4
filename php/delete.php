<?php

require_once('./data.php');

if ($_SERVER['REQUEST_METHOD'] ==='POST'){
   
    $title = $_POST['title'];
    deletePost($title);
}



header("Content-type: application/json");
echo json_encode(["data" => ["title" => $title]]);
