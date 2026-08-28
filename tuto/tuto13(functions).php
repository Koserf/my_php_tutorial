<?php

// functions

// A function is a block of code that can be reused.
// It helps us avoid writing the same code repeatedly.

function sayHello($name = 'Koserf', $time = 'morning')
{
    echo "good $time $name";
}

// sayHello('Azure');

sayHello('Stonks', 'night');


// A function can also accept an array as a parameter.
function formatProduct($product)
{

    // echo "{$product['name']} costs £{$product['price']} to buy <br />";

    // Return a formatted string using the product information.
    return "{$product['name']} costs £{$product['price']} to buy <br />";
}

// $formatted = formatProduct(['name'=>'pencil case', 'price'=>20]);
// echo $formatted;

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>