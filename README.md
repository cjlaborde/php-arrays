# Arrays are Everything

### 1. Array Basics

1. Create basic array
```php
$names = array('alex', 'billy', 'dale');
```
2. Now we use var_dump to dump out the output of a variable
```php
var_dump($names);
```
```php
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
```
3. Now lets define something we might get from our database.
4. This is a multi dimensional array since we have an array outside.
```php
$people = [
    'alex' => [
        'id' => 1,
    ]
];

```
5. As you see this is different to what we had before
```php
$names = ['alex', 'billy', 'dale'];
```
6. As you see we start at 0 and then count outwards. This is what zero index means
```php
var_dump($names);
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
```
7. In here we defining a string base key
```php
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

```
8. Now we use var_dump($people)
9. Notice now there are no numerical keys
```php
array (size=2)
  'alex' => 
    array (size=2)
      'id' => int 1
      'email' => string 'alex@email.com' (length=14)
  'billy' => 
    array (size=2)
      'id' => int 2
      'email' => string 'billy@email.com' (length=15)
```
10. There is a better way to do this a more real world way.
11. If this was data comming from the database you would not have keys coming from the database
```php
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
```
12. var_dump($people);
```php
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
13. Now we still have an array with 2 arrays inside
14. We dealing here with a numerical indexed array
15. Lets say we want to loop through these arrays
16. When we can to manipulate it or output it on the page.
17. For your users to actually see.
18. var_dump is very realiable to tell you exactly what you working with.
19. Will make your job a lot easier.

#### Lets see how we access array values
1. Now we will use a simple example again
```php
$names = ['alex', 'billy'];

var_dump($names);
```

2. Here we have numerical array with values

```php
array (size=2)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
```
3. Now we will output a value using the key
4. it can work as well if the key is a string echo $names['alex'];
```php
$names = ['alex', 'billy'];

echo $names[0]; // alex
echo $names[1]; // billy
echo $names[2]; // Undefined offset: 2
```
3. Now if index not found you get offset error.
4. Now what if you want to access multidimensional array value
```php
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
```
5. Now we will access a key value inside one of the arrays
6. You have to chain to access them
```php
echo $people[0]['username']; // alex
echo $people[1]['username']; // billy
echo $people[1]['bio']; // Notice: Undefined index: bio
```
7. Again if you try to access key that doesn't exist you get Undefined index error
8. Now we do var_dump(people);
```php
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
9. Notice each item has unique index.
10. Now you have have string index that you may also find at some point
```php
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
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ]
];

```
11. var_dump($people);
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
1.   We have the following and 2 keys are the say we will only see 1 item in the var_dump
```php
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
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ]
];
```
1.  var_dump
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
14. Now what we can do is change the id of the second one to 3
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 3
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
15. Now we see that is the last one that get output only
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 3
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
16. the array item with id 2 gets set then get replaced by the array item with id 3 that has same key name.
17. Important to remember array keys are unique.

### Counting
1. The ability to count the items within an array is extremely useful
2. Now we will use a basic array again. When we get value we can also store it to use it later.
```php
$people = ['alex', 'billy', 'dale'];

echo count($people); // 3
```
3. Now we will use a different way to count
```php
$people = ['alex', 'billy', 'dale'];

echo array_count_values($people); //  Notice: Array to string conversion 
```
4. When working with arrays this may be another thing you may see.
5. This error means we trying to echo out a value which is an array
6. We could do a var_dump but we can only echo out things like integers and strings or floats etc
7. So lets create variable and var_dump it to see what is going on.
```php
$count = array_count_values($people);

var_dump($count);
```
8. What array_count_values done is count the amount of items within the array.
9. How often they occur, in this case all items having only 1 value.
10. Is not counting all items but is counting items within an array.
```php
array (size=3)
  'alex' => int 1
  'billy' => int 1
  'dale' => int 1
```
11. Lets test it out by adding a couple of more values.
12. Bear in mind these are not indexes they are values.
```php
$people = ['alex', 'billy', 'dale', 'alex'];

var_dump($people);

array (size=3)
  'alex' => int 2
  'billy' => int 1
  'dale' => int 1
```
13. Now we see we get key alex with count of 2.
14. So if you were to count unique items in array you use array_count_values
15. Now if you wanted to just count all items in array use count()
16. Sometimes you will encounter sizeof()
17. Which is just an alias of count and does the same thing
```php
echo count($people); // 4
echo sizeof($people); // 4
```

#### Now we will use a more complex array
1. We will use a multidimensional array
```php
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

```
2. var_dump($people);
```php
array (size=2)
  0 => 
    array (size=2)
      'id' => int 1
      'username' => string 'alex' (length=4)
  1 => 
    array (size=2)
      'id' => int 2
      'username' => string 'dale' (length=4)
```
3. Now we have 2 items within this array.
4. We can prove this by doing an echo on count($people);
```php
echo count($people); // 2
die();

```
5. All that matters is items imediately within the array that is why we get 2 instead of 4.
6. What we not doing is using a recursive function to count every single item, is only those in very top level
7. There are some ways we can do this, which we will explore in a later lesson.

### Looping
1. looping through arrays is what you going to do most often.
2. If you have data from database you going to loop through the data and output it on the page.
3. Lets use the example we used before of people
```php
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
```
4. We going to loop through this array and output the data using a foreach()
5. first you use plural then single example users as user
```php
foreach ($people as $person) {
    echo $person['name'] . '<br>';
}

/*
  alex
  billy
*/
```
6. You can also append other properties
```php

foreach ($people as $person) {
    echo $person['name'], ' ', $person['email'], '<br>';
}
/*
  alex alex@gmail.com
  billy billy@gmail.com
*/
```
7. If you have a more complex multi dimensional array
8. You can loop through arrays within arrays
9. These arrays can be very similar since they usually comming from your database
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';

    foreach ($person['likes'] as $like) {
        echo $like, '<br>';
    }
/*
    alex
    food
    cats
    billy
    books
*/
}
```
10. There are better ways to do this.
11. If you find yourself using too many loops.
12. You can use things like implode.

#### implode
1. implode is a function that allows you to take array items and create a string which you then pass it an limiter.
2. Without implode we get error since we try to echo an array
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';
    echo $person['likes']; //  Array to string conversion in
    echo  '<br><br>';

}
```
3. With implode first item we pass is limiter that can be a space or break
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';
    echo implode(' ', $person['likes']);

    echo  '<br><br>';
}
/*
  alex
   food cats

   billy
   books
*/
```
4. Now we get similar results without having to nest too many foreach loops
5. This is a basic example and later we will look into imploding and exploding
6. Exploding is opposite where we get a string and create an array
7. You don't want to create too many nests
8. Next we going to access index of each of the items we looping through as we lopp through them.

#### access index
1. To access an index of an item we write $index => before the single version we looping through $person
```php
foreach ($people as $index => $person) {
    echo $index . ':' . $person['name'], '<br>';
}
/*
   0:alex
   1:billy
*/
```
2. Also if you have array value with string as the key
```php
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
/*
  alex
  billy
*/
```
3. Usually when creating foreach loop is good practice to include $index => even if you don't use it.
4. Just so is there and if I need it, there is not need to update it.
5. Now we will use an example where we will use the key
6. Now lets say we hit twitter api and we get list of statuses
```php
$statuses = [
    ['text' => 'What a lovely day'],
    ['text' => 'I love coding'],
];

foreach ($statuses as $status) {
    echo $status['text'], '<br>';
}

/*
  What a lovely day
  I love coding
*/
```
7. Now what happens if we have another key here with success code of api
```php
$statuses = [
    ['text' => 'What a lovely day'],
    ['text' => 'I love coding'],
    'status' => 200,
];

var_dump($statuses);
die();
/*
  array (size=3)
  0 => 
    array (size=1)
      'text' => string 'What a lovely day' (length=17)
  1 => 
    array (size=1)
      'text' => string 'I love coding' (length=13)
  'status' => int 200
*/
```
8. Now we got numerical index 0,1 and string index key so we have a mixed set.
9. Now is not going to work very well. Since we don't get value.
10. But if we use a var_dump we will see the value.
```php
foreach ($statuses as $status) {
    var_dump($status);
}

/*
  array (size=1)
  'text' => string 'What a lovely day' (length=17)

  array (size=1)
    'text' => string 'I love coding' (length=13)

  int 200
*/
```
11.  since we trying to do here for each of these status we trying to access a property called text
12.  Depending on error level reporting this may cause problems
13. So what you would do to resolve this problem with index is
```php
foreach ($statuses as $index => $status) {
    if ($index !== 'status') {
        echo $status['text'], '<br>';
    }
}

/*
  What a lovely day
  I love coding
*/
```
14. This may have worked without issue but depending on your enviroment error setting this may have give you error before
15. There is a better way to do this since, is not always a good idea to nest things in this way.
16. Usually better to have everything you want to do in the first level of this block.

#### Continue
1. Using continue it will skip the loop that matches
```php
foreach ($statuses as $index => $status) {
    if ($index === 'status') {
        continue;
    }
    echo $status['text'], '<br>';
}

/*
  What a lovely day
  I love coding
*/
```
2. So this line of code will not be executed `echo $status['text'], '<br>';`
3. We can prove this by output the index.
```php
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
/*
  status
*/
```
4. This is a way to do it, yet by the end of the series you will find better ways to do this.

#### Break
1. There may be cases where you want to loop through set of data but you may need to exit that loop at some point
2. Now we will create simple loop that will find user and break out of the loop when we find that user
3. This is not a replacement for any search functionality
4. We going to check if one of these names equals a certain value
5. When we find the name we looking through we break out of the loop since there is no need to keep searching
```php
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

foreach ($people as $person)
{
    if ($person['name'] === $toFind) {
        $found = $person;
        break;
    }
}

var_dump($found);
/*
  array (size=3)
  'id' => int 1
  'name' => string 'alex' (length=4)
  'email' => string 'alex@gmail.com' (length=14)
*/
```
6. If you have a loop within a loop you can use numbers to choose level you want to break out of
```php

foreach ($people as $person)
{
    if ($person['name'] === $toFind) {
        $found = $person;
        break 2; // Fatal error: Cannot 'break' 2 levels in
    }
}

```
7. In here the break 2 will work
8. Basically we will break out of both loops
```php
foreach ($people as $person)
{
    foreach (range(1, 5) as $x) {
        var_dump($x); // int 1
        break 2;
    }
}
```
8. As you see we only seeing 1 value and user since we breaking out of both loops

```php
foreach ($people as $person)
{
    var_dump($person);
    foreach (range(1, 5) as $x) {
        var_dump($x); // int 1
        break 2;
    }
}
/*
  array (size=3)
  'id' => int 1
  'name' => string 'alex' (length=4)
  'email' => string 'alex@gmail.com' (length=14)

  int 1

*/
```
9. Is rare to use this, but is good to know how to break levels.

#### using & to reference original value
1. We will now look at values by references it does not refer to original value we actually looping through
2. Lets say we loop through all people and set all their name to dale it does not change name
3. That is because people is local version not part by reference
4. What this means is that we can modify it but doesn't not affect original array
```php
foreach ($people as $person) {
    $person['name'] = 'dale';
}

var_dump($people);
/*
  array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
*/
```

5. So how we do this if we need to. we put a & before the variable and try again &person
6. Now it works and is pased by reference meaning it refers to actual original value
```php
foreach ($people as &$person) {
    $person['name'] = 'dale';
}

var_dump($people);
/*
  array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'dale' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'dale' (length=4)
      'email' => string 'billy@gmail.com' (length=15)
*/
```

7. There is a more long winged version
8. For example we go through an array and tidy up values.
```php# Arrays are Everything

### 1. Array Basics

1. Create basic array
```php
$names = array('alex', 'billy', 'dale');
```
2. Now we use var_dump to dump out the output of a variable
```php
var_dump($names);
```
```php
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
```
3. Now lets define something we might get from our database.
4. This is a multi dimensional array since we have an array outside.
```php
$people = [
    'alex' => [
        'id' => 1,
    ]
];

```
5. As you see this is different to what we had before
```php
$names = ['alex', 'billy', 'dale'];
```
6. As you see we start at 0 and then count outwards. This is what zero index means
```php
var_dump($names);
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
```
7. In here we defining a string base key
```php
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

```
8. Now we use var_dump($people)
9. Notice now there are no numerical keys
```php
array (size=2)
  'alex' => 
    array (size=2)
      'id' => int 1
      'email' => string 'alex@email.com' (length=14)
  'billy' => 
    array (size=2)
      'id' => int 2
      'email' => string 'billy@email.com' (length=15)
```
10. There is a better way to do this a more real world way.
11. If this was data comming from the database you would not have keys coming from the database
```php
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
```
12. var_dump($people);
```php
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
13. Now we still have an array with 2 arrays inside
14. We dealing here with a numerical indexed array
15. Lets say we want to loop through these arrays
16. When we can to manipulate it or output it on the page.
17. For your users to actually see.
18. var_dump is very realiable to tell you exactly what you working with.
19. Will make your job a lot easier.

#### Lets see how we access array values
1. Now we will use a simple example again
```php
$names = ['alex', 'billy'];

