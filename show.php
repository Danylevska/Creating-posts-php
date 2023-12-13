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
    <title>Show one post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <style>

            p {width: 500px;
                word-break: break-word;}
                
                img {margin-bottom: 10px;}
                
           
            .container {padding-bottom: 20px;}
          
            @media screen and (max-width: 520px) {
                img {width: 300px;}
                p {width: 300px;}
                    h1 {font-size: 25px;
                    width: 300px;}
            }
        </style>
        
       
</head>

<body class="container">
    <section class="my-4">
        <a href="/" class="btn btn-primary">Main page</a>
        <a href="create.html" class="btn btn-primary">Create post</a>
    </section>

    <section>
        <h1 style="max-width: 500px; word-break:break-all"><?= $post['title'] ?></h1>
        <img src="<?= $post['image'] ?>" width="500px" alt="">
        <p style="max-width: 500px;"><?= $post['text'] ?></p>
        <a href="edit.php?id=<?= $post['id'] ?>" class="btn btn-warning">Edit post</a>
        <button class="btn btn-danger" form="delete" >Delete post</button>
    </section>
    <form action="destroy.php" method="post" id="delete">
<input type="hidden" name="id" value="<?= $post['id'] ?>">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>