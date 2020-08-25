<?php

// $people = ['alex', 'billy', 'dale'];
// $people = ['alex', 'billy', 'dale', 'alex'];

// echo count($people); // 3
// echo array_count_values($people); // Notice: Array to string conversion

// $count = array_count_values($people);

// var_dump($count);

// echo count($people); // 4
// echo sizeof($people); // 4


// var_dump(count($names));


$people = [
    [
        'id' => 1,
        'username' => 'alex'
    ],
    [
        'id' => 2,
        'username' => 'dale'
    ],
];

echo count($people); // 2
die();

var_dump($people);