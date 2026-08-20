<?php

// indexed arrays                                     

$peopleOne = ['Stonks', 'Pisoros', 'Emanz'];           // create indexed array
// echo $peopleOne[1];                                 // access item at index 1

$peopleTwo = array('Koserf', 'Azure');
// echo $peopleTwo[1];                                 

$ages = [20, 30, 40, 50];                              // indexed array of numbers
// print_r($ages);                                     // display entire array

$ages[1] = 25;                                         // change value at index 1
// print_r($ages);                                     // display updated array

$ages[] = 60;                                          // add new item to the end
// print_r($ages);                                     

array_push($ages, 70);                                 // add item to the end of array
// print_r($ages);                                     

// echo count($ages);                                  // count number of items in array


$peopleThree = array_merge($peopleOne, $peopleTwo);    // combine two arrays
// print_r($peopleThree);                              // display combined array


// associative arrays (key & value pairs)             

$koserfOne = [
    'Koserf' => 'blue',
    'Azure' => 'red',
    'Stonks' => 'black'
];                                                     // create associative array

// echo $koserfOne['Azure'];                           // access value using key 'Azure'
// print_r($koserfOne);                                


$koserfTwo = array(
    'Emanz' => 'orange',
    'Pisoros' => 'purple'
);                                                     // create another associative array

// print_r($koserfTwo);                                // display entire array

$koserfTwo['Lee'] = 'yellow';                          // add new key and value
// print_r($koserfTwo);                               

// echo count($peopleOne);                             // count items in indexed array


$koserfThree = array_merge($koserfOne, $koserfTwo);    // combine two associative arrays
print_r($koserfThree);                                 // display combined array

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>