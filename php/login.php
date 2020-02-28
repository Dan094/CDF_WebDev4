<?php

require_once('./data.php');

if (!isset($_POST['username'])) {
    http_response_code(400);
    echo json_encode(["error" => "Must input a username"]);
    exit();
  }

if (!isset($_POST['password'])) {
    http_response_code(400);
    echo json_encode(["error" => "Must input a password"]);
    exit();
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
    checkLogin($username,$password);


header("Content-type: application/json");
echo json_encode(["data" => ["username" => $username],["password " => $password]]);
