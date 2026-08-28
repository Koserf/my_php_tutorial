<?php

$stringOne = 'my email is ';              // variable storing a string
$stringTwo = 'k0serf@gmail.com';          // variable storing a string

// echo $stringOne . $stringTwo;          // concatenate/combine two strings


$name = 'Azure';                          // variable named $name

// echo 'Hey, my name is ' . $name;       // concatenate string with variable
// echo "Hey my name is $name";            // double quotes can directly use variables

// echo "the shark screamed \"whaaaa\"";   // escape double quotes using \"
// echo 'the shark screamed "whaaa"';      // single quotes can contain double quotes


// echo $name[1];                          // access character at index 1

// echo strlen($name);                     // count number of characters
// echo strtoupper($name);                 // convert string to uppercase
// echo strtolower($name);                 // convert string to lowercase

echo str_replace('u', 'a', $name);        // replace 'u' with 'a' in $name

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>