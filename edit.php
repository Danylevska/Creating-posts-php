<?php

require_once('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM posts
        WHERE id = '$id'";
$post = $conn->query($sql)->fetch();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container">
    <section class="my-4">
        <a href="/" class="btn btn-primary">Main page</a>
        <a href="create.html" class="btn btn-primary">Create post</a>  
    </section>
    <section class="col-md-6">
<form action="update.php" method="post" enctype="multipart/form-data">
        <h1>Edit post</h1>
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <label for="">Title</label>
        <input name="title" class= "form-control" maxlength="23" type="text" value="<?= $post['title'] ?>">
        <label for="">Description</label>
        <textarea class= "form-control" name="description" id="" cols="30" rows="5" maxlength="110"><?= $post['description'] ?></textarea>
        <label for="">Text</label>
        <textarea class= "form-control" name="text" id="" cols="30" rows="5" maxlength="1500"><?= $post['text'] ?></textarea>
        <label for="">Image</label>
        <div>
        <img src="<?= $post['image'] ?>" width="200">
        </div>
        <input name="image" class= "form-control" type="file">
        <button class="btn btn-success my-4">Update post</button>
</form>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>