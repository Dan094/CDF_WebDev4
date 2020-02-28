<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'cwf');

function runQuery($sql) {
  // Connect to the database
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  mysqli_set_charset($connection, 'utf8mb4');
  if(mysqli_connect_errno()) {
    exit("Database connection failed: (" . mysqli_connect_errno() . ")");
  }

  // Run the query
  $results = mysqli_query($connection, $sql);
  if (!$results) {
    exit("Database query failed. ". mysqli_errno ($connection));
  }

  // Handle the results
  if (gettype($results) === 'boolean') {
    return $results; 
  }
  
  $count = mysqli_num_rows($results);
  $data = [];
  for ($i = 0; $i < $count; $i++) {
    $row = mysqli_fetch_assoc($results);
    $data[] = $row;
  }

  mysqli_free_result($results);
  mysqli_close($connection);

  return $data;
}



  

// returns an associative array of all of the squeaks
function getAllPosts() {
  $sql ="
  SELECT  title, content, img, link
  FROM posts 
  WHERE deleted = false
  
  ";

  $posts = runQuery($sql);
  
    return $posts;
}

// saves a new squeak to the database
function saveNewPost($title, $content, $img, $link) {
    $sql ="
    INSERT INTO posts(title, content, img, link, deleted)
    VALUES('$title','$content','$img','$link',false)
    "
    ;
    $posts = runQuery($sql);
  
    return $posts;
  
}

// deletes a single squeak
function deletePost($postsId) {
    $sql ="
    UPDATE posts
    SET deleted = true
    WHERE postsID = $postsId";
    
    $posts = runQuery($sql);
  
    return $posts;

}