var_dump($names);
```

2. Here we have numerical array with values

```php
array (size=2)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
```
3. Now we will output a value using the key
4. it can work as well if the key is a string echo $names['alex'];
```php
$names = ['alex', 'billy'];

echo $names[0]; // alex
echo $names[1]; // billy
echo $names[2]; // Undefined offset: 2
```
3. Now if index not found you get offset error.
4. Now what if you want to access multidimensional array value
```php
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
```
5. Now we will access a key value inside one of the arrays
6. You have to chain to access them
```php
echo $people[0]['username']; // alex
echo $people[1]['username']; // billy
echo $people[1]['bio']; // Notice: Undefined index: bio
```
7. Again if you try to access key that doesn't exist you get Undefined index error
8. Now we do var_dump(people);
```php
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
9. Notice each item has unique index.
10. Now you have have string index that you may also find at some point
```php
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
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ]
];

```
11. var_dump($people);
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
1.   We have the following and 2 keys are the say we will only see 1 item in the var_dump
```php
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
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ]
];
```
1.  var_dump
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
14. Now what we can do is change the id of the second one to 3
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 3
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
15. Now we see that is the last one that get output only
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 3
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
16. the array item with id 2 gets set then get replaced by the array item with id 3 that has same key name.
17. Important to remember array keys are unique.

### Counting
1. The ability to count the items within an array is extremely useful
2. Now we will use a basic array again. When we get value we can also store it to use it later.
```php
$people = ['alex', 'billy', 'dale'];

echo count($people); // 3
```
3. Now we will use a different way to count
```php
$people = ['alex', 'billy', 'dale'];

echo array_count_values($people); //  Notice: Array to string conversion 
```
4. When working with arrays this may be another thing you may see.
5. This error means we trying to echo out a value which is an array
6. We could do a var_dump but we can only echo out things like integers and strings or floats etc
7. So lets create variable and var_dump it to see what is going on.
```php
$count = array_count_values($people);

var_dump($count);
```
8. What array_count_values done is count the amount of items within the array.
9. How often they occur, in this case all items having only 1 value.
10. Is not counting all items but is counting items within an array.
```php
array (size=3)
  'alex' => int 1
  'billy' => int 1
  'dale' => int 1
```
11. Lets test it out by adding a couple of more values.
12. Bear in mind these are not indexes they are values.
```php
$people = ['alex', 'billy', 'dale', 'alex'];

var_dump($people);

array (size=3)
  'alex' => int 2
  'billy' => int 1
  'dale' => int 1
```
13. Now we see we get key alex with count of 2.
14. So if you were to count unique items in array you use array_count_values
15. Now if you wanted to just count all items in array use count()
16. Sometimes you will encounter sizeof()
17. Which is just an alias of count and does the same thing
```php
echo count($people); // 4
echo sizeof($people); // 4
```

#### Now we will use a more complex array
1. We will use a multidimensional array
```php
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

```
2. var_dump($people);
```php
array (size=2)
  0 => 
    array (size=2)
      'id' => int 1
      'username' => string 'alex' (length=4)
  1 => 
    array (size=2)
      'id' => int 2
      'username' => string 'dale' (length=4)
```
3. Now we have 2 items within this array.
4. We can prove this by doing an echo on count($people);
```php
echo count($people); // 2
die();

```
5. All that matters is items imediately within the array that is why we get 2 instead of 4.
6. What we not doing is using a recursive function to count every single item, is only those in very top level
7. There are some ways we can do this, which we will explore in a later lesson.

### Looping
1. looping through arrays is what you going to do most often.
2. If you have data from database you going to loop through the data and output it on the page.
3. Lets use the example we used before of people
```php
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
```
4. We going to loop through this array and output the data using a foreach()
5. first you use plural then single example users as user
```php
foreach ($people as $person) {
    echo $person['name'] . '<br>';
}

/*
  alex
  billy
*/
```
6. You can also append other properties
```php

foreach ($people as $person) {
    echo $person['name'], ' ', $person['email'], '<br>';
}
/*
  alex alex@gmail.com
  billy billy@gmail.com
*/
```
7. If you have a more complex multi dimensional array
8. You can loop through arrays within arrays
9. These arrays can be very similar since they usually comming from your database
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';

    foreach ($person['likes'] as $like) {
        echo $like, '<br>';
    }
/*
    alex
    food
    cats
    billy
    books
*/
}
```
10. There are better ways to do this.
11. If you find yourself using too many loops.
12. You can use things like implode.

#### implode
1. implode is a function that allows you to take array items and create a string which you then pass it an limiter.
2. Without implode we get error since we try to echo an array
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';
    echo $person['likes']; //  Array to string conversion in
    echo  '<br><br>';

}
```
3. With implode first item we pass is limiter that can be a space or break
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';
    echo implode(' ', $person['likes']);

    echo  '<br><br>';
}
/*
  alex
   food cats

   billy
   books
*/
```
4. Now we get similar results without having to nest too many foreach loops
5. This is a basic example and later we will look into imploding and exploding
6. Exploding is opposite where we get a string and create an array
7. You don't want to create too many nests
8. Next we going to access index of each of the items we looping through as we lopp through them.

#### access index
1. To access an index of an item we write $index => before the single version we looping through $person
```php
foreach ($people as $index => $person) {
    echo $index . ':' . $person['name'], '<br>';
}
/*
   0:alex
   1:billy
*/
```
2. Also if you have array value with string as the key
```php
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
/*
  alex
  billy
*/
```
3. Usually when creating foreach loop is good practice to include $index => even if you don't use it.
4. Just so is there and if I need it, there is not need to update it.
5. Now we will use an example where we will use the key
6. Now lets say we hit twitter api and we get list of statuses
```php
$statuses = [
    ['text' => 'What a lovely day'],
    ['text' => 'I love coding'],
];

foreach ($statuses as $status) {
    echo $status['text'], '<br>';
}

/*
  What a lovely day
  I love coding
*/
```
7. Now what happens if we have another key here with success code of api
```php
$statuses = [
    ['text' => 'What a lovely day'],
    ['text' => 'I love coding'],
    'status' => 200,
];

var_dump($statuses);
die();
/*
  array (size=3)
  0 => 
    array (size=1)
      'text' => string 'What a lovely day' (length=17)
  1 => 
    array (size=1)
      'text' => string 'I love coding' (length=13)
  'status' => int 200
*/
```
8. Now we got numerical index 0,1 and string index key so we have a mixed set.
9. Now is not going to work very well. Since we don't get value.
10. But if we use a var_dump we will see the value.
```php
foreach ($statuses as $status) {
    var_dump($status);
}

/*
  array (size=1)
  'text' => string 'What a lovely day' (length=17)

  array (size=1)
    'text' => string 'I love coding' (length=13)

  int 200
*/
```
11.  since we trying to do here for each of these status we trying to access a property called text
12.  Depending on error level reporting this may cause problems
13. So what you would do to resolve this problem with index is
```php
foreach ($statuses as $index => $status) {
    if ($index !== 'status') {
        echo $status['text'], '<br>';
    }
}

/*
  What a lovely day
  I love coding
*/
```
14. This may have worked without issue but depending on your enviroment error setting this may have give you error before
15. There is a better way to do this since, is not always a good idea to nest things in this way.
16. Usually better to have everything you want to do in the first level of this block.

#### Continue
1. Using continue it will skip the loop that matches
```php
foreach ($statuses as $index => $status) {
    if ($index === 'status') {
        continue;
    }
    echo $status['text'], '<br>';
}

/*
  What a lovely day
  I love coding
*/
```
2. So this line of code will not be executed `echo $status['text'], '<br>';`
3. We can prove this by output the index.
```php
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
/*
  status
*/
```
4. This is a way to do it, yet by the end of the series you will find better ways to do this.

#### Break
1. There may be cases where you want to loop through set of data but you may need to exit that loop at some point
2. Now we will create simple loop that will find user and break out of the loop when we find that user
3. This is not a replacement for any search functionality
4. We going to check if one of these names equals a certain value
5. When we find the name we looking through we break out of the loop since there is no need to keep searching
```php
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

foreach ($people as $person)
{
    if ($person['name'] === $toFind) {
        $found = $person;
        break;
    }
}

var_dump($found);
/*
  array (size=3)
  'id' => int 1
  'name' => string 'alex' (length=4)
  'email' => string 'alex@gmail.com' (length=14)
*/
```
6. If you have a loop within a loop you can use numbers to choose level you want to break out of
```php

foreach ($people as $person)
{
    if ($person['name'] === $toFind) {
        $found = $person;
        break 2; // Fatal error: Cannot 'break' 2 levels in
    }
}

```
7. In here the break 2 will work
8. Basically we will break out of both loops
```php
foreach ($people as $person)
{
    foreach (range(1, 5) as $x) {
        var_dump($x); // int 1
        break 2;
    }
}
```
8. As you see we only seeing 1 value and user since we breaking out of both loops

```php
foreach ($people as $person)
{
    var_dump($person);
    foreach (range(1, 5) as $x) {
        var_dump($x); // int 1
        break 2;
    }
}
/*
  array (size=3)
  'id' => int 1
  'name' => string 'alex' (length=4)
  'email' => string 'alex@gmail.com' (length=14)

  int 1

*/
```
9. Is rare to use this, but is good to know how to break levels.

#### using & to reference original value
1. We will now look at values by references it does not refer to original value we actually looping through
2. Lets say we loop through all people and set all their name to dale it does not change name
3. That is because people is local version not part by reference
4. What this means is that we can modify it but doesn't not affect original array
```php
foreach ($people as $person) {
    $person['name'] = 'dale';
}

var_dump($people);
/*
  array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
*/
```

5. So how we do this if we need to. we put a & before the variable and try again &person
6. Now it works and is pased by reference meaning it refers to actual original value
```php
foreach ($people as &$person) {
    $person['name'] = 'dale';
}

var_dump($people);
/*
  array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'dale' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'dale' (length=4)
      'email' => string 'billy@gmail.com' (length=15)
*/
```

7. There is a more long winged version
8. For example we go through an array and tidy up values.
```php
$newPeople = [];

foreach ($people as $person) {
    $person['name'] = 'dale';
    $newPeople[] = $person;
}

var_dump($newPeople);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'dale' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'dale' (length=4)
      'email' => string 'billy@gmail.com' (length=15)
*/

```
9. This is the long way, while the other one you don't need to create variable.
10. But you have to be careful when passing values by references since we change original source.
11. We want to loop through these through reference to change original value using &number
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
}

var_dump($numbers);

/*
  array (size=4)
  0 => int 2
  1 => int 4
  2 => int 6
  3 => int 8
*/

```

12. Problem now is that if yo want to loop through the same modified array again.
13. We expected to get 7 yet we got 6 instead
14. Probably is when we looping the number refers to last value by reference so is still 6
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
}

// var_dump($numbers);

foreach ($numbers as $number) {
    var_dump($number);
}
/*
int 2

int 4

int 6

int 6
*/

```
#### Unset
1. We resolve the above problem using unset()
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
    unset($number);
}

// var_dump($numbers);

foreach ($numbers as $number) {
    var_dump($number);
}
/*
int 2

int 4

int 6

int 8
*/
```
2. Since we unset the values, we not get clean set of values.
3. If you take variable by reference make sure to unset it after to avoid problem later when you try to use original array.

### 4 The inarray function
1. 
```php
$names = ['alex', 'billy', 'dale'];

var_dump(in_array('alex', $names)); // true
var_dump(in_array('ashley', $names)); // false
```
2. can be used in an if statement
```php
if (in_array()) {

}
```

1. 
```php
$allowedFileExtensions = ['jpg', 'jpeg', 'png'];

$fileName = 'cat.jpg';


// explode function takes a string and create array using delimiter in this case is "."
$fileParts = explode('.', $fileName);

var_dump($fileParts);

/*
    array (size=2)
    0 => string 'cat' (length=3)
    1 => string 'jpg' (length=3)
*/
```
2. get the .jpg
```php
$fileName = 'cat.jpg';
$fileName = 'cat.jpg';

// explode function takes a string and create array using delimiter in this case is "."
$fileParts = explode('.', $fileName);

// get last item from array in this case .jpg
$fileExtension = end($fileParts);

// var_dump($fileParts);
var_dump($fileExtension);
```
3. Now we can use if statement to check if file is one of the required extensions
```php

if (in_array($fileExtension, $allowedFileExtensions)) {
    die('Upload'); // Upload
}

```
#### When looping we might want to excluse certain parts
1. read files
```php

$files = opendir('files');

while (($file = readdir($files)) !== false) {
    var_dump($file);
}

/*
 '..' (length=2)
 'two.txt' (length=7)
 'one.txt' (length=7)
 '.' (length=1)
 */
 ```
2. remove files that are not neccesary and you want to ignore
3. In here we use array instead of a long multiple || statements
```php
$files = opendir('files');

$ignoreFiles = ['.', '..', '.DS_Store'];

while (($file = readdir($files)) !== false) {

    // if ($file === '.' || $file === '..' || $file)
    if (in_array($file, $ignoreFiles)) {
        continue;
    }
    var_dump($file);  
}
/*
 '..' (length=2)
 'two.txt' (length=7)
 'one.txt' (length=7)
 '.' (length=1)
*/
```
4. Another advantage is that I can just add new item to array and it will work

