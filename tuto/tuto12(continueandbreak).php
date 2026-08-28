<?php

// continue & break statements

$products = [
    ['name' => 'pencil case', 'price' => 20],
    ['name' => 'clips', 'price' => 10],
    ['name' => 'notebook', 'price' => 15],
    ['name' => 'pen', 'price' => 5],
    ['name' => 'paint', 'price' => 40],
    ['name' => 'brush', 'price' => 2]
];


// foreach loop
// Loops through each product in the $products array.

foreach ($products as $product) {

    // break
    // Stops the loop completely when the condition is true.

    if ($product['name'] === 'paint') {
        break;
    }


    // continue
    // Skips the current loop iteration and continues with the next product.

    if ($product['price'] > 15) {
        continue;
    }


    // Displays the product name.
    echo $product['name'] . '<br />';

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>