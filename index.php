<?php

class Movie {
    public $title;
    public $language;
    public $bio;
    public $year;

    public function __construct( string $_title, string $_language, string $_bio, float $_year){
        $this->title = $_title;
        $this->language = $_language;
        $this->bio = $_bio;
        $this->year = $_year;
    }
}

$movies = [
    new Movie ( "La minaccia fantasma", "En", "Star Wars: Episodio I - La minaccia fantasma", 1999),
    new Movie ( "L'attacco dei cloni", "En", "Star Wars: Episodio II - L'attacco dei cloni", 2002),
    new Movie ( "L'attacco dei cloni", "En", "Star Wars: Episodio III - La vendetta dei Sith", 2005)
]

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
    
<div class="container">
    <div class="row">
        <div class="col"></div>
    </div>
</div>

</body>
</html>