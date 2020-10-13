<?php
/*
sort(); // sorts an array
rsort(); // sort in reverse

asort(); // will sort array and keep index of that in place

arsort(); // sort array and keep index of that in place but in reverse

ksort(); // sort by key
krsort(); // sort by key in reverse

natsort(); // sort by natural order algorithm

usort(); // alow you to sort by a defined function to sort very specifically

uksort(); // Will sort by key with the defined function

array_multisort();
*/
/*
$names = ['alex', 'dale', 'billy', 'ashley'];
sort($names);
var_dump($names);

$numbers = [50, 20, 13, 11, 1];
sort($numbers);
var_dump($numbers);

$names = ['alex', 'dale', 'billy', 'ashley'];
rsort($names);
var_dump($names);

$numbers = [50, 20, 13, 11, 1];
rsort($numbers);
var_dump($numbers);
*/

// $names = ['alex' => 26, 'dale' => 54, 'billy' => 22, 'ashley' => 52];

// sort($names);
/*
array (size=4)
  0 => int 22
  1 => int 26
  2 => int 52
  3 => int 54
*/
// asort($names);
/*
array (size=4)
  'billy' => int 22
  'alex' => int 26
  'ashley' => int 52
  'dale' => int 54
*/

// arsort($names);
/*
array (size=4)
  'dale' => int 54
  'ashley' => int 52
  'alex' => int 26
  'billy' => int 22
*/

// var_dump($names);

// $numbers = [50, 20, 13, 11, 1];

// sort($numbers);
// asort by keys order
// asort($numbers);
// arsort($numbers);

// var_dump($numbers);
// ksort($names);
// krsort($names);
// var_dump($names);

/*
$files = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
natsort($files);

var_dump($files);
*/
// $numbers = [4, 10, 1, 52, 89];
/*
usort($numbers, function ($first, $second) {
    if ($first === $second) {
        return 0;
    }
    // if ($first > $second) {
    //     return 1;
    // } else {
    //     return -1;
    // }

    // return ($first > $second) ? 1 : -1;
});
*/
// echo 1 <=> 1;
// echo 1 <=> 2; // -1
// echo 2 <=> 1; // 1
/*
usort($numbers, function ($first, $second) {
    return $first <=> $second;
});

var_dump($numbers);
*/

$users = [
    ['username' => 'alex', 'reputation' => 50, 'posts' => 200],
    ['username' => 'dale', 'reputation' => 300, 'posts' => 150],
    ['username' => 'billy', 'reputation' => 2, 'posts' => 5],
    ['username' => 'ashley', 'reputation' => 1, 'posts' => 6]

];

/*
usort($users, function ($first, $second) {
    $scoreOne = $first['reputation'] + $first['posts'];
    $scoreTwo = $second['reputation'] + $second['posts'];

    // if the 2 scores are equal we reach this block
    // if reputation of first person is higher then we want to return 0
    // Otherwise you want to return 1
    //
    if ($scoreOne === $scoreTwo) {
        return ($first['reputation'] > $second['reputation']) ? 0 : 1;
    }

    return ($scoreOne > $scoreTwo) ? -1 : 1;
});
*/

function sortByScore($first, $second)
{
    $scoreOne = $first['reputation'] + $first['posts'];
    $scoreTwo = $second['reputation'] + $second['posts'];

    // if the 2 scores are equal we reach this block
    // if reputation of first person is higher then we want to return 0
    // Otherwise you want to return 1
    //
    if ($scoreOne === $scoreTwo) {
        return ($first['reputation'] > $second['reputation']) ? 0 : 1;
    }

    return ($scoreOne > $scoreTwo) ? -1 : 1;
}

// usort($users, 'sortByScore');

// var_dump($users);



// $numbers = [50, 20, 13, 11, 1];
/*

$numbers = [50, 20, 13, 11, 1, '100alex'];

array_multisort($numbers, SORT_DESC, SORT_STRING);

// var_dump($numbers);

$files = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];

array_multisort($files, SORT_DESC, SORT_NATURAL);

var_dump($files);
*/

$names = ['alex', 'dale', ' tabby', 'ashley'];

$numbers = [1, 2, 3, 4];

array_multisort($names, $numbers);

var_dump($names);
var_dump($numbers);

/*
0 => string ' tabby' (length=6)
  1 => string 'alex' (length=4)
  2 => string 'ashley' (length=6)
  3 => string 'dale' (length=4)

array (size=4)
  0 => int 3
  1 => int 1
  2 => int 4
  3 => int 2
*/