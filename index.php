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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.png">
    <title>Movies</title>
</head>

<body>
    <header class="d-flex align-items-center">
        <h1 class="col-12 text-center">My 3 Favourite movies</h1>
    </header>
    <main>
        <div class="container">
            <ul class="d-flex flex-row">
                <?php foreach ($movies as $movie) :
                    $movie_obj = new Movie($movie['poster'], $movie['title'], $movie['year'], $movie['genre'], $movie['vote']);
                ?>
                    <li class="col-3 d-flex justify-content-center">
                        <div class="movie">
                            <img src="img/<?= $movie_obj->poster ?>.jpg" alt="">
                            <h3><b>Title:</b> <?= $movie_obj->title ?></h3>
                            <p><b>Year:</b> <?= $movie_obj->year ?></p>
                            <p><b>Genre:</b> <?= $movie_obj->genre ?></p>
                            <p><b>Vote average:</b> <?= $movie_obj->vote_average ?></p>
                        </div>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </main>
</body>

</html>