<?php

require_once __DIR__ . '/Model/Production.php';
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/Serie.php';
require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Css  -->
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    
    <h1 class='text-center py-3'>Star Wars</h1>

    <div class="container py-5 d-flex">
        <?php foreach($Production as $product): ?>
            <div class="card mx-5 " style="width: 18rem;">
                <img src="img/<?php echo $product->image->path ?>" class="card-img-top" alt="<?php echo $product->image->name ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->title ?></h5>
                    <p class="card-text"><?php echo $product->bio ?></p>
                    <p class="card-text"><?php echo implode(" - ", $product->cast) ?></p>
                    <p class="card-text"><?php echo get_class($product) ?></p>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>