### Arrays keys
1. Allows us to extract keys from an array.
```php
$array = ['alex' => 26, 'billy' => 22];

$keys = array_keys($array);

var_dump($keys);
/*
array (size=2)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
*/
```
2. Here is the code we going to improve
```php
$db = new PDO('mysql:host=localhost;dbname=project', 'homestead', 'secret');

$fields = [
    'name'  => 'alex',
    'email' => 'alex@codecourse.com'
];

$id = 1;

$update = $db->prepare("UDATE users SET name = ?, email = ? WHERE id = ?");

$update->execute([
    'alex',
    1
]);
```
3. Here is how we improve it.
```php
$id = 1;

$values = implode(' = ?, ', array_keys($fields)) . ' = ?';

echo $values; // name = ?, email = ?
```

4. using array merge
```php
var_dump(array_merge($fields, [$id]));
/*
array (size=3)
  'name' => string 'alex' (length=4)
  'email' => string 'alex@codecourse.com' (length=19)
  0 => int 1
*/
```

5. using array values to get the values only 
```php

var_dump(array_merge(array_values($fields), [$id]));
/*
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'alex@codecourse.com' (length=19)
  2 => int 1
*/
```
6. Now we can use this code to get result we want
```php
$update = $db->prepare('UPDATE users SET {$values} WHERE id = ?');
$update->execute(array_merge(array_values($fields), [$id]));
```

### Mapping over an array
1. The array we will use.
```php
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
```
2. when using foreach to loop over array
```php
foreach ($people as $person) {
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    unset($person);
}

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
#### array_map
1.  First argument is an anonymous function.
2.  Second argument is the array we plan to loop through.
```php
$people = array_map(function ($person) {
    var_dump($person);
}, $people);
/*
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 1
  'first_name' => string 'Alex' (length=4)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'alex@gmail.com' (length=14)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 2
  'first_name' => string 'Billy' (length=5)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'billy@gmail.com' (length=15)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 3
  'first_name' => string 'Dale' (length=4)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'dale@gmail.com' (length=14)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 4
  'first_name' => null
  'last_name' => null
  'email' => string 'ashley@gmail.com' (length=16)
*/
```
3. Now if we do it like this we will get weird result.
```php
$people = array_map(function ($person) {
    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
}, $people);

var_dump($people);

/*
array (size=4)
  0 => null
  1 => null
  2 => null
  3 => null
*/
```
4. The reason for this is once we modify these people we need to return that person
```php
$people = array_map(function ($person) {
    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    return $person;
}, $people);

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => string ' ' (length=1)
*/
```
5. Now we want to return full_name as null instead of ' '
```php
$people = array_map(function ($person) {
    if (!$person['first_name'] && !$person['last_name']) {
        $person['full_name'] = null;
        return $person;
    }

    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    return $person;
}, $people);

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => null
*/

```
6. Now what if we want to include an index
```php
$people = array_map(function ($person, $index) {
    var_dump($index);
}, $people);

var_dump($people);

/*
array (size=4)
  0 => null
  1 => null
  2 => null
  3 => null
  */
```
7. This will not work, so we going to do pass array_keys as index
8. array_map you can pass more than 1 array after the initial array.
```php
$people = array_map(function ($person, $index) {
    var_dump($index);
}, $people);

var_dump($people);

/*
int 0
int 1
int 2
int 3
  */
```
9. What if we want to pass another argument
```php
$people = array_map(function ($person, $index, $letter) {
    // var_dump($index);
    var_dump($letter);
}, $people, array_keys($people), ['a', 'b', 'c', 'd']);

/*
string 'a' (length=1)
string 'b' (length=1)
string 'c' (length=1)
string 'd' (length=1)
*/
```
10. array_map usually a better option than using foreach and passing values by references.

#### Now we will discuss scope
1. In a foreach the scope is within itself
2. Now in array_map when you introduce anonymous function or enclosure this has it's own scope
3. We get error here for this reason. Since now the function has its own scope.
```php
$ages = [26, 22, 53, 51];

$people = array_map(function ($person, $index) {
    $person['age'] = $ages[$index];
    return $person;
}, $people, array_keys($people));

var_dump($people);
// Notice: Undefined variable: ages
```
4. To resolve this we use the use keyword to access $ages variable withing the array_map function
#### use() with array_map
1. In the use you pass variables you can to use within that scope.
```php
$ages = [26, 22, 53, 51];

$people = array_map(function ($person, $index) use ($ages) {
    $person['age'] = $ages[$index];
    return $person;
}, $people, array_keys($people));

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'age' => int 26
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'age' => int 22
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'age' => int 53
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'age' => int 51
*/
```
2. You can pass multiple variables in use() to bring it to the current scope

### Getting the sum of array items
1. Now we will use array_sum which essentially add up any item you have within an array.
```php
$numbers = [2, 4, 6];

echo array_sum($numbers); // 12

```
2. now if you have string value it will simply be ignored $numbers = [2, 4, 6, 'alex'];

3. if we include number with string it will sum it
```php
$numbers = [2, 4, 6, '1alex'];

echo array_sum($numbers); // 12

```
4. The reason it works is because it will convert the string to any number it finds in the start
```php
echo (int) '1alex'; // 1
```
5. It will not work if the number is at the end
```php
echo (int) 'alex1'; // 0
```
#### using func_get_args  inside add function
1. Get all arguments passed in the function without declaring them in the function ($num1, $num2)
```php
function add()
{
    var_dump(func_get_args());
}

add(1, 2, 3);
/*
array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3
*/

```
2. now we use array_sum
```php
function add()
{
    return array_sum(func_get_args());
}

echo add(1, 2, 3); // 6
/*
array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3
*/
```

#### now we will use OOP
```php
class Item
{
    protected $cost;

    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }
}

class Cart
{
}

$item1 = (new Item)->setCost(10);
$item2 = (new Item)->setCost(20);

var_dump($item1);
/*
object(Item)[2]
  protected 'cost' => int 10
*/
var_dump($item2);
/*
object(Item)[3]
  protected 'cost' => int 20
*/  
```

2. The idea is that within cart we want to take a list of items.
3. We will have method called add() to add items to our cart
```php
class Cart
{
    protected $items = [];

    public function add(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }
}
```
4. Now we will have function called total() inside cart with a temporally fixed value
5. Now we will create the total() function using different ways.
6. Using foreach
```php
    public function total()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getCost();
        }
        return $total;
    }
```
7. array_sum not going to work since we can't sum objects with it
```php
public function total()
{
  return array_sum($this->items);
}

```
8. Now we can also use array_map to list the items
```php
    public function total()
    {
        $items = array_map(function ($item) {
            return $item->getCost();
        }, $this->items);

        var_dump($items);
        die();
    }
    /*
      array (size=2)
        0 => int 10
        1 => int 20
    */

```
9. Now we can get correct number by putting array_map inside array_sum
```php
    public function total()
    {
        return array_sum(array_map(function ($item) {
            return $item->getCost();
        }, $this->items));
    }
```
10. with array_map it allows for more flexibility as well

### Filtering
1. array filter is very similar to array_map in the syntax but what we actually doing is filtering out items we don't need rather than mapping through them and possibly changing item.
2. Lets say we have group of users we need to filter.
```php
$users = [
    ['username' => 'alex', 'score' => 0],
    ['username' => 'ashley', 'score' => 0],
    ['username' => 'dale', 'score' => 50],
    ['username' => 'billy', 'score' => 12],
];
```
3. In here It return empty since I am setting all items to return false
```php
$users = array_filter($users, function ($user) {
    return false;
});

var_dump($users);
/*
array (size=0)
  empty
*/

```
4. If return true we get back all of our items
```php
$users = array_filter($users, function ($user) {
    return true;
});

var_dump($users);
/*
array (size=4)
  0 => 
    array (size=2)
      'username' => string 'alex' (length=4)
      'score' => int 0
  1 => 
    array (size=2)
      'username' => string 'ashley' (length=6)
      'score' => int 0
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/
```
5. array_filter is really when ever a condition return true or false
6. In our case we want to filter out users that have score 0
```php
$users = array_filter($users, function ($user) {
    if ($user['score'] > 0) {
        return true;
    }
});

var_dump($users)
/*
array (size=2)
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/

```
7. since it will return true or false it will reach same result with less code
```php
$users = array_filter($users, function ($user) {
    return $user['score'] > 0;
});

var_dump($users)
/*
array (size=2)
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/

```
8. Now we will use keys instead to filter the user with index key 0
9. This will not work because we have to tell array filter we want to use both the index and the value 
```php
$users = array_filter($users, function ($user, $index) {
    return $index === 0;
},);

var_dump($users);
//Uncaught ArgumentCountError: Too few arguments to function
```
10. ARRAY_FILTER_USE_BOTH
```php
$users = array_filter($users, function ($user, $index) {
    return $index === 0;
}, ARRAY_FILTER_USE_BOTH);

var_dump($users);
/*
array (size=1)
  0 => 
    array (size=2)
      'username' => string 'alex' (length=4)
      'score' => int 0
*/
```
11. simpler way is just use $users[0];

1. Now we will filter out null and false values
```php
$scores = [
    2,
    5,
    10,
    false,
    null,
    0
];

$scores = array_filter($scores);
var_dump($scores);
/*
array (size=3)
  0 => int 2
  1 => int 5
  2 => int 10
  6 => int -5
*/

```
2. Now the problem is that it also remove value 0
3. It would not remove negative values

# The arraywalk function
1. We will compare this to array_map
```php
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


$people = array_map(function ($person) {
    $person['first_name'] = 'Dale'; 
    return $person;
}, $people);


var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Dale' (length=4)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
2. The diference is that array walk give us more flexibility
3. Array walk will return boolean
4. first you pass  the array you want to loop through
5. Then you pass the functiom
6. $index is automatically available so no need to pass keys like array_map
```php

array_walk($people, function ($person, $index) {
    $person['first_name'] = 'Dale';
    return $person;
});

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
7. This does not work because when we want to modify something we want to pass person by reference &$person.
8. Using &$person makes $person reference the original
9. Because unlike array_map we not creating new variable $people = array_map
10. What we doing is modifying the existing array 
```php
array_walk($people, function (&$person, $index) {
    $person['first_name'] = 'Dale';
    return $person;
});

var_dump($people);

*/
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Dale' (length=4)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
11. we can pass other arguments after the function
```php
array_walk($people, function (&$person, $index, $data) {
    $person['first_name'] = $data['first_name'];
    $person['first_name'] = $data['last_name'];
    return $person;
}, ['first_name' => 'Dale', 'last_name' => 'Smith']);

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Smith' (length=5)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
#### Create joinName function
1. $delimiter is what separe our names
2. Here we will use array_walk to call a function
```php
function joinName(&$person, $index, $delimeter = ' ')
{
    $person['full_name'] = $person['first_name'] . $delimeter . $person['last_name'];
    return $person;
}

array_walk($people, 'joinName');
// pass the delimiter as second argument
array_walk($people, 'joinName', '%20');

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => string ' ' (length=1)
*/
```

#### array_walk_recursive
1. It will look inside and array then within that array and within another array inside

```php

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

var_dump($payload);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => string '1.5' (length=3)
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => string '123' (length=3)
  1 => 
    array (size=3)
      'id' => string '2' (length=1)
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => string '456' (length=3)
*/

```
2. The problem is we want integers instead of strings id so we need to do this recursively through the entire payload.
```php
array_walk_recursive($payload, function (&$value) {
    var_dump($value);
});

/*
 '1.5' (length=3)
 'What a lovely day' (length=17)
 '123' (length=3)
 '2' (length=1)
 'What a lovely day' (length=17)
 '456' (length=3)

*/

```
3. Now that we have each value we can check if each value is numeric
4. We will check if value is_numeric and change it to integer
```php
array_walk_recursive($payload, function (&$value) {
    if (is_numeric($value)) {
        $value = (int) $value;
    }
});

var_dump($payload);

/*
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 123
  1 => 
    array (size=3)
      'id' => int 2
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 456

 */
```
5. Shorter way without if statement using ternary operator
```php
array_walk_recursive($payload, function (&$value) {
    $value = is_numeric($value) ? (int) $value : $value;
});

```
6. Now what if we want to check if number is float or integer
7. So we convert them all to float then check if they have decimal place or not
8. To do this we use if statement with floor that round down the value
9. Then we check if that is equal to the original value
10. For example if we floor 1.5 we get 1 so floating values will not pass the if statement
11. While 123 after floor is still 123 hence is an integer.

```php

function castNumericValues(&$value)
{
    if (is_numeric($value)) {
        $value = (float) $value;

        if (floor($value) === $value) {
            $value = (int) $value;
        }
    }
}

array_walk_recursive($payload, 'castNumericValues');



var_dump($payload);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => float 1.5
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 123
  1 => 
    array (size=3)
      'id' => int 2
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 456
*/
```
12. It works correctly but we can write the code in a more cleaner way.
```php
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
```
13. Between array_walk and array_map you might decide which to use.
14. Just remember we need to pass value by reference &$value.
15. We also have added benefict to have $index without having to pass it in.
16. As well remember that we are modifying the original array.
17. So if you don't want to overwrite is better to use array_map instead.


### Sorting

```php
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
```

1. sort()
```php
$names = ['alex', 'dale', 'billy', 'ashley'];

