<?php

$array = ['alex' => 26, 'billy' => 22];

$keys = array_keys($array);

// var_dump($keys);
/*
array (size=2)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
*/


// $db = new PDO('mysql:host=localhost;dbname=project', 'homestead', 'secret');

$fields = [
    'name'  => 'alex',
    'email' => 'alex@codecourse.com'
];

$id = 1;
/*
$update = $db->prepare("UDATE users SET name = ?, email = ? WHERE id = ?");

$update->execute([
    'alex',
    1
]);
*/
// here we are impode an array and turning into a string
// separating the keys here by the value ' = ?, '

$values = implode(' = ?, ', array_keys($fields)) . ' = ?';

// var_dump(array_merge($fields, [$id]));
/*
array (size=3)
  'name' => string 'alex' (length=4)
  'email' => string 'alex@codecourse.com' (length=19)
  0 => int 1
*/

var_dump(array_merge(array_values($fields), [$id]));
/*
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'alex@codecourse.com' (length=19)
  2 => int 1
*/


// echo $values; // name = ?, email = ?
// echo "UPDATE users SET {$values} WHERE id = ?";

$update = $db->prepare('UPDATE users SET {$values} WHERE id = ?');
$update->execute(array_merge(array_values($fields), [$id]));
