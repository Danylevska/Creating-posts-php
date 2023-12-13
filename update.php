<?php

require_once('connection.php');

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$text = $_POST['text'];

if($_FILES['image']['size']){
$image = $_FILES['image'];
$filePath = 'images/'.$image['name'];
copy($image['tmp_name'], $filePath);

$sql = "UPDATE posts 
        SET title = $title,
         description = $description,
          text = $text,
          image = $image
      WHERE id = '$id'";


} else {

$sql = "UPDATE posts 
        SET title = '$title',
         description = '$description',
          text = '$text'
      WHERE id = '$id'";
}

$conn->exec($sql);

header ('Location: /show.php?id='.$id)
        
?>

