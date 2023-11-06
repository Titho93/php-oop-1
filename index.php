<?php

class Movie {
    public $title;
    public $language;
    public $bio;
    public $price;

    public function __construct( string $_title, string $_language, string $_bio, float $_price){
        $this->title = $_title;
        $this->language = $_language;
        $this->bio = $_bio;
        $this->price = $_price;
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    
<h1>ciao</h1>

</body>
</html>