sort($names);

var_dump($names);

/*
array (size=4)
  0 => string 'alex' (length=4)
  1 => string 'ashley' (length=6)
  2 => string 'billy' (length=5)
  3 => string 'dale' (length=4)
*/
/*
array (size=5)
  0 => int 1
  1 => int 11
  2 => int 13
  3 => int 20
  4 => int 50
*/
```

# Arrays are Everything

### 1. Array Basics

1. Create basic array
```php
$names = array('alex', 'billy', 'dale');
```
2. Now we use var_dump to dump out the output of a variable
```php
var_dump($names);
```
```php
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
```
3. Now lets define something we might get from our database.
4. This is a multi dimensional array since we have an array outside.
```php
$people = [
    'alex' => [
        'id' => 1,
    ]
];

```
5. As you see this is different to what we had before
```php
$names = ['alex', 'billy', 'dale'];
```
6. As you see we start at 0 and then count outwards. This is what zero index means
```php
var_dump($names);
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
```
7. In here we defining a string base key
```php
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

```
8. Now we use var_dump($people)
9. Notice now there are no numerical keys
```php
array (size=2)
  'alex' => 
    array (size=2)
      'id' => int 1
      'email' => string 'alex@email.com' (length=14)
  'billy' => 
    array (size=2)
      'id' => int 2
      'email' => string 'billy@email.com' (length=15)
```
10. There is a better way to do this a more real world way.
11. If this was data comming from the database you would not have keys coming from the database
```php
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
```
12. var_dump($people);
```php
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
13. Now we still have an array with 2 arrays inside
14. We dealing here with a numerical indexed array
15. Lets say we want to loop through these arrays
16. When we can to manipulate it or output it on the page.
17. For your users to actually see.
18. var_dump is very realiable to tell you exactly what you working with.
19. Will make your job a lot easier.

#### Lets see how we access array values
1. Now we will use a simple example again
```php
$names = ['alex', 'billy'];

var_dump($names);
```

2. Here we have numerical array with values

```php
array (size=2)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
```
3. Now we will output a value using the key
4. it can work as well if the key is a string echo $names['alex'];
```php
$names = ['alex', 'billy'];

echo $names[0]; // alex
echo $names[1]; // billy
echo $names[2]; // Undefined offset: 2
```
3. Now if index not found you get offset error.
4. Now what if you want to access multidimensional array value
```php
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
```
5. Now we will access a key value inside one of the arrays
6. You have to chain to access them
```php
echo $people[0]['username']; // alex
echo $people[1]['username']; // billy
echo $people[1]['bio']; // Notice: Undefined index: bio
```
7. Again if you try to access key that doesn't exist you get Undefined index error
8. Now we do var_dump(people);
```php
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
9. Notice each item has unique index.
10. Now you have have string index that you may also find at some point
```php
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
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ]
];

```
11. var_dump($people);
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
1.   We have the following and 2 keys are the say we will only see 1 item in the var_dump
```php
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
        'id' => 2,
        'username' => 'billy',
        'email' => 'billy@gmail.com',
    ]
];
```
1.  var_dump
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 2
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
14. Now what we can do is change the id of the second one to 3
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 3
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
15. Now we see that is the last one that get output only
```php
array (size=2)
  'alex' => 
    array (size=3)
      'id' => int 1
      'username' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  'billy' => 
    array (size=3)
      'id' => int 3
      'username' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
```
16. the array item with id 2 gets set then get replaced by the array item with id 3 that has same key name.
17. Important to remember array keys are unique.

### Counting
1. The ability to count the items within an array is extremely useful
2. Now we will use a basic array again. When we get value we can also store it to use it later.
```php
$people = ['alex', 'billy', 'dale'];

echo count($people); // 3
```
3. Now we will use a different way to count
```php
$people = ['alex', 'billy', 'dale'];

echo array_count_values($people); //  Notice: Array to string conversion 
```
4. When working with arrays this may be another thing you may see.
5. This error means we trying to echo out a value which is an array
6. We could do a var_dump but we can only echo out things like integers and strings or floats etc
7. So lets create variable and var_dump it to see what is going on.
```php
$count = array_count_values($people);

var_dump($count);
```
8. What array_count_values done is count the amount of items within the array.
9. How often they occur, in this case all items having only 1 value.
10. Is not counting all items but is counting items within an array.
```php
array (size=3)
  'alex' => int 1
  'billy' => int 1
  'dale' => int 1
```
11. Lets test it out by adding a couple of more values.
12. Bear in mind these are not indexes they are values.
```php
$people = ['alex', 'billy', 'dale', 'alex'];

var_dump($people);

array (size=3)
  'alex' => int 2
  'billy' => int 1
  'dale' => int 1
```
13. Now we see we get key alex with count of 2.
14. So if you were to count unique items in array you use array_count_values
15. Now if you wanted to just count all items in array use count()
16. Sometimes you will encounter sizeof()
17. Which is just an alias of count and does the same thing
```php
echo count($people); // 4
echo sizeof($people); // 4
```

#### Now we will use a more complex array
1. We will use a multidimensional array
```php
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

```
2. var_dump($people);
```php
array (size=2)
  0 => 
    array (size=2)
      'id' => int 1
      'username' => string 'alex' (length=4)
  1 => 
    array (size=2)
      'id' => int 2
      'username' => string 'dale' (length=4)
```
3. Now we have 2 items within this array.
4. We can prove this by doing an echo on count($people);
```php
echo count($people); // 2
die();

```
5. All that matters is items imediately within the array that is why we get 2 instead of 4.
6. What we not doing is using a recursive function to count every single item, is only those in very top level
7. There are some ways we can do this, which we will explore in a later lesson.

### Looping
1. looping through arrays is what you going to do most often.
2. If you have data from database you going to loop through the data and output it on the page.
3. Lets use the example we used before of people
```php
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
```
4. We going to loop through this array and output the data using a foreach()
5. first you use plural then single example users as user
```php
foreach ($people as $person) {
    echo $person['name'] . '<br>';
}

/*
  alex
  billy
*/
```
6. You can also append other properties
```php

foreach ($people as $person) {
    echo $person['name'], ' ', $person['email'], '<br>';
}
/*
  alex alex@gmail.com
  billy billy@gmail.com
*/
```
7. If you have a more complex multi dimensional array
8. You can loop through arrays within arrays
9. These arrays can be very similar since they usually comming from your database
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';

    foreach ($person['likes'] as $like) {
        echo $like, '<br>';
    }
/*
    alex
    food
    cats
    billy
    books
*/
}
```
10. There are better ways to do this.
11. If you find yourself using too many loops.
12. You can use things like implode.

#### implode
1. implode is a function that allows you to take array items and create a string which you then pass it an limiter.
2. Without implode we get error since we try to echo an array
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';
    echo $person['likes']; //  Array to string conversion in
    echo  '<br><br>';

}
```
3. With implode first item we pass is limiter that can be a space or break
```php
foreach ($people as $person) {
    echo $person['name'], '<br>';
    echo implode(' ', $person['likes']);

    echo  '<br><br>';
}
/*
  alex
   food cats

   billy
   books
*/
```
4. Now we get similar results without having to nest too many foreach loops
5. This is a basic example and later we will look into imploding and exploding
6. Exploding is opposite where we get a string and create an array
7. You don't want to create too many nests
8. Next we going to access index of each of the items we looping through as we lopp through them.

#### access index
1. To access an index of an item we write $index => before the single version we looping through $person
```php
foreach ($people as $index => $person) {
    echo $index . ':' . $person['name'], '<br>';
}
/*
   0:alex
   1:billy
*/
```
2. Also if you have array value with string as the key
```php
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
/*
  alex
  billy
*/
```
3. Usually when creating foreach loop is good practice to include $index => even if you don't use it.
4. Just so is there and if I need it, there is not need to update it.
5. Now we will use an example where we will use the key
6. Now lets say we hit twitter api and we get list of statuses
```php
$statuses = [
    ['text' => 'What a lovely day'],
    ['text' => 'I love coding'],
];

foreach ($statuses as $status) {
    echo $status['text'], '<br>';
}

/*
  What a lovely day
  I love coding
*/
```
7. Now what happens if we have another key here with success code of api
```php
$statuses = [
    ['text' => 'What a lovely day'],
    ['text' => 'I love coding'],
    'status' => 200,
];

var_dump($statuses);
die();
/*
  array (size=3)
  0 => 
    array (size=1)
      'text' => string 'What a lovely day' (length=17)
  1 => 
    array (size=1)
      'text' => string 'I love coding' (length=13)
  'status' => int 200
*/
```
8. Now we got numerical index 0,1 and string index key so we have a mixed set.
9. Now is not going to work very well. Since we don't get value.
10. But if we use a var_dump we will see the value.
```php
foreach ($statuses as $status) {
    var_dump($status);
}

/*
  array (size=1)
  'text' => string 'What a lovely day' (length=17)

  array (size=1)
    'text' => string 'I love coding' (length=13)

  int 200
*/
```
11.  since we trying to do here for each of these status we trying to access a property called text
12.  Depending on error level reporting this may cause problems
13. So what you would do to resolve this problem with index is
```php
foreach ($statuses as $index => $status) {
    if ($index !== 'status') {
        echo $status['text'], '<br>';
    }
}

/*
  What a lovely day
  I love coding
*/
```
14. This may have worked without issue but depending on your enviroment error setting this may have give you error before
15. There is a better way to do this since, is not always a good idea to nest things in this way.
16. Usually better to have everything you want to do in the first level of this block.

#### Continue
1. Using continue it will skip the loop that matches
```php
foreach ($statuses as $index => $status) {
    if ($index === 'status') {
        continue;
    }
    echo $status['text'], '<br>';
}

/*
  What a lovely day
  I love coding
*/
```
2. So this line of code will not be executed `echo $status['text'], '<br>';`
3. We can prove this by output the index.
```php
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
/*
  status
*/
```
4. This is a way to do it, yet by the end of the series you will find better ways to do this.

#### Break
1. There may be cases where you want to loop through set of data but you may need to exit that loop at some point
2. Now we will create simple loop that will find user and break out of the loop when we find that user
3. This is not a replacement for any search functionality
4. We going to check if one of these names equals a certain value
5. When we find the name we looking through we break out of the loop since there is no need to keep searching
```php
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

foreach ($people as $person)
{
    if ($person['name'] === $toFind) {
        $found = $person;
        break;
    }
}

var_dump($found);
/*
  array (size=3)
  'id' => int 1
  'name' => string 'alex' (length=4)
  'email' => string 'alex@gmail.com' (length=14)
*/
```
6. If you have a loop within a loop you can use numbers to choose level you want to break out of
```php

foreach ($people as $person)
{
    if ($person['name'] === $toFind) {
        $found = $person;
        break 2; // Fatal error: Cannot 'break' 2 levels in
    }
}

```
7. In here the break 2 will work
8. Basically we will break out of both loops
```php
foreach ($people as $person)
{
    foreach (range(1, 5) as $x) {
        var_dump($x); // int 1
        break 2;
    }
}
```
8. As you see we only seeing 1 value and user since we breaking out of both loops

```php
foreach ($people as $person)
{
    var_dump($person);
    foreach (range(1, 5) as $x) {
        var_dump($x); // int 1
        break 2;
    }
}
/*
  array (size=3)
  'id' => int 1
  'name' => string 'alex' (length=4)
  'email' => string 'alex@gmail.com' (length=14)

  int 1

*/
```
9. Is rare to use this, but is good to know how to break levels.

#### using & to reference original value
1. We will now look at values by references it does not refer to original value we actually looping through
2. Lets say we loop through all people and set all their name to dale it does not change name
3. That is because people is local version not part by reference
4. What this means is that we can modify it but doesn't not affect original array
```php
foreach ($people as $person) {
    $person['name'] = 'dale';
}

var_dump($people);
/*
  array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'alex' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'billy' (length=5)
      'email' => string 'billy@gmail.com' (length=15)
*/
```

5. So how we do this if we need to. we put a & before the variable and try again &person
6. Now it works and is pased by reference meaning it refers to actual original value
```php
foreach ($people as &$person) {
    $person['name'] = 'dale';
}

var_dump($people);
/*
  array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'dale' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'dale' (length=4)
      'email' => string 'billy@gmail.com' (length=15)
*/
```

7. There is a more long winged version
8. For example we go through an array and tidy up values.
```php
$newPeople = [];

foreach ($people as $person) {
    $person['name'] = 'dale';
    $newPeople[] = $person;
}

var_dump($newPeople);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'dale' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'dale' (length=4)
      'email' => string 'billy@gmail.com' (length=15)
*/

```
9. This is the long way, while the other one you don't need to create variable.
10. But you have to be careful when passing values by references since we change original source.
11. We want to loop through these through reference to change original value using &number
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
}

var_dump($numbers);

/*
  array (size=4)
  0 => int 2
  1 => int 4
  2 => int 6
  3 => int 8
*/

```

