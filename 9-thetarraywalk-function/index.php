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
$people = array_map(function ($person) {
    $person['first_name'] = 'Dale';
    return $person;
}, $people);
*/


/*
array_walk($people, function (&$person, $index) {
    $person['first_name'] = 'Dale';
    return $person;
});
*/
/*
array_walk($people, function (&$person, $index, $data) {
    $person['first_name'] = $data['first_name'];
    $person['first_name'] = $data['last_name'];
    return $person;
}, ['first_name' => 'Dale', 'last_name' => 'Smith']);

 var_dump($people);
*/

function joinName(&$person, $index, $delimeter = ' ')
{
    $person['full_name'] = $person['first_name'] . $delimeter . $person['last_name'];
    return $person;
}

array_walk($people, 'joinName');
array_walk($people, 'joinName', '%20');

// var_dump($people);


$payload = [
    [
        'id' => '1.5',
        'body' => 'What a lovely day',
        'user' => [
            'id' => '123'
        ]
    ],
    [
        'id' => '2',
        'body' => 'What a lovely day',
        'user' => [
            'id' => '456'
        ]
    ],
];

// var_dump($payload);
/*
// gets all values
array_walk_recursive($payload, function (&$value) {
    var_dump($value);
});
*/
/*
array_walk_recursive($payload, function (&$value) {
    // if (is_numeric($value)) {
    //     $value = (int) $value;
    // }
    $value = is_numeric($value) ? (int) $value : $value;
});
*/

function castNumericValues(&$value)
{
    // if (is_numeric($value)) {
    //     $value = (float) $value;

    //     if (floor($value) === $value) {
    //         $value = (int) $value;
    //     }
    // }
    if (!is_numeric($value)) {
        return;
    }
    $value = (float) $value;

    if (floor($value) === $value) {
        $value = (int) $value;
    }
}

array_walk_recursive($payload, 'castNumericValues');



var_dump($payload);
