<?php

require_once('connection.php');

$sql = "SELECT * FROM posts";
$posts = $conn->query($sql)->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body class="container">
    <section class="my-4">
        <a href="/" class="btn btn-primary">Main page</a>
        <a href="create.html" class="btn btn-primary">Create post</a>  
    </section>
    <section class="row">
<?php foreach($posts as $post): ?>
        <div class="card" style="width: 18rem; margin:5px;">
            <img src="<?= $post['image'] ?>" class="card-img-top my-3" style="width: 15rem; height: 12rem; margin:auto;" ; alt="...">
            <div class="card-body">
              <h5 class="card-title" style="width: 15rem; height: 3rem;"><?= $post['title'] ?></h5>
              <p class="card-text" style="width: 15rem; height: 10rem;"><?= $post['description'] ?></p>
                                          
                    
              <a href="show.php?id=<?= $post['id'] ?>" class="btn btn-primary" style="margin-top: 10px;">Show post</a>
                         
            </div>
          </div>
<?php endforeach; ?>
          

    </section>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>