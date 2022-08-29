<?php
// Paragrafo 
$paragraph = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
Architecto nam possimus quam maxime vero neque eum at quo iure.";

// Lunghezza del paragrafo
$paragraph_length = strlen($paragraph);

// Prelevo la query string
$bad_word = $_GET['badword'];

// Faccio l'up della prima lettera della parola perchè avevo passato Lorem
// $up_bad_word = ucfirst($bad_word);

// Censuro il poaragrafp
$paragraph_censured = str_replace($bad_word,'*****',$paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS</title>
</head>
<body>
    <!-- Paragrafo preso con PHP -->
    <p><?= $paragraph ?></p>
    <!-- Lunghezza del paragrfo calcolata con un metodo PHP -->
    <div>Lunghezza del paragrafo: <?= $paragraph_length ?></div>
    <!-- Parola da censurare -->
    <div>Parola da censurare: <?= $bad_word ?></div>
    <!-- Testo censurato -->
    <div>Testo censurato: <?= $paragraph_censured ?></div>
</body>
</html>