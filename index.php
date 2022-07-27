<?php
class Movie {

    public $title;

    public $director;

    public $language = 'en';
    
    public $runtime;

    public function __construct($_title, $_director) {
        $this->title = $_title;
        $this->director = $_director;
    }
    
    public function released() {
        return $this->director;
    }
}

$alien = new Movie('Alien','Ridley Scott');

$alien->runtime = 'min';
$alien->language = 'it';
var_dump($alien->released());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>