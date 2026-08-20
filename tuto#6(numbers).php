<?php

$radius = 25;                         // variable for radius
$pi = 3.14;                           // variable for pi


// basic - *, /, +, -, **              // basic arithmetic operators

// echo $pi * $radius ** 2;           // calculate pi × radius²


// order of operation (BIDMAS)         // order of mathematical operations

// echo 2 * (4 + 9) / 3;               // brackets first, then multiplication/division


// increment & decrement operators     

echo $radius++;                       // display value, then increase by 1
echo $radius;                         // display new value

// echo $radius--;                    // display value, then decrease by 1
// echo $radius;                      // display new value


// shorthand operators                

// $age = 20;                          // assign 20 to $age
// $age += 10;                         // same as $age = $age + 10
// echo $age;                          // display $age

// $age -= 10;                         // same as $age = $age - 10
// $age *= 2;                          // same as $age = $age * 2
// echo $age;                          // display $age


// number functions                   

// echo floor($pi);                    // round number down
// echo ceil($pi);                     // round number up
echo pi();                             // return value of pi

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>