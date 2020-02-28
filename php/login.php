<?php
session_start();

require_once('./data.php');

if (isset($_POST['username']) && isset($_POST['password'])){
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    

      $user = json_encode($id[0][id]);

    


$_SESSION['username']= $username;
$_SESSION['password']= $password;

echo json_encode(['message'=>'Welcome!', 'session' => $_SESSION]);

}



header("Content-type: application/json");
echo json_encode(["data" => ["username" => $username],["password " => $password]]);