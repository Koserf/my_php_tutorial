<?php

// define('NAME', 'Koserf');

// echo 'hello, koserf';

// $name = "Miles";
// $age = "20";

// $name = 'Azure';

// $stringOne = 'my email is ';
// $stringTwo = 'k0serf@gmail.com';

// echo $stringOne;
// echo $stringOne . $stringTwo;

// $name = 'Azure';

//echo 'Hey, my name is ' . $name;

// echo "Hey my name is $name"; //diff between double n single quote

//echo "the shark screamed \"whaaaa\"";
//echo 'the shark screamed "whaaa"';

//echo $name[1];

//echo strlen($name);
//echo strtoupper($name);
//echo strtolower($name);
//echo str_replace('u', 'a', $name);

// $radius = 25;
// $pi = 3.14;

// basic - *, /, +, -, **

// echo $pi * $radius ** 2;

// order of operation ( B I D M A S)

// echo 2 * (4 + 9) / 3;

// increment & decrement operators

// echo $radius++;
// echo $radius;

// echo $radius--;
// echo $radius;

// shorthand operatores

// $age = 20;

// $age += 10;
// echo $age;

// $age -= 10;
// $age *= 2;
// echo $age;

// number functions

// echo floor($pi);
// echo ceil($pi);
// echo pi();

// indexed arrays

// $peopleOne = ['Stonks', 'Pisoros', 'Emanz'];
// echo $peopleOne[1];

// $peopleTwo = array('Koserf', 'Azure');
// echo $peopleTwo[1];

// $ages = [20, 30, 40, 50];
// print_r($ages);

// $ages[1] = 25;
// print_r($ages);

// $ages[] = 60;
// print_r($ages);

// array_push($ages, 70);
// print_r($ages);

// echo count($ages);

// $peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// associative arrays (key & value pairs)

// $koserfOne = ['Koserf' => 'blue', 'Azure' => 'red', 'Stonks' => 'black'];
// echo $koserfOne['Azure'];
// print_r($koserfOne);

// $koserfTwo = array('Emanz' => 'orange', 'Pisoros' => 'purple');
// print_r($koserfTwo);

// $koserfTwo['Lee'] = 'yellow';
// print_r($koserfTwo);

// echo count($peopleOne);

// $koserfThree = array_merge($koserfOne, $koserfTwo);
// print_r($koserfThree);

// muki-dimensional arrays

// $blogs = [
// ['title' => 'koserf party', 'author' => 'koserf', 'content' => 'lorem', 'likes' => 30],
//  ['title' => 'stonks cheats', 'author' => 'stonks', 'content' => 'lorem', 'likes' => 25],
//  ['title' => 'azure noob', 'author' => 'azure', 'content' => 'lorem', 'likes' => 50]

// ]; 

// print_r($blogs);
// print_r($blogs[1]);
// print_r($blogs[1][1]);
// echo $blogs[2]['author'];
// echo count($blogs);

// $blogs[] = ['title' => 'cat cafe', 'author' => 'pisoros', 'content' => 'lorem', 'likes' => 100];

// print_r($blogs);
// $popped = array_pop($blogs);
// print_r($popped);

// loops

// $koserf = ['koserf', 'azure', 'stonks'];

// for ($i = 0; $i < count($koserf); $i++) {
//    echo $koserf[$i] . '<br />/';
// }

// foreach($koserf as $koserf){
//   echo $koserf . '<br />';
// }

// $products = [
//     ['name' => 'pencil case', 'price' => 20],
//     ['name' => 'clips', 'price' => 10],
//     ['name' => 'notebook', 'price' => 15],
//     ['name' => 'pen', 'price' => 5],
//     ['name' => 'paint', 'price' => 40],
//     ['name' => 'brush', 'price' => 2]
// ];

// foreach ($products as $product) {
//   echo $product['name'] . ' - ' . $product['price'];
//    echo '<br />';
// }

// $i = 0;

// while ($i < count($products)) {
//    echo $products[$i]['name'];
//    echo '<br />';
//    $i++;
// }

// comparisons booleans (true or false)

// echo true; "1"
// echo false; ""

// numbers

// echo 5 < 10;
// echo > 10;
// echo 5 == 10;
// echo 10 == 10;
// echo 5 <= 5;
// echo 5 >+ 5;

// strings

// echo 'koserf' < 'azure';
// echo 'koserf' > 'azure';
// echo 'koserf' > 'Koserf';
// echo 'stonks' == 'stonks';
// echo 'stonks' == 'Stonks';

// loose vs strict equal comparison

// echo 5 == '5';
// echo 5 === '5';
// echo 5 === 5;

echo true == "1";
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