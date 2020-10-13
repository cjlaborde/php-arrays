<?php

$users = [
    ['username' => 'alex', 'score' => 0],
    ['username' => 'ashley', 'score' => 0],
    ['username' => 'dale', 'score' => 50],
    ['username' => 'billy', 'score' => 12],
];

/*
$users = array_filter($users, function ($user) {
    // return false;
    // return true;
    if ($user['score'] > 0) {
        return true;
    }
});
*/
// filter out users with score 0
/*
$users = array_filter($users, function ($user) {
    return $user['score'] > 0;
});
*/

// filter and only return user with index 0
$users = array_filter($users, function ($user, $index) {
    return $index === 0;
}, ARRAY_FILTER_USE_BOTH);
// var_dump($users);
/*
array (size=0)
  empty
*/

$scores = [
    2,
    5,
    10,
    false,
    null,
    0,
    -5
];

$scores = array_filter($scores);
var_dump($scores);
/*
array (size=3)
  0 => int 2
  1 => int 5
  2 => int 10
*/
