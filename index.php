<?php

// define('NAME', 'Koserf'); // define a constant named NAME

// echo 'hello, koserf'; // display/output text

// $name = "Miles"; // variable named $name
// $age = "20"; // variable named $age

// $name = 'Azure'; // change the value of $name

// $stringOne = 'my email is ';  // variable storing a string
// $stringTwo = 'k0serf@gmail.com';   

// echo $stringOne;  
// echo $stringOne . $stringTwo;  // concatenate/combine two strings

// $name = 'Azure';  // assign value to $name

//echo 'Hey, my name is ' . $name;  // concatenate string with variable

// echo "Hey my name is $name";   // double quotes can directly use variables

//echo "the shark screamed \"whaaaa\"";   // escape double quotes using \"
//echo 'the shark screamed "whaaa"';  // single quotes can contain double quotes

//echo $name[1];  // access character at index 1

//echo strlen($name);  // count number of characters
//echo strtoupper($name);   // convert string to uppercase
//echo strtolower($name);  // convert string to lowercase
//echo str_replace('u', 'a', $name);  // replace 'u' with 'a' in $name

// $radius = 25;  // variable for radius
// $pi = 3.14;  // variable for pi

// basic - *, /, +, -, **  // basic arithmetic operators

// echo $pi * $radius ** 2;  // calculate pi × radius²

// order of operation ( B I D M A S)

// echo 2 * (4 + 9) / 3;   // brackets first, then multiplication/division

// increment & decrement operators

// echo $radius++;  // display value, then increase by 1
// echo $radius;  // display new value

// echo $radius--;  // display value, then decrease by 1
// echo $radius;

// shorthand operatores

// $age = 20;  // assign 20 to $age

// $age += 10; // same as $age = $age + 10
// echo $age;

// $age -= 10;  // same as $age = $age - 10
// $age *= 2;  // same as $age = $age * 2
// echo $age;

// number functions

// echo floor($pi);  // round number down
// echo ceil($pi);  // round number up
// echo pi();  // return value of pi

// indexed arrays

// $peopleOne = ['Stonks', 'Pisoros', 'Emanz'];  // create indexed array
// echo $peopleOne[1];  // access item at index 1

// $peopleTwo = array('Koserf', 'Azure');  
// echo $peopleTwo[1];

// $ages = [20, 30, 40, 50];  // indexed array of numbers
// print_r($ages);  // display entire array

// $ages[1] = 25;  // change value at index 1
// print_r($ages);  // display updated array

// $ages[] = 60;  // add new item to the end
// print_r($ages);

// array_push($ages, 70);  // add item to the end of array
// print_r($ages);

// echo count($ages);  // count number of items in array

// $peopleThree = array_merge($peopleOne, $peopleTwo);  // combine two arrays
// print_r($peopleThree);  // display combined array

// associative arrays (key & value pairs)

// $koserfOne = ['Koserf' => 'blue', 'Azure' => 'red', 'Stonks' => 'black'];  // create associative array
// echo $koserfOne['Azure'];  // access value using key 'Azure'
// print_r($koserfOne);   // display entire associative array

// $koserfTwo = array('Emanz' => 'orange', 'Pisoros' => 'purple');
// print_r($koserfTwo);   // display entire array

// $koserfTwo['Lee'] = 'yellow';  // add new key and value
// print_r($koserfTwo); 

// echo count($peopleOne);  // count items in indexed array

// $koserfThree = array_merge($koserfOne, $koserfTwo);  // combine associative arrays
// print_r($koserfThree);  // display combined array

// multi-dimensional arrays

// $blogs = [
// ['title' => 'koserf party', 'author' => 'koserf', 'content' => 'lorem', 'likes' => 30],
//  ['title' => 'stonks cheats', 'author' => 'stonks', 'content' => 'lorem', 'likes' => 25],
//  ['title' => 'azure noob', 'author' => 'azure', 'content' => 'lorem', 'likes' => 50]

// ];   // create multi-dimensional array

// print_r($blogs);  // display entire array
// print_r($blogs[1]);  // display second blog
// print_r($blogs[1][1]);  // access index 1 inside second blog
// echo $blogs[2]['author'];  // display author of third blog
// echo count($blogs);  // count number of blogs

// $blogs[] = ['title' => 'cat cafe', 'author' => 'pisoros', 'content' => 'lorem', 'likes' => 100];   // add new blog to array

// print_r($blogs);  // display updated blogs
// $popped = array_pop($blogs);   // remove last item and store it in $popped
// print_r($popped);  // display removed item

// loops

// $koserf = ['koserf', 'azure', 'stonks'];  

// for ($i = 0; $i < count($koserf); $i++) {  // for loop
//    echo $koserf[$i] . '<br />/';  // display each item
// }

// foreach($koserf as $koserf){  // loop through each array item
//   echo $koserf . '<br />';  // display current item
// }

// $products = [
//     ['name' => 'pencil case', 'price' => 20],
//     ['name' => 'clips', 'price' => 10],
//     ['name' => 'notebook', 'price' => 15],
//     ['name' => 'pen', 'price' => 5],
//     ['name' => 'paint', 'price' => 40],
//     ['name' => 'brush', 'price' => 2]
// ];   // array containing product information

// foreach ($products as $product) {   // loop through every product
//   echo $product['name'] . ' - ' . $product['price'];  // display product name and price
//    echo '<br />';  // line break
// }

// $i = 0;  // starting value for counter

// while ($i < count($products)) {  // repeat while condition is true
//    echo $products[$i]['name'];  // display product name
//    echo '<br />';  
//    $i++;  // increase counter by 1
// }

// comparisons booleans (true or false)

// echo true; "1"  // true is displayed as 1
// echo false; ""  // false displays nothing

// numbers

// echo 5 < 10;  // true: 5 is less than 10
// echo > 10;  // true: 10 is greater than 5
// echo 5 == 10;  // false: values are not equal
// echo 10 == 10;  // true: values are equal
// echo 5 <= 5;  // true: 5 is less than or equal to 5
// echo 5 >+ 5;  // true: 5 is greater than or equal to 5

// strings

// echo 'koserf' < 'azure';   // compare strings alphabetically
// echo 'koserf' > 'azure';
// echo 'koserf' > 'Koserf';  // compare lowercase/uppercase strings
// echo 'stonks' == 'stonks';  // true: strings are exactly the same
// echo 'stonks' == 'Stonks';  // false: uppercase/lowercase differ

// loose vs strict equal comparison

// echo 5 == '5';  // true: same value, ignores data type
// echo 5 === '5';  // false: value same but data type different
// echo 5 === 5;  // true: same value and same data type

// echo true == "1";  // true: loose comparison
// echo false == "";  


?>

<!-- <!DOCTYPE html>
<html>

<head>
    <title>my first PHP file</title>
</head>

<body>

    <h1><?php echo 'hello, koserf'; ?> </h1>

</body>

</html> 

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <h1>User Profile Page</h1>

     <div><?php echo $name; ?></div> 
    <div><?php echo NAME; ?> </div>
    <div><?php echo $age; ?></div>

</body>

</html> 

<!-- <!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>

            <h3><?php echo $product['name']; ?></h3>
            <p>RM <?php echo $product['price']; ?></p>

        <?php } ?> 
    </ul>

</body>

</html> -->