12. Problem now is that if yo want to loop through the same modified array again.
13. We expected to get 7 yet we got 6 instead
14. Probably is when we looping the number refers to last value by reference so is still 6
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
}

// var_dump($numbers);

foreach ($numbers as $number) {
    var_dump($number);
}
/*
int 2

int 4

int 6

int 6
*/

```
#### Unset
1. We resolve the above problem using unset()
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
    unset($number);
}

// var_dump($numbers);

foreach ($numbers as $number) {
    var_dump($number);
}
/*
int 2

int 4

int 6

int 8
*/
```
2. Since we unset the values, we not get clean set of values.
3. If you take variable by reference make sure to unset it after to avoid problem later when you try to use original array.

### 4 The inarray function
1. 
```php
$names = ['alex', 'billy', 'dale'];

var_dump(in_array('alex', $names)); // true
var_dump(in_array('ashley', $names)); // false
```
2. can be used in an if statement
```php
if (in_array()) {

}
```

1. 
```php
$allowedFileExtensions = ['jpg', 'jpeg', 'png'];

$fileName = 'cat.jpg';


// explode function takes a string and create array using delimiter in this case is "."
$fileParts = explode('.', $fileName);

var_dump($fileParts);

/*
    array (size=2)
    0 => string 'cat' (length=3)
    1 => string 'jpg' (length=3)
*/
```
2. get the .jpg
```php
$fileName = 'cat.jpg';
$fileName = 'cat.jpg';

// explode function takes a string and create array using delimiter in this case is "."
$fileParts = explode('.', $fileName);

// get last item from array in this case .jpg
$fileExtension = end($fileParts);

// var_dump($fileParts);
var_dump($fileExtension);
```
3. Now we can use if statement to check if file is one of the required extensions
```php

if (in_array($fileExtension, $allowedFileExtensions)) {
    die('Upload'); // Upload
}

```
#### When looping we might want to excluse certain parts
1. read files
```php

$files = opendir('files');

while (($file = readdir($files)) !== false) {
    var_dump($file);
}

/*
 '..' (length=2)
 'two.txt' (length=7)
 'one.txt' (length=7)
 '.' (length=1)
 */
 ```
2. remove files that are not neccesary and you want to ignore
3. In here we use array instead of a long multiple || statements
```php
$files = opendir('files');

$ignoreFiles = ['.', '..', '.DS_Store'];

while (($file = readdir($files)) !== false) {

    // if ($file === '.' || $file === '..' || $file)
    if (in_array($file, $ignoreFiles)) {
        continue;
    }
    var_dump($file);  
}
/*
 '..' (length=2)
 'two.txt' (length=7)
 'one.txt' (length=7)
 '.' (length=1)
*/
```
4. Another advantage is that I can just add new item to array and it will work

### Arrays keys
1. Allows us to extract keys from an array.
```php
$array = ['alex' => 26, 'billy' => 22];

$keys = array_keys($array);

var_dump($keys);
/*
array (size=2)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
*/
```
2. Here is the code we going to improve
```php
$db = new PDO('mysql:host=localhost;dbname=project', 'homestead', 'secret');

$fields = [
    'name'  => 'alex',
    'email' => 'alex@codecourse.com'
];

$id = 1;

$update = $db->prepare("UDATE users SET name = ?, email = ? WHERE id = ?");

$update->execute([
    'alex',
    1
]);
```
3. Here is how we improve it.
```php
$id = 1;

$values = implode(' = ?, ', array_keys($fields)) . ' = ?';

echo $values; // name = ?, email = ?
```

4. using array merge
```php
var_dump(array_merge($fields, [$id]));
/*
array (size=3)
  'name' => string 'alex' (length=4)
  'email' => string 'alex@codecourse.com' (length=19)
  0 => int 1
*/
```

5. using array values to get the values only 
```php

var_dump(array_merge(array_values($fields), [$id]));
/*
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'alex@codecourse.com' (length=19)
  2 => int 1
*/
```
6. Now we can use this code to get result we want
```php
$update = $db->prepare('UPDATE users SET {$values} WHERE id = ?');
$update->execute(array_merge(array_values($fields), [$id]));
```

### Mapping over an array
1. The array we will use.
```php
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
```
2. when using foreach to loop over array
```php
foreach ($people as $person) {
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    unset($person);
}

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
#### array_map
1.  First argument is an anonymous function.
2.  Second argument is the array we plan to loop through.
```php
$people = array_map(function ($person) {
    var_dump($person);
}, $people);
/*
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 1
  'first_name' => string 'Alex' (length=4)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'alex@gmail.com' (length=14)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 2
  'first_name' => string 'Billy' (length=5)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'billy@gmail.com' (length=15)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 3
  'first_name' => string 'Dale' (length=4)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'dale@gmail.com' (length=14)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 4
  'first_name' => null
  'last_name' => null
  'email' => string 'ashley@gmail.com' (length=16)
*/
```
3. Now if we do it like this we will get weird result.
```php
$people = array_map(function ($person) {
    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
}, $people);

var_dump($people);

/*
array (size=4)
  0 => null
  1 => null
  2 => null
  3 => null
*/
```
4. The reason for this is once we modify these people we need to return that person
```php
$people = array_map(function ($person) {
    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    return $person;
}, $people);

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => string ' ' (length=1)
*/
```
5. Now we want to return full_name as null instead of ' '
```php
$people = array_map(function ($person) {
    if (!$person['first_name'] && !$person['last_name']) {
        $person['full_name'] = null;
        return $person;
    }

    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    return $person;
}, $people);

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => null
*/

```
6. Now what if we want to include an index
```php
$people = array_map(function ($person, $index) {
    var_dump($index);
}, $people);

var_dump($people);

/*
array (size=4)
  0 => null
  1 => null
  2 => null
  3 => null
  */
```
7. This will not work, so we going to do pass array_keys as index
8. array_map you can pass more than 1 array after the initial array.
```php
$people = array_map(function ($person, $index) {
    var_dump($index);
}, $people);

var_dump($people);

/*
int 0
int 1
int 2
int 3
  */
```
9. What if we want to pass another argument
```php
$people = array_map(function ($person, $index, $letter) {
    // var_dump($index);
    var_dump($letter);
}, $people, array_keys($people), ['a', 'b', 'c', 'd']);

/*
string 'a' (length=1)
string 'b' (length=1)
string 'c' (length=1)
string 'd' (length=1)
*/
```
10. array_map usually a better option than using foreach and passing values by references.

#### Now we will discuss scope
1. In a foreach the scope is within itself
2. Now in array_map when you introduce anonymous function or enclosure this has it's own scope
3. We get error here for this reason. Since now the function has its own scope.
```php
$ages = [26, 22, 53, 51];

$people = array_map(function ($person, $index) {
    $person['age'] = $ages[$index];
    return $person;
}, $people, array_keys($people));

var_dump($people);
// Notice: Undefined variable: ages
```
4. To resolve this we use the use keyword to access $ages variable withing the array_map function
#### use() with array_map
1. In the use you pass variables you can to use within that scope.
```php
$ages = [26, 22, 53, 51];

$people = array_map(function ($person, $index) use ($ages) {
    $person['age'] = $ages[$index];
    return $person;
}, $people, array_keys($people));

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'age' => int 26
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'age' => int 22
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'age' => int 53
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'age' => int 51
*/
```
2. You can pass multiple variables in use() to bring it to the current scope

### Getting the sum of array items
1. Now we will use array_sum which essentially add up any item you have within an array.
```php
$numbers = [2, 4, 6];

echo array_sum($numbers); // 12

```
2. now if you have string value it will simply be ignored $numbers = [2, 4, 6, 'alex'];

3. if we include number with string it will sum it
```php
$numbers = [2, 4, 6, '1alex'];

echo array_sum($numbers); // 12

```
4. The reason it works is because it will convert the string to any number it finds in the start
```php
echo (int) '1alex'; // 1
```
5. It will not work if the number is at the end
```php
echo (int) 'alex1'; // 0
```
#### using func_get_args  inside add function
1. Get all arguments passed in the function without declaring them in the function ($num1, $num2)
```php
function add()
{
    var_dump(func_get_args());
}

add(1, 2, 3);
/*
array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3
*/

```
2. now we use array_sum
```php
function add()
{
    return array_sum(func_get_args());
}

echo add(1, 2, 3); // 6
/*
array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3
*/
```

#### now we will use OOP
```php
class Item
{
    protected $cost;

    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }
}

class Cart
{
}

$item1 = (new Item)->setCost(10);
$item2 = (new Item)->setCost(20);

var_dump($item1);
/*
object(Item)[2]
  protected 'cost' => int 10
*/
var_dump($item2);
/*
object(Item)[3]
  protected 'cost' => int 20
*/  
```

2. The idea is that within cart we want to take a list of items.
3. We will have method called add() to add items to our cart
```php
class Cart
{
    protected $items = [];

    public function add(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }
}
```
4. Now we will have function called total() inside cart with a temporally fixed value
5. Now we will create the total() function using different ways.
6. Using foreach
```php
    public function total()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getCost();
        }
        return $total;
    }
```
7. array_sum not going to work since we can't sum objects with it
```php
public function total()
{
  return array_sum($this->items);
}

```
8. Now we can also use array_map to list the items
```php
    public function total()
    {
        $items = array_map(function ($item) {
            return $item->getCost();
        }, $this->items);

        var_dump($items);
        die();
    }
    /*
      array (size=2)
        0 => int 10
        1 => int 20
    */

```
9. Now we can get correct number by putting array_map inside array_sum
```php
    public function total()
    {
        return array_sum(array_map(function ($item) {
            return $item->getCost();
        }, $this->items));
    }
```
10. with array_map it allows for more flexibility as well

### Filtering
1. array filter is very similar to array_map in the syntax but what we actually doing is filtering out items we don't need rather than mapping through them and possibly changing item.
2. Lets say we have group of users we need to filter.
```php
$users = [
    ['username' => 'alex', 'score' => 0],
    ['username' => 'ashley', 'score' => 0],
    ['username' => 'dale', 'score' => 50],
    ['username' => 'billy', 'score' => 12],
];
```
3. In here It return empty since I am setting all items to return false
```php
$users = array_filter($users, function ($user) {
    return false;
});

var_dump($users);
/*
array (size=0)
  empty
*/

```
4. If return true we get back all of our items
```php
$users = array_filter($users, function ($user) {
    return true;
});

var_dump($users);
/*
array (size=4)
  0 => 
    array (size=2)
      'username' => string 'alex' (length=4)
      'score' => int 0
  1 => 
    array (size=2)
      'username' => string 'ashley' (length=6)
      'score' => int 0
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/
```
5. array_filter is really when ever a condition return true or false
6. In our case we want to filter out users that have score 0
```php
$users = array_filter($users, function ($user) {
    if ($user['score'] > 0) {
        return true;
    }
});

var_dump($users)
/*
array (size=2)
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/

```
7. since it will return true or false it will reach same result with less code
```php
$users = array_filter($users, function ($user) {
    return $user['score'] > 0;
});

var_dump($users)
/*
array (size=2)
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/

```
8. Now we will use keys instead to filter the user with index key 0
9. This will not work because we have to tell array filter we want to use both the index and the value 
```php
$users = array_filter($users, function ($user, $index) {
    return $index === 0;
},);

var_dump($users);
//Uncaught ArgumentCountError: Too few arguments to function
```
10. ARRAY_FILTER_USE_BOTH
```php
$users = array_filter($users, function ($user, $index) {
    return $index === 0;
}, ARRAY_FILTER_USE_BOTH);

var_dump($users);
/*
array (size=1)
  0 => 
    array (size=2)
      'username' => string 'alex' (length=4)
      'score' => int 0
*/
```
11. simpler way is just use $users[0];

1. Now we will filter out null and false values
```php
$scores = [
    2,
    5,
    10,
    false,
    null,
    0
];

$scores = array_filter($scores);
var_dump($scores);
/*
array (size=3)
  0 => int 2
  1 => int 5
  2 => int 10
  6 => int -5
*/

```
2. Now the problem is that it also remove value 0
3. It would not remove negative values

# The arraywalk function
1. We will compare this to array_map
```php
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


$people = array_map(function ($person) {
    $person['first_name'] = 'Dale'; 
    return $person;
}, $people);


var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Dale' (length=4)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
2. The diference is that array walk give us more flexibility
3. Array walk will return boolean
4. first you pass  the array you want to loop through
5. Then you pass the functiom
6. $index is automatically available so no need to pass keys like array_map
```php

array_walk($people, function ($person, $index) {
    $person['first_name'] = 'Dale';
    return $person;
});

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
7. This does not work because when we want to modify something we want to pass person by reference &$person.
8. Using &$person makes $person reference the original
9. Because unlike array_map we not creating new variable $people = array_map
10. What we doing is modifying the existing array 
```php
array_walk($people, function (&$person, $index) {
    $person['first_name'] = 'Dale';
    return $person;
});

var_dump($people);

*/
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Dale' (length=4)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
11. we can pass other arguments after the function
```php
array_walk($people, function (&$person, $index, $data) {
    $person['first_name'] = $data['first_name'];
    $person['first_name'] = $data['last_name'];
    return $person;
}, ['first_name' => 'Dale', 'last_name' => 'Smith']);

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Smith' (length=5)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
#### Create joinName function
1. $delimiter is what separe our names
2. Here we will use array_walk to call a function
```php
function joinName(&$person, $index, $delimeter = ' ')
{
    $person['full_name'] = $person['first_name'] . $delimeter . $person['last_name'];
    return $person;
}

array_walk($people, 'joinName');
// pass the delimiter as second argument
array_walk($people, 'joinName', '%20');

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => string ' ' (length=1)
*/
```

#### array_walk_recursive
1. It will look inside and array then within that array and within another array inside

```php

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

var_dump($payload);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => string '1.5' (length=3)
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => string '123' (length=3)
  1 => 
    array (size=3)
      'id' => string '2' (length=1)
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => string '456' (length=3)
*/

```
2. The problem is we want integers instead of strings id so we need to do this recursively through the entire payload.
```php
array_walk_recursive($payload, function (&$value) {
    var_dump($value);
});

/*
 '1.5' (length=3)
 'What a lovely day' (length=17)
 '123' (length=3)
 '2' (length=1)
 'What a lovely day' (length=17)
 '456' (length=3)

*/

```
3. Now that we have each value we can check if each value is numeric
4. We will check if value is_numeric and change it to integer
```php
array_walk_recursive($payload, function (&$value) {
    if (is_numeric($value)) {
        $value = (int) $value;
    }
});

var_dump($payload);

/*
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 123
  1 => 
    array (size=3)
      'id' => int 2
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 456

 */
```
5. Shorter way without if statement using ternary operator
```php
array_walk_recursive($payload, function (&$value) {
    $value = is_numeric($value) ? (int) $value : $value;
});

```
6. Now what if we want to check if number is float or integer
7. So we convert them all to float then check if they have decimal place or not
8. To do this we use if statement with floor that round down the value
9. Then we check if that is equal to the original value
10. For example if we floor 1.5 we get 1 so floating values will not pass the if statement
11. While 123 after floor is still 123 hence is an integer.

```php

function castNumericValues(&$value)
{
    if (is_numeric($value)) {
        $value = (float) $value;

        if (floor($value) === $value) {
            $value = (int) $value;
        }
    }
}

array_walk_recursive($payload, 'castNumericValues');



var_dump($payload);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => float 1.5
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 123
  1 => 
    array (size=3)
      'id' => int 2
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 456
*/
```
12. It works correctly but we can write the code in a more cleaner way.
```php
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
```
13. Between array_walk and array_map you might decide which to use.
14. Just remember we need to pass value by reference &$value.
15. We also have added benefict to have $index without having to pass it in.
16. As well remember that we are modifying the original array.
17. So if you don't want to overwrite is better to use array_map instead.


### Sorting

```php
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
```

1. sort()
```php
$names = ['alex', 'dale', 'billy', 'ashley'];

sort($names);

var_dump($names);

/*
array (size=4)
  0 => string 'alex' (length=4)
  1 => string 'ashley' (length=6)
  2 => string 'billy' (length=5)
  3 => string 'dale' (length=4)
*/
/*
array (size=5)
  0 => int 1
  1 => int 11
  2 => int 13
  3 => int 20
  4 => int 50
*/
```



var_dump($newPeople);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string 'dale' (length=4)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string 'dale' (length=4)
      'email' => string 'billy@gmail.com' (length=15)
*/

```
9. This is the long way, while the other one you don't need to create variable.
10. But you have to be careful when passing values by references since we change original source.
11. We want to loop through these through reference to change original value using &number
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
}

var_dump($numbers);

/*
  array (size=4)
  0 => int 2
  1 => int 4
  2 => int 6
  3 => int 8
*/

```

12. Problem now is that if yo want to loop through the same modified array again.
13. We expected to get 7 yet we got 6 instead
14. Probably is when we looping the number refers to last value by reference so is still 6
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
}

// var_dump($numbers);

foreach ($numbers as $number) {
    var_dump($number);
}
/*
int 2

int 4

int 6

int 6
*/

```
#### Unset
1. We resolve the above problem using unset()
```php
$numbers = [1, 2, 3, 4];

foreach ($numbers as &$number) {
    $number = $number * 2;
    unset($number);
}

// var_dump($numbers);

foreach ($numbers as $number) {
    var_dump($number);
}
/*
int 2

int 4

int 6

int 8
*/
```
2. Since we unset the values, we not get clean set of values.
3. If you take variable by reference make sure to unset it after to avoid problem later when you try to use original array.

### 4 The inarray function
1. 
```php
$names = ['alex', 'billy', 'dale'];

var_dump(in_array('alex', $names)); // true
var_dump(in_array('ashley', $names)); // false
```
2. can be used in an if statement
```php
if (in_array()) {

}
```

1. 
```php
$allowedFileExtensions = ['jpg', 'jpeg', 'png'];

$fileName = 'cat.jpg';


// explode function takes a string and create array using delimiter in this case is "."
$fileParts = explode('.', $fileName);

var_dump($fileParts);

/*
    array (size=2)
    0 => string 'cat' (length=3)
    1 => string 'jpg' (length=3)
*/
```
2. get the .jpg
```php
$fileName = 'cat.jpg';
$fileName = 'cat.jpg';

// explode function takes a string and create array using delimiter in this case is "."
$fileParts = explode('.', $fileName);

// get last item from array in this case .jpg
$fileExtension = end($fileParts);

// var_dump($fileParts);
var_dump($fileExtension);
```
3. Now we can use if statement to check if file is one of the required extensions
```php

if (in_array($fileExtension, $allowedFileExtensions)) {
    die('Upload'); // Upload
}

```
#### When looping we might want to excluse certain parts
1. read files
```php

$files = opendir('files');

while (($file = readdir($files)) !== false) {
    var_dump($file);
}

/*
 '..' (length=2)
 'two.txt' (length=7)
 'one.txt' (length=7)
 '.' (length=1)
 */
 ```
2. remove files that are not neccesary and you want to ignore
3. In here we use array instead of a long multiple || statements
```php
$files = opendir('files');

$ignoreFiles = ['.', '..', '.DS_Store'];

while (($file = readdir($files)) !== false) {

    // if ($file === '.' || $file === '..' || $file)
    if (in_array($file, $ignoreFiles)) {
        continue;
    }
    var_dump($file);  
}
/*
 '..' (length=2)
 'two.txt' (length=7)
 'one.txt' (length=7)
 '.' (length=1)
*/
```
4. Another advantage is that I can just add new item to array and it will work

### Arrays keys
1. Allows us to extract keys from an array.
```php
$array = ['alex' => 26, 'billy' => 22];

$keys = array_keys($array);

var_dump($keys);
/*
array (size=2)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
*/
```
2. Here is the code we going to improve
```php
$db = new PDO('mysql:host=localhost;dbname=project', 'homestead', 'secret');

$fields = [
    'name'  => 'alex',
    'email' => 'alex@codecourse.com'
];

$id = 1;

$update = $db->prepare("UDATE users SET name = ?, email = ? WHERE id = ?");

$update->execute([
    'alex',
    1
]);
```
3. Here is how we improve it.
```php
$id = 1;

$values = implode(' = ?, ', array_keys($fields)) . ' = ?';

echo $values; // name = ?, email = ?
```

4. using array merge
```php
var_dump(array_merge($fields, [$id]));
/*
array (size=3)
  'name' => string 'alex' (length=4)
  'email' => string 'alex@codecourse.com' (length=19)
  0 => int 1
*/
```

5. using array values to get the values only 
```php

var_dump(array_merge(array_values($fields), [$id]));
/*
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'alex@codecourse.com' (length=19)
  2 => int 1
*/
```
6. Now we can use this code to get result we want
```php
$update = $db->prepare('UPDATE users SET {$values} WHERE id = ?');
$update->execute(array_merge(array_values($fields), [$id]));
```

### Mapping over an array
1. The array we will use.
```php
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
```
2. when using foreach to loop over array
```php
foreach ($people as $person) {
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    unset($person);
}

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
#### array_map
1.  First argument is an anonymous function.
2.  Second argument is the array we plan to loop through.
```php
$people = array_map(function ($person) {
    var_dump($person);
}, $people);
/*
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 1
  'first_name' => string 'Alex' (length=4)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'alex@gmail.com' (length=14)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 2
  'first_name' => string 'Billy' (length=5)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'billy@gmail.com' (length=15)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 3
  'first_name' => string 'Dale' (length=4)
  'last_name' => string 'Garret' (length=6)
  'email' => string 'dale@gmail.com' (length=14)
/home/cjlaborde/Sites/phparrays/6-mapping-over-an-array/index.php:40:
array (size=4)
  'id' => int 4
  'first_name' => null
  'last_name' => null
  'email' => string 'ashley@gmail.com' (length=16)
*/
```
3. Now if we do it like this we will get weird result.
```php
$people = array_map(function ($person) {
    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
}, $people);

var_dump($people);

/*
array (size=4)
  0 => null
  1 => null
  2 => null
  3 => null
*/
```
4. The reason for this is once we modify these people we need to return that person
```php
$people = array_map(function ($person) {
    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    return $person;
}, $people);

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => string ' ' (length=1)
*/
```
5. Now we want to return full_name as null instead of ' '
```php
$people = array_map(function ($person) {
    if (!$person['first_name'] && !$person['last_name']) {
        $person['full_name'] = null;
        return $person;
    }

    // var_dump($person);
    $person['full_name'] = $person['first_name'] . ' ' . $person['last_name'];
    return $person;
}, $people);

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => null
*/

```
6. Now what if we want to include an index
```php
$people = array_map(function ($person, $index) {
    var_dump($index);
}, $people);

var_dump($people);

/*
array (size=4)
  0 => null
  1 => null
  2 => null
  3 => null
  */
```
7. This will not work, so we going to do pass array_keys as index
8. array_map you can pass more than 1 array after the initial array.
```php
$people = array_map(function ($person, $index) {
    var_dump($index);
}, $people);

var_dump($people);

/*
int 0
int 1
int 2
int 3
  */
```
9. What if we want to pass another argument
```php
$people = array_map(function ($person, $index, $letter) {
    // var_dump($index);
    var_dump($letter);
}, $people, array_keys($people), ['a', 'b', 'c', 'd']);

/*
string 'a' (length=1)
string 'b' (length=1)
string 'c' (length=1)
string 'd' (length=1)
*/
```
10. array_map usually a better option than using foreach and passing values by references.

#### Now we will discuss scope
1. In a foreach the scope is within itself
2. Now in array_map when you introduce anonymous function or enclosure this has it's own scope
3. We get error here for this reason. Since now the function has its own scope.
```php
$ages = [26, 22, 53, 51];

$people = array_map(function ($person, $index) {
    $person['age'] = $ages[$index];
    return $person;
}, $people, array_keys($people));

var_dump($people);
// Notice: Undefined variable: ages
```
4. To resolve this we use the use keyword to access $ages variable withing the array_map function
#### use() with array_map
1. In the use you pass variables you can to use within that scope.
```php
$ages = [26, 22, 53, 51];

$people = array_map(function ($person, $index) use ($ages) {
    $person['age'] = $ages[$index];
    return $person;
}, $people, array_keys($people));

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'age' => int 26
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'age' => int 22
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'age' => int 53
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'age' => int 51
*/
```
2. You can pass multiple variables in use() to bring it to the current scope

### Getting the sum of array items
1. Now we will use array_sum which essentially add up any item you have within an array.
```php
$numbers = [2, 4, 6];

echo array_sum($numbers); // 12

```
2. now if you have string value it will simply be ignored $numbers = [2, 4, 6, 'alex'];

3. if we include number with string it will sum it
```php
$numbers = [2, 4, 6, '1alex'];

echo array_sum($numbers); // 12

```
4. The reason it works is because it will convert the string to any number it finds in the start
```php
echo (int) '1alex'; // 1
```
5. It will not work if the number is at the end
```php
echo (int) 'alex1'; // 0
```
#### using func_get_args  inside add function
1. Get all arguments passed in the function without declaring them in the function ($num1, $num2)
```php
function add()
{
    var_dump(func_get_args());
}

add(1, 2, 3);
/*
array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3
*/

```
2. now we use array_sum
```php
function add()
{
    return array_sum(func_get_args());
}

echo add(1, 2, 3); // 6
/*
array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3
*/
```

#### now we will use OOP
```php
class Item
{
    protected $cost;

    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }
}

class Cart
{
}

$item1 = (new Item)->setCost(10);
$item2 = (new Item)->setCost(20);

var_dump($item1);
/*
object(Item)[2]
  protected 'cost' => int 10
*/
var_dump($item2);
/*
object(Item)[3]
  protected 'cost' => int 20
*/  
```

2. The idea is that within cart we want to take a list of items.
3. We will have method called add() to add items to our cart
```php
class Cart
{
    protected $items = [];

    public function add(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }
}
```
4. Now we will have function called total() inside cart with a temporally fixed value
5. Now we will create the total() function using different ways.
6. Using foreach
```php
    public function total()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getCost();
        }
        return $total;
    }
```
7. array_sum not going to work since we can't sum objects with it
```php
public function total()
{
  return array_sum($this->items);
}

