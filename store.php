<?php

require_once('connection.php');

$title = $_POST['title'];
$description = $_POST['description'];
$text = $_POST['text'];

$image = $_FILES['image'];
$filePath = 'images/'.$image['name'];
copy($image['tmp_name'], $filePath);

$sql = "INSERT INTO posts (title, description, text, image)
        VALUES('$title', '$description', '$text', '$filePath')";
  
$conn->exec($sql);

header('Location: /');

?>