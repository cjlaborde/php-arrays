<?php

// $names = array('alex', 'billy', 'dale');

// var_dump($names);

/*
$people = [
    'alex' => [
        'id' => 1,
        'email' => 'alex@email.com'
    ],
    'billy' => [
        'id' => 2,
        'email' => 'billy@email.com'
    ],
    
];
*/

/*
$people = [
    [
        'id' => 1,
        'username' => 'alex',
        'email' => 'alex@gmail.com',
    ],
    [
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ],
];


var_dump($people);
*/

/*
$names = ['alex', 'billy'];

// echo $names[0]; // alex
echo $names[1]; // billy
echo $names[2]; // Undefined offset: 2

// var_dump($names);

*/

/*
$people = [
    [
        'id' => 1,
        'username' => 'alex',
        'email' => 'alex@gmail.com',
    ],
    [
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ],
];

var_dump($people);

echo $people[0]['username']; // alex
echo $people[1]['username']; // billy
echo $people[1]['bio']; // Notice: Undefined index: bio

*/

$people = [
    'alex' => [
        'id' => 1,
        'username' => 'alex',
        'email' => 'alex@gmail.com',
    ],
    'billy' => [
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ],
    'billy' => [
        'id' => 3,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ]
];

var_dump($people);