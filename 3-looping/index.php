<?php

/*
$people = [
    [
        'id' => 1,
        'name' => 'alex',
        'email' => 'alex@gmail.com',
    ],
    [
        'id' => 2,
        'name' => 'billy',
        'email' => 'billy@gmail.com',
    ],
];

foreach ($people as $person) {
    echo $person['name'], ' ', $person['email'], '<br>';
}
*/
/*
$people = [
    [
        'id' => 1,
        'name' => 'alex',
        'email' => 'alex@gmail.com',
        'likes' => ['food', 'cats'],
    ],
    [
        'id' => 2,
        'name' => 'billy',
        'email' => 'billy@gmail.com',
        'likes' => ['books'],
    ],
];
*/

/*
foreach ($people as $person) {
    echo $person['name'], '<br>';

    foreach ($person['likes'] as $like) {
        echo $like, '<br>';
    }
}
*/

/*
foreach ($people as $person) {
    echo $person['name'], '<br>';
    echo $person['likes']; //  Array to string conversion in
    echo  '<br><br>';

}
*/
// implode
/*
foreach ($people as $person) {
    echo $person['name'], '<br>';
    echo implode(' ', $person['likes']); //  Array to string conversion in
    echo  '<br><br>';
}
*/

// index
/*
    foreach ($people as $index => $person) {
        echo $index . ':' . $person['name'], '<br>';
    }
*/

/*
$people = [
    'alex' =>[
        'id' => 1,
        'name' => 'alex',
        'email' => 'alex@gmail.com',
        'likes' => ['food', 'cats'],
    ],
    'billy' => [
        'id' => 2,
        'name' => 'billy',
        'email' => 'billy@gmail.com',
        'likes' => ['books'],
    ]
];

foreach ($people as $index => $person) {
    echo $index, '<br>';
}
*/

/*
$statuses = [
    ['text' => 'What a lovely day'],
    ['text' => 'I love coding'],
    'status' => 200,
];
*/

// var_dump($statuses);
// die();

/*
foreach ($statuses as $status) {
    var_dump($status);
    // echo $status['text'], '<br>';
}
*/
/*
foreach ($statuses as $index => $status) {
    if ($index !== 'status') {
        echo $status['text'], '<br>';
    }
}
*/

// continue

/*
foreach ($statuses as $index => $status) {
    if ($index === 'status') {
        continue;
    }
    echo $status['text'], '<br>';
}
*/

/*
$statuses = [
    'status' => 200,
    ['text' => 'What a lovely day'],
    ['text' => 'I love coding'],
];

foreach ($statuses as $index => $status) {
    if ($index === 'status') {
        die($index);
        continue;
    }
    echo $status['text'], '<br>';
}
*/

// Break
$people = [
    [
        'id' => 1,
        'name' => 'alex',
        'email' => 'alex@gmail.com',
    ],
    [
        'id' => 2,
        'name' => 'billy',
        'email' => 'billy@gmail.com',
    ]
];

// name we looking for
$toFind = 'alex';
// variable to find the found value
// we can set it to empty array [] or false
$found = false;

/*
foreach ($people as $person)
{
    if ($person['name'] === $toFind) {
        $found = $person;
        break;
    }
}
*/

/*
foreach ($people as $person)
{
    if ($person['name'] === $toFind) {
        $found = $person;
        break 2;
    }
}
*/

/*
foreach ($people as $person)
{
    foreach (range(1, 5) as $x) {
        var_dump($x); // int 1
        break 2;
    }
}

*/

/*
foreach ($people as $person)
{
    var_dump($person);
    foreach (range(1, 5) as $x) {
        var_dump($x); // int 1
        break 2;
    }
}
*/


// var_dump($found);
/*
foreach ($people as $person) {
    echo $person['name'], '<br>';
}
*/

/*
foreach ($people as $person) {
    $person['name'] = 'dale';
}
*/

/*
foreach ($people as &$person) {
    $person['name'] = 'dale';
}

var_dump($people);
*/

/*
$newPeople = [];

foreach ($people as $person) {
    $person['name'] = 'dale';
    $newPeople[] = $person;
}

var_dump($newPeople);
*/

$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
    unset($number);
}

// var_dump($numbers);

foreach ($numbers as $number) {
    var_dump($number);
}
















