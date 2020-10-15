<?php

$colors = ['#ff7473', '#ffc952', '#47b8e0', '#34314c'];
/*
// echo rand(1, 5);

// $backgroundColor = $colors[rand(0, 3)];
$backgroundColor = $colors[rand(0, count($colors) - 1)];

echo $backgroundColor;
*/

/*
$backgroundColorKey = array_rand($colors, 1);

$backgroundColor = $colors[$backgroundColorKey];
*/

$backgroundColor = $colors[array_rand($colors, 1)];
// var_dump($backgroundColorKey);
var_dump($backgroundColor);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
        }
    </style>
</head>

<body>

</body>

</html>