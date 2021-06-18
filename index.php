<!-- - create un file index.php
- includete una classe “Movie”
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
BONUS:
1 Utilizzare almeno una proprietà e un metodo privato
2 Utilizzare almeno una proprietà e un metodo statico -->

<?php

require_once __DIR__ . '/Movie.php';

$film_1 = new Movie('Titanic', 'romantico/drammatico', 195, 'James Cameron');
$film_2 = new Movie('Colpa delle stelle', 'romantico/drammatico', 133, 'Josh Boone');
$film_3 = new Movie('La sirentta', 'cartone animato', 83, 'Walt Disney');







?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 1 - MOVIE</title>
</head>
<body>
  <h4>Film 1</h4>
  <ul>
    <li>Titolo film: <?php echo $film_1->titolo ?></li>
    <li>Genere: <?php echo $film_1->genere ?></li>
    <li>Durata: <?php echo $film_1->durata ?> minuti</li>
    <li>Regista: <?php echo $film_1->regista ?></li>
    

    
  </ul>

  <h4>Film 2</h4>
  <ul>
    <li>Titolo film: <?php echo $film_2->titolo ?></li>
    <li>Genere: <?php echo $film_2->genere ?></li>
    <li>Durata: <?php echo $film_2->durata ?> minuti</li>
    <li>Regista: <?php echo $film_2->regista ?></li>

    
  </ul>

  <h4>Film 3</h4>
  <ul>
    <li>Titolo film: <?php echo $film_3->titolo ?></li>
    <li>Genere: <?php echo $film_3->genere ?></li>
    <li>Durata: <?php echo $film_3->durata ?> minuti</li>
    <li>Regista: <?php echo $film_3->regista ?></li>

    
  </ul>


  
</body>
</html>