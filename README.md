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



























