<?php
require_once __DIR__.'/classes/Movie.php';


$moviesList = [
    new Movie('Balle Spaziali', 'comico', '1994', 'en'),
    new Movie('Natale sul Nilo', 'comico', '2010', 'it'),
    new Movie('Tutti pazzi per Milan', 'commedia', '2022', 'it'),
];

$moviesList[0]->setRating('8');

$moviesList[1]->setRating(3.2);

$moviesList[1]->setRating('not a number');

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
    <ul>
        <?php 
        foreach($moviesList as $movie) {
            [$title, $genre, $year, $rating, $language] = $movie->getInfo();
            if($rating == NULL) {
                $rating = '-';
            }
            echo "
                <li>
                    <h4>Titolo: {$title}</h4>
                    <ul>
                        <li>Genere: {$genre}</li>
                        <li>Anno: {$year}</li>
                        <li>Voto: {$rating}</li>
                        <li>Lingua originale: {$language}</li>
                    </ul>
                </li>" ;
        } 
        ?>
    </ul>
</body>
</html>
