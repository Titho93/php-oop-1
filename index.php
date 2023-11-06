<?php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    
<div class="container py-5 ">
    <?php foreach($movies as $movie): ?>
    <div class="row">
        <div class="col"><?php echo $movie->title ?></div>
        <div class="col"><?php echo $movie->language ?></div>
        <div class="col"><?php echo $movie->bio ?></div>
        <div class="col"><?php echo $movie->year ?></div>
    </div>
    <?php endforeach; ?>
</div>

</body>
</html>