```
8. Now we can also use array_map to list the items
```php
    public function total()
    {
        $items = array_map(function ($item) {
            return $item->getCost();
        }, $this->items);

        var_dump($items);
        die();
    }
    /*
      array (size=2)
        0 => int 10
        1 => int 20
    */

```
9. Now we can get correct number by putting array_map inside array_sum
```php
    public function total()
    {
        return array_sum(array_map(function ($item) {
            return $item->getCost();
        }, $this->items));
    }
```
10. with array_map it allows for more flexibility as well

### Filtering
1. array filter is very similar to array_map in the syntax but what we actually doing is filtering out items we don't need rather than mapping through them and possibly changing item.
2. Lets say we have group of users we need to filter.
```php
$users = [
    ['username' => 'alex', 'score' => 0],
    ['username' => 'ashley', 'score' => 0],
    ['username' => 'dale', 'score' => 50],
    ['username' => 'billy', 'score' => 12],
];
```
3. In here It return empty since I am setting all items to return false
```php
$users = array_filter($users, function ($user) {
    return false;
});

var_dump($users);
/*
array (size=0)
  empty
*/

```
4. If return true we get back all of our items
```php
$users = array_filter($users, function ($user) {
    return true;
});

var_dump($users);
/*
array (size=4)
  0 => 
    array (size=2)
      'username' => string 'alex' (length=4)
      'score' => int 0
  1 => 
    array (size=2)
      'username' => string 'ashley' (length=6)
      'score' => int 0
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/
```
5. array_filter is really when ever a condition return true or false
6. In our case we want to filter out users that have score 0
```php
$users = array_filter($users, function ($user) {
    if ($user['score'] > 0) {
        return true;
    }
});

var_dump($users)
/*
array (size=2)
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/

```
7. since it will return true or false it will reach same result with less code
```php
$users = array_filter($users, function ($user) {
    return $user['score'] > 0;
});

var_dump($users)
/*
array (size=2)
  2 => 
    array (size=2)
      'username' => string 'dale' (length=4)
      'score' => int 50
  3 => 
    array (size=2)
      'username' => string 'billy' (length=5)
      'score' => int 12
*/

```
8. Now we will use keys instead to filter the user with index key 0
9. This will not work because we have to tell array filter we want to use both the index and the value 
```php
$users = array_filter($users, function ($user, $index) {
    return $index === 0;
},);

var_dump($users);
//Uncaught ArgumentCountError: Too few arguments to function
```
10. ARRAY_FILTER_USE_BOTH
```php
$users = array_filter($users, function ($user, $index) {
    return $index === 0;
}, ARRAY_FILTER_USE_BOTH);

var_dump($users);
/*
array (size=1)
  0 => 
    array (size=2)
      'username' => string 'alex' (length=4)
      'score' => int 0
*/
```
11. simpler way is just use $users[0];

1. Now we will filter out null and false values
```php
$scores = [
    2,
    5,
    10,
    false,
    null,
    0
];

$scores = array_filter($scores);
var_dump($scores);
/*
array (size=3)
  0 => int 2
  1 => int 5
  2 => int 10
  6 => int -5
*/

```
2. Now the problem is that it also remove value 0
3. It would not remove negative values

# The arraywalk function
1. We will compare this to array_map
```php
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


$people = array_map(function ($person) {
    $person['first_name'] = 'Dale'; 
    return $person;
}, $people);


var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Dale' (length=4)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
2. The diference is that array walk give us more flexibility
3. Array walk will return boolean
4. first you pass  the array you want to loop through
5. Then you pass the functiom
6. $index is automatically available so no need to pass keys like array_map
```php

array_walk($people, function ($person, $index) {
    $person['first_name'] = 'Dale';
    return $person;
});

var_dump($people);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
7. This does not work because when we want to modify something we want to pass person by reference &$person.
8. Using &$person makes $person reference the original
9. Because unlike array_map we not creating new variable $people = array_map
10. What we doing is modifying the existing array 
```php
array_walk($people, function (&$person, $index) {
    $person['first_name'] = 'Dale';
    return $person;
});

var_dump($people);

*/
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Dale' (length=4)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
11. we can pass other arguments after the function
```php
array_walk($people, function (&$person, $index, $data) {
    $person['first_name'] = $data['first_name'];
    $person['first_name'] = $data['last_name'];
    return $person;
}, ['first_name' => 'Dale', 'last_name' => 'Smith']);

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
  1 => 
    array (size=4)
      'id' => int 2
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
  2 => 
    array (size=4)
      'id' => int 3
      'first_name' => string 'Smith' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
  3 => 
    array (size=4)
      'id' => int 4
      'first_name' => string 'Smith' (length=5)
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
*/
```
#### Create joinName function
1. $delimiter is what separe our names
2. Here we will use array_walk to call a function
```php
function joinName(&$person, $index, $delimeter = ' ')
{
    $person['full_name'] = $person['first_name'] . $delimeter . $person['last_name'];
    return $person;
}

array_walk($people, 'joinName');
// pass the delimiter as second argument
array_walk($people, 'joinName', '%20');

var_dump($people);
/*
array (size=4)
  0 => 
    array (size=5)
      'id' => int 1
      'first_name' => string 'Alex' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'alex@gmail.com' (length=14)
      'full_name' => string 'Alex Garret' (length=11)
  1 => 
    array (size=5)
      'id' => int 2
      'first_name' => string 'Billy' (length=5)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'billy@gmail.com' (length=15)
      'full_name' => string 'Billy Garret' (length=12)
  2 => 
    array (size=5)
      'id' => int 3
      'first_name' => string 'Dale' (length=4)
      'last_name' => string 'Garret' (length=6)
      'email' => string 'dale@gmail.com' (length=14)
      'full_name' => string 'Dale Garret' (length=11)
  3 => 
    array (size=5)
      'id' => int 4
      'first_name' => null
      'last_name' => null
      'email' => string 'ashley@gmail.com' (length=16)
      'full_name' => string ' ' (length=1)
*/
```

#### array_walk_recursive
1. It will look inside and array then within that array and within another array inside

```php

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

var_dump($payload);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => string '1.5' (length=3)
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => string '123' (length=3)
  1 => 
    array (size=3)
      'id' => string '2' (length=1)
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => string '456' (length=3)
*/

```
2. The problem is we want integers instead of strings id so we need to do this recursively through the entire payload.
```php
array_walk_recursive($payload, function (&$value) {
    var_dump($value);
});

/*
 '1.5' (length=3)
 'What a lovely day' (length=17)
 '123' (length=3)
 '2' (length=1)
 'What a lovely day' (length=17)
 '456' (length=3)

*/

```
3. Now that we have each value we can check if each value is numeric
4. We will check if value is_numeric and change it to integer
```php
array_walk_recursive($payload, function (&$value) {
    if (is_numeric($value)) {
        $value = (int) $value;
    }
});

var_dump($payload);

/*
array (size=2)
  0 => 
    array (size=3)
      'id' => int 1
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 123
  1 => 
    array (size=3)
      'id' => int 2
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 456

 */
```
5. Shorter way without if statement using ternary operator
```php
array_walk_recursive($payload, function (&$value) {
    $value = is_numeric($value) ? (int) $value : $value;
});

```
6. Now what if we want to check if number is float or integer
7. So we convert them all to float then check if they have decimal place or not
8. To do this we use if statement with floor that round down the value
9. Then we check if that is equal to the original value
10. For example if we floor 1.5 we get 1 so floating values will not pass the if statement
11. While 123 after floor is still 123 hence is an integer.

```php

function castNumericValues(&$value)
{
    if (is_numeric($value)) {
        $value = (float) $value;

        if (floor($value) === $value) {
            $value = (int) $value;
        }
    }
}

array_walk_recursive($payload, 'castNumericValues');



var_dump($payload);
/*
array (size=2)
  0 => 
    array (size=3)
      'id' => float 1.5
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 123
  1 => 
    array (size=3)
      'id' => int 2
      'body' => string 'What a lovely day' (length=17)
      'user' => 
        array (size=1)
          'id' => int 456
*/
```
12. It works correctly but we can write the code in a more cleaner way.
```php
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
```
13. Between array_walk and array_map you might decide which to use.
14. Just remember we need to pass value by reference &$value.
15. We also have added benefict to have $index without having to pass it in.
16. As well remember that we are modifying the original array.
17. So if you don't want to overwrite is better to use array_map instead.


### Sorting

```php
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
```

1. sort()
```php
$names = ['alex', 'dale', 'billy', 'ashley'];

sort($names);

var_dump($names);

/*
array (size=4)
  0 => string 'alex' (length=4)
  1 => string 'ashley' (length=6)
  2 => string 'billy' (length=5)
  3 => string 'dale' (length=4)
*/
```

```php
$numbers = [50, 20, 13, 11, 1];
sort($numbers);
var_dump($numbers);
/*
array (size=5)
  0 => int 1
  1 => int 11
  2 => int 13
  3 => int 20
  4 => int 50
*/
```
2. rsort()
```php
$numbers = [50, 20, 13, 11, 1];
rsort($numbers);
var_dump($numbers);
/*
array (size=5)
  0 => int 50
  1 => int 20
  2 => int 13
  3 => int 11
  4 => int 1
*/
```
```php
$names = ['alex', 'dale', 'billy', 'ashley'];

rsort($names);

var_dump($names);

/*
array (size=4)
  0 => string 'dale' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'ashley' (length=6)
  3 => string 'alex' (length=4)

*/

```
3. The downside of these is they don't give you enough control.
4. If you have arrays and you have keys you want to maintain.
5. If we use sort() we lose the keys

```php
$names = ['alex' => 26, 'dale' => 54, 'billy' => 22, 'ashley' => 52];

sort($names);

var_dump($names);

/*
array (size=4)
array (size=4)
  0 => int 22
  1 => int 26
  2 => int 52
  3 => int 54
*/
```
6. To resolve this we use asort() instead
```php
asort($names);
/*
array (size=4)
  'billy' => int 22
  'alex' => int 26
  'ashley' => int 52
  'dale' => int 54
*/

var_dump($names);
```
7. using arsort()
```php

arsort($names);
/*
array (size=4)
  'dale' => int 54
  'ashley' => int 52
  'alex' => int 26
  'billy' => int 22
*/
```

8. 50 should be the first one since the key is 0
```php
$numbers = [50, 20, 13, 11, 1];

sort($numbers);

var_dump($numbers);
array (size=5)
  0 => int 1
  1 => int 11
  2 => int 13
  3 => int 20
  4 => int 50
```
9. by using asort() we can sort them by key order with 50 been 0 index
```php
asort($numbers);

var_dump($numbers);
/*
array (size=5)
  4 => int 1
  3 => int 11
  2 => int 13
  1 => int 20
  0 => int 50
*/
```
10. or use arsort()
```php
arsort($numbers);

var_dump($numbers);
/*
array (size=5)
  0 => int 50
  1 => int 20
  2 => int 13
  3 => int 11
  4 => int 1
  */
```
11. if you want to sort by key and not the value use ksort()
```php
ksort($names);
var_dump($names);
/*
array (size=4)
  'alex' => int 26
  'ashley' => int 52
  'billy' => int 22
  'dale' => int 54
*/
```
12.  for the reverse sort by keys use krsort()
```php
krsort($names);
var_dump($names);
/*
array (size=4)
  'dale' => int 54
  'billy' => int 22
  'ashley' => int 52
  'alex' => int 26
*/
```
#### Sorting files
1. As you see is not sorting properly, reason been 2 is greating than the 1 in the 12 so is sorting in a strange way.
```php
$files = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
sort($files);

var_dump($files);

/*
array (size=4)
  0 => string 'img1.png' (length=8)
  1 => string 'img10.png' (length=9)
  2 => string 'img12.png' (length=9)
  3 => string 'img2.png' (length=8)
*/
```
2. To sort properly use natsort()
```php
$files = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
natsort($files);

var_dump($files);
/*
array (size=4)
  3 => string 'img1.png' (length=8)
  2 => string 'img2.png' (length=8)
  1 => string 'img10.png' (length=9)
  0 => string 'img12.png' (length=9)
*/
```

#### Recreate Sort method with usort()
1. With usort() first you pass what want to sort and then the function callback
2. Then inside the function($first, $second) we pass 2 numbers at a time
3. We want to check if number is same we want to keep it in same place for example if we have 4,4
```php
if ($first === $second) {
  return 0; // essentially do nothing
}

```
4. Now if first value is greater than second value we want to move it up the list
```php
if ($first > $second) {
  return 1;
}
```
5. Here is the result
```php
$numbers = [4, 10, 1, 52, 89];

usort($numbers, function ($first, $second) {
    if ($first === $second) {
        return 0;
    }
    if ($first > $second) {
        return 1;
    } else {
        return -1;
    }
});

var_dump($numbers);
/*
array (size=5)
  0 => int 1
  1 => int 4
  2 => int 10
  3 => int 52
  4 => int 89
*/
```
6. Using ternary operator
```php
usort($numbers, function ($first, $second) {
    if ($first === $second) {
        return 0;
    }
    // if ($first > $second) {
    //     return 1;
    // } else {
    //     return -1;
    // }
    return ($first > $second) ? 1 : -1;
});
```

