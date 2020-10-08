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



