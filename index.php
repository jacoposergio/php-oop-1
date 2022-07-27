<?php
class Movie {

    public $title;

    public $director;

    public $language = 'en';
    
    public $runtime;

    public $oscar;

    public function __construct($_title, $_director) {
        $this->title = $_title;
        $this->director = $_director;
    }
    
    public function oscarNumbers() {
        return 'Il film ha vinto'.' '. $this->oscar. ' ' . 'premi oscar';
    }
}

$alien = new Movie('Alien','Ridley Scott');
$alien->runtime = '120 min';
$alien->language = 'it';
$alien->oscar = '1';
var_dump($alien->oscarNumbers());

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
    <h1>LISTA FILM</h1>
    <h2><?php echo $alien->title; ?></h2>
    <h3>Director: <?php echo $alien->title; ?> </h3>
    <h4>Language:  <?php echo $alien->language; ?> </h4>
    <h4>Runtime:  <?php echo $alien->runtime; ?> </h4>
    <h5><?php echo $alien->oscarNumbers(); ?> </h5>
</body>
</html>