<?php

$people = [
    [
        'id' => 1,
        'first_name' => 'Alex',
        'last_name' => 'Garret',
        'email' => 'alex@gmail.com',
    ],
    [
        'id' => 2,
        'first_name' => 'Billy',
        'last_name' => 'Garret',
        'email' => 'billy@gmail.com',
    ],
    [
        'id' => 3,
        'first_name' => 'Dale',
        'last_name' => 'Garret',
        'email' => 'dale@gmail.com',
    ],
    [
        'id' => 4,
        'first_name' => null,
        'last_name' => null,
        'email' => 'ashley@gmail.com',
    ]
];
/*
// Using foreach
foreach ($people as $person) {
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    unset($person);
}

var_dump($people);
*/

/*
$people = array_map(function ($person) {
    if (!$person['first_name'] && !$person['last_name']) {
        $person['full_name'] = null;
        return $person;
    }

    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    return $person;
}, $people);
*/
/*
$people = array_map(function ($person, $index) {
    var_dump($index);
}, $people, array_keys($people));
*/

// var_dump($people);
/*
$people = array_map(function ($person, $index, $letter) {
    // var_dump($index);
    var_dump($letter);
}, $people, array_keys($people), ['a', 'b', 'c', 'd']);
*/

$ages = [26, 22, 53, 51];

$people = array_map(function ($person, $index) use ($ages) {
    $person['age'] = $ages[$index];
    return $person;
}, $people, array_keys($people));

var_dump($people);
