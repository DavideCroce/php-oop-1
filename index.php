<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
include 'data/Movie.php';
include 'movies.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png">
    <title>Movies</title>
</head>

<body>
    <main>
        <div class="container">
            <ul>
                <?php foreach ($movies as $movie) :
                    $movie_obj = new Movie($movie['poster'], $movie['title'], $movie['year'], $movie['genre'], $movie['vote']);
                ?>
                    <li>
                        <img src="img/<?= $movie_obj->poster ?>.jpg" alt="">
                        <h3><?= $movie_obj->title ?></h3>
                        <p><?= $movie_obj->year ?></p>
                        <p><?= $movie_obj->genre ?></p>
                        <p><?= $movie_obj->vote ?></p>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </main>
</body>

</html>