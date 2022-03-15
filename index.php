<?php

class Movie {

    public $originalTitle;
    public $title;
    public $originalLanguage;
    public $releaseDate;
    public $overview;
    public $adult=false;

    public function __construct($original_Title,$title, $_adult) {
        $this->originalTitle = $original_Title;
        $this->title = $title;
        $this->adult = $_adult;
    }

    public function get_titles(){
        return "<h1> Original Title: ".$this->originalTitle . "</h1>" . ''. "<h1> Title It: ". $this->title . "</h1>";
        
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP-MOVIE</title>
</head>
<body>
    <?php

    //Primo oggetto film
    $starWars= new Movie('Star Wars','Guerre Stellari',false);
    echo "<div class='container'>";
            echo "<h1>" . $starWars->get_titles() . "</h1>";
            echo "<h2>".'Original Language: '.$starWars->originalLanguage='en'."</h2>";
            echo "<h2>".'Relase Date : '.$starWars->releaseDate='1997/05/25'."</h2>";
            echo "<p>".'<strong> Overview: </strong>'.$starWars->overview='Princess Leia is captured and held hostage by the evil Imperial forces in their effort to take over the galactic Empire. Venturesome Luke Skywalker and dashing captain Han Solo team together with the loveable robot duo R2-D2 and C-3PO to rescue the beautiful princess and restore peace and justice in the Empire.'."</p>";
    echo "</div>";
    //Secondo oggetto film
    $gremlins= new Movie('Gremlins','Gremlins',false);
    echo "<div class='container'>";
            echo "<h1>" . $gremlins->get_titles() . "</h1>";
            echo "<h2>".'Original Language: '.$gremlins->originalLanguage='en'."</h2>";
            echo "<h2>".'Relase Date : '.$gremlins->releaseDate='1984-06-07'."</h2>";
            echo "<p>".'<strong> Overview: </strong>'.$gremlins->overview='When Billy Peltzer is given a strange but adorable pet named Gizmo for Christmas, he inadvertently breaks the three important rules of caring for a Mogwai, and unleashes a horde of mischievous gremlins on a small town.'."</p>";
    echo "</div>";

        //Terzo ogetto film
    $number23= new Movie('The Number 23','Il Numero 23',true);
    echo "<div id='adult' class='container'>";
            echo "<h1>" . $number23->get_titles() . "</h1>";
            echo "<h2>".'Original Language: '.$number23->originalLanguage='en'."</h2>";
            echo "<h2>".'Relase Date : '.$number23->releaseDate='2007-02-23'."</h2>";
            echo "<p>".'<strong> Overview: </strong>'.$number23->overview="Walter Sparrow is an animal control officer that becomes obsessed with a mysterious book that seems to be based on his own life. As soon as he opens the book, he notices strange parallels between what he reads and what he's experienced. But now he's worried that a fictional murder might materialize."."</p>";
    echo "</div>";
    ?>
     <script src="script.js"></script>
</body>
</html>