#### Using spaceship operator <=>
1. 1 <=> 1 is the equivelant of the if statement we did above.
```php
usort($numbers, function ($first, $second) {
  echo 1 <=> 1;
  /* Replaces below
    if ($first === $second) {
        return 0;
    }
  */

  echo 1 <=> 2; // -1
  echo 2 <=> 1; // 1
  /* Replaces below
    if ($first > $second) {
        return 1;
    } else {
        return -1;
    }

    return ($first > $second) ? 1 : -1;
    */
});

```
2. Spaceship <=> is very useful for sorting and it saves writing a lot of code.
```php
usort($numbers, function ($first, $second) {
    return $first <=> $second;
});

var_dump($numbers);
/*
array (size=5)
  0 => int 1
  1 => int 4
  2 => int 10
  3 => int 52
  4 => int 89
*/
```
#### Check reputation example
1. We have list of users that we going to sort based on reputation
```php
$users = [
    ['username' => 'alex', 'reputation' => 50, 'posts' => 200],
    ['username' => 'dale', 'reputation' => 300, 'posts' => 150],
    ['username' => 'billy', 'reputation' => 2, 'posts' => 5],
    ['username' => 'ashley', 'reputation' => 1, 'posts' => 6]

];

usort($users, function ($first, $second) {
    $scoreOne = $first['reputation'] + $first['posts'];
    $scoreTwo = $second['reputation'] + $second['posts'];

    return ($scoreOne > $scoreTwo) ? -1 : 1;
});

var_dump($users);
/*
array (size=4)
  0 => 
    array (size=3)
      'username' => string 'dale' (length=4)
      'reputation' => int 300
      'posts' => int 150
  1 => 
    array (size=3)
      'username' => string 'alex' (length=4)
      'reputation' => int 50
      'posts' => int 200
  2 => 
    array (size=3)
      'username' => string 'ashley' (length=6)
      'reputation' => int 1
      'posts' => int 6
  3 => 
    array (size=3)
      'username' => string 'billy' (length=5)
      'reputation' => int 2
      'posts' => int 5

*/

```
2. Sort by reputation as well, that way billy jumps top of ashley
```php
usort($users, function ($first, $second) {
    $scoreOne = $first['reputation'] + $first['posts'];
    $scoreTwo = $second['reputation'] + $second['posts'];

    // if the 2 scores are equal we reach this block
    // if reputation of first person is higher then we want to return 0
    // Otherwise you want to return 1
    // 
    if ($first['reputation'] > $second['reputation']) {
        return 0;
    } else {
        return 1;
    }

    return ($scoreOne > $scoreTwo) ? -1 : 1;
});

var_dump($users);
/*
array (size=4)
  0 => 
    array (size=3)
      'username' => string 'dale' (length=4)
      'reputation' => int 300
      'posts' => int 150
  1 => 
    array (size=3)
      'username' => string 'alex' (length=4)
      'reputation' => int 50
      'posts' => int 200
  2 => 
    array (size=3)
      'username' => string 'billy' (length=5)
      'reputation' => int 2
      'posts' => int 5
  3 => 
    array (size=3)
      'username' => string 'ashley' (length=6)
      'reputation' => int 1
      'posts' => int 6
*/
```
3. You can refactor the code using ternary operator
```php
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
    /*
    if ($first['reputation'] > $second['reputation']) {
        return 0;
    } else {
        return 1;
    }
    */

    return ($scoreOne > $scoreTwo) ? -1 : 1;
});
```
#### Reuse usort function
1. You can attach function

```php
usort($users, 'sortByScore');
```
2. Then create sortByScore function
```php
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

usort($users, 'sortByScore');

var_dump($users);
/*
array (size=4)
  0 => 
    array (size=3)
      'username' => string 'dale' (length=4)
      'reputation' => int 300
      'posts' => int 150
  1 => 
    array (size=3)
      'username' => string 'alex' (length=4)
      'reputation' => int 50
      'posts' => int 200
  2 => 
    array (size=3)
      'username' => string 'billy' (length=5)
      'reputation' => int 2
      'posts' => int 5
  3 => 
    array (size=3)
      'username' => string 'ashley' (length=6)
      'reputation' => int 1
      'posts' => int 6
*/
```
#### array_multisort()
1. Out of the box works same as sort()
```php

$numbers = [50, 20, 13, 11, 1];

array_multisort($numbers);

var_dump($numbers);
/*
array (size=5)
  0 => int 1
  1 => int 11
  2 => int 13
  3 => int 20
  4 => int 50
*/
```
2. You can also past the order using SORT_DESC
```php

$numbers = [50, 20, 13, 11, 1];

array_multisort($numbers, SORT_DESC);

var_dump($numbers);

/*
array (size=5)
  0 => int 50
  1 => int 20
  2 => int 13
  3 => int 11
  4 => int 1
*/
```
3. We can actually cast values to sort them
4. These flags for each item cast it for a particular value then we go and sort properly base on the type
5. In PHP manuals we can see the sort flags
6. <https://www.php.net/manual/en/function.array-multisort.php>
```markdown
Sorting type flags:

SORT_REGULAR - compare items normally (don't change types)
SORT_NUMERIC - compare items numerically
SORT_STRING - compare items as strings
SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()
SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
```
1. SORT_NUMERIC will cast items to a number before they are sorted
2.  In here it does not make a difference when you introduce a string
```php
$numbers = [50, 20, 13, 11, 1, 'alex'];

array_multisort($numbers, SORT_DESC, SORT_NUMERIC);

var_dump($numbers);

/*
array (size=5)
  0 => int 50
  1 => int 20
  2 => int 13
  3 => int 11
  4 => int 1
  5 => string 'alex' (length=4)
*/
```
3. But if you have a number in front of the string it will cast it as number
```php
// (int) '100alex'; // 100 
$numbers = [50, 20, 13, 11, 1, '100alex'];

array_multisort($numbers, SORT_DESC, SORT_NUMERIC);

var_dump($numbers);

/*
array (size=6)
  0 => string '100alex' (length=7)
  1 => int 50
  2 => int 20
  3 => int 13
  4 => int 11
  5 => int 1
*/

```
4.  Now if we SORT_STRING it will work differently
```php
// (int) '100alex'; // 100 
$numbers = [50, 20, 13, 11, 1, '100alex'];

array_multisort($numbers, SORT_DESC, SORT_NUMERIC);

var_dump($numbers);

/*
array (size=6)
  0 => int 50
  1 => int 20
  2 => int 13
  3 => int 11
  4 => string '100alex' (length=7)
  5 => int 1
*/
```
5. SORT_NATURAL
```php
$files = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];

array_multisort($files, SORT_DESC, SORT_NATURAL);

var_dump($numbers);

/*
array (size=4)
  0 => string 'img12.png' (length=9)
  1 => string 'img10.png' (length=9)
  2 => string 'img2.png' (length=8)
  3 => string 'img1.png' (length=8)
*/
```
1. The point of array_multisort is give you more  flexibility
2. Rather than using different functions set them based on your needs.

#### array_multisort also allows you sort multiple arrays side by side
1. Lets create 2 different arrays
```php
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
```

### Pushing and popping
#### Pushing
1. Add Item to array
```php
$names = ['alex', 'billy'];

$names[] = 'dale';

var_dump($names)
/*
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
*/
```
2. Now we will use array_push that can add 1 or more items
```php
array_push($names, 'dale');

var_dump($names);
/*
array (size=3)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
*/
```
3. Reason you want to use array_push is that is very convenient to pass multiple values.
```php
array_push($names, 'dale', 'tabby', 'sheba');
/*
array (size=5)
  0 => string 'alex' (length=4)
  1 => string 'billy' (length=5)
  2 => string 'dale' (length=4)
  3 => string 'tabby' (length=5)
  4 => string 'sheba' (length=5)
*/
```
#### Remove last element from the array
1. lets remove last item from the array
```php
array_pop($names);
var_dump($names);

/*
array (size=1)
  0 => string 'alex' (length=4)
*/

``` 
2. To return only the value that been pop
```php
$popped = array_pop($names);

var_dump($popped);
// string 'billy' (length=5)
```

### The array_reduce function
1. The purpose of array_reduce is literally take an array and reduce it to a single value.

2. First we pass what we want to reduce $items and then the callback function ()
3. <https://www.php.net/manual/en/function.array-reduce.php>
```
Parameters ¶
array
The input array.

callback
callback ( mixed $carry , mixed $item ) : mixed
carry
Holds the return value of the previous iteration; in the case of the first iteration it instead holds the value of initial.

item
Holds the value of the current iteration.

initial
If the optional initial is available, it will be used at the beginning of the process, or as a final result in case the array is empty.
```
4. With carry the first loop will be initial then the other array items
5. The first iteration is null based on $carry that we set it up as aditional item.
```php
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
```
6. Lets var_dump $carry
```php
$total = array_reduce($items, function ($carry, $item) {
  var_dump($carry);
}, null);
/*
null
null
null
*/

```
7. return $item;
```php
$total = array_reduce($items, function ($carry, $item) {
  var_dump($carry);
  return $item;
}, null);
/*
null
array (size=1)
  'price' => int 5
/home/cjlaborde/Sites/phparrays/12-the-array-reduce-function/index.php:17:
array (size=1)
  'price' => int 5
*/
```
8. Lets var_dump items
```php
$total = array_reduce($items, function ($carry, $item) {
    var_dump($carry);
    return $item;
}, null);
/*
array (size=1)
  'price' => int 5
/home/cjlaborde/Sites/phparrays/12-the-array-reduce-function/index.php:24:
array (size=1)
  'price' => int 5
/home/cjlaborde/Sites/phparrays/12-the-array-reduce-function/index.php:24:
array (size=1)
  'price' => int 5
*/
```
9. First check if $carry is null. if so return next item.
```php
$total = array_reduce($items, function ($carry, $item) {
    if (!$carry) {
      return $item;
    }

}, null);
```
10. Then we going reduce the $items array to a single price
11. Then we use $carry which will return the value of the previous iteration
```php
$total = array_reduce($items, function ($carry, $item) {
    if (!$carry) {
        return $item;
    }

    $carry['price'] += $item['price'];

    return $carry;
}, null);

var_dump($total);
/*
array (size=1)
  'price' => int 15
*/
var_dump($total['price']) // 15
```
### Random array items
1. Select random item from an array
2. Can be used for example to output random quote or color.
3. Important to know that this is not a substitution for randomly selecting numbers
4. You are better off using PHP functions for numbers like random_in(min, max);
5. This is useful for selection a random item from an array.
6. First we will use an example about colors.
7. Having items from an array and picking random numbers.
8. We going to have random selected color to change background color.
9. We going to use the php random function
```php
echo rand(1, 5); 
```
10. Now what we can do is use random function to select random item from the array
```php
$colors = ['#ff7473', '#ffc952', '#47b8e0', '#34314c'];

$backgroundColor = $colors[rand(0, 3)];

echo $backgroundColor;
```
11. But what if you want to keep adding more colors and want to make it more dynamic
12. What we do is use count and substract 1 since arrays first item start at 0.
```php
$backgroundColor = $colors[rand(0, count($colors) - 1)];
```
#### using array rand
1. first we pass the item we going to randomly pick item from in this case $colors.
2. second we select how many we want randomly selected in this case we only want 1.
3. Here we use array_rand and see is picking up the key randomly.
```php
$backgroundColorKey = array_rand($colors, 1);

var_dump($backgroundColorKey);
```
4. Now we will use backgroundColorKey to randomly select color
```php
$backgroundColorKey = array_rand($colors, 1);

$backgroundColor = $colors[$backgroundColorKey];

// var_dump($backgroundColorKey);
var_dump($backgroundColor);
```
5. We can also refractor the code
```php
$backgroundColor = $colors[array_rand($colors, 1)];
var_dump($backgroundColor);
```
6. Now we going to change the background color in html
```html
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
```


### Merging
1. There are times you may want to merge 2 arrays.
2. You can add multiple arrays to merge them together with array_merge
```php
$names = ['alex'];

$moreNames = ['dale', 'ashley'];

$cats = ['tabby', 'sheba'];


$finalNames = array_merge($names, $moreNames, $cats);

var_dump($finalNames);
```

#### merge arrays recursively
1. What we want to do here is merge these arrays together
```php
$originalState = [
    'username' => 'alex',
    'likes' => ['food', 'cats']
];

$alteredState = [
    'username' => 'alex',
    'email' => 'alex@codecourse',
    'likes' => ['codecourse']
];

$user = array_merge_recursive($originalState, $alteredState);
var_dump($user);
/*
array (size=3)
  'username' => 
    array (size=2)
      0 => string 'alex' (length=4)
      1 => string 'alex' (length=4)
  'likes' => 
    array (size=3)
      0 => string 'food' (length=4)
      1 => string 'cats' (length=4)
      2 => string 'codecourse' (length=10)
  'email' => string 'alex@codecourse' (length=15)
*/
```
2. Problem is the duplication with username
3. So you need to check if value are same then omit the repetition
4. While 'likes' did merge up together perfectly even through they are within a multidimensional array
5. Now you see the benefit of array_merge_recursive where recursive going through and merging any arrays under same index.





















