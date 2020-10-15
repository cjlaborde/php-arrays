<?php


$items = [
    [
        'price' => 5,
    ],
    [
        'price' => 5,
    ],
    [
        'price' => 5,
    ],
];

/*
$total = array_reduce($items, function ($carry, $item) {
    var_dump($carry);
    return $item;
}, null);
*/
/*
$total = array_reduce($items, function ($carry, $item) {
    var_dump($item);
}, null);
*/

$total = array_reduce($items, function ($carry, $item) {
    if (!$carry) {
        return $item;
    }

    $carry['price'] += $item['price'];

    return $carry;
}, null);

var_dump($total['price']);
