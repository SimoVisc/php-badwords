<?php

$meteo = 'Meteo Cronaca diretta: dalle Piogge ai Nubifragi, forte peggioramento nelle Prossime Ore';
$censure_word = $_GET['word'];
$text_censured = str_replace($censure_word, '***', $meteo)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p><?php echo $meteo ?></p>
    <h3>Lungezza meteo: <?php echo strlen($meteo)?></h3>
    <p> <?php echo $text_censured; ?></p>
</body>
</html>