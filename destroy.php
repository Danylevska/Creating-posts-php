<?php

require_once('connection.php');

$id = $_POST['id'];

$sql = "DELETE FROM posts
        WHERE id = '$id'";
$conn->exec($sql);

header('Location: /')

?>