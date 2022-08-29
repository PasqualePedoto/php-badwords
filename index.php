<?php
$paragraph = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
Architecto nam possimus quam maxime vero neque eum at quo iure. Non deleniti 
possimus accusantium, sequi minus autem vitae unde perspiciatis itaque.";

$paragraph_length = strlen($paragraph);
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
</body>
</html>