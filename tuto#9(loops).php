<?php

// loops

$koserf = ['koserf', 'azure', 'stonks'];              // create indexed array


// for loop
// for ($i = 0; $i < count($koserf); $i++) {          // repeat while condition is true
//     echo $koserf[$i] . '<br />';                   // display each item
// }


// foreach loop
// foreach($koserf as $koserf){                       // loop through each array item
//     echo $koserf . '<br />';                       // display current item
// }


$products = [
    ['name' => 'pencil case', 'price' => 20],
    ['name' => 'clips', 'price' => 10],
    ['name' => 'notebook', 'price' => 15],
    ['name' => 'pen', 'price' => 5],
    ['name' => 'paint', 'price' => 40],
    ['name' => 'brush', 'price' => 2]
];                                                     // array containing product information


// foreach($products as $product){                    // loop through every product
//     echo $product['name'] . ' - ' . $product['price']; // display product name and price
//     echo '<br />';                                  // line break
// }


// while loop
$i = 0;                                                // starting value for counter

while ($i < count($products)) {                          // repeat while condition is true
    echo $products[$i]['name'];                        // display product name
    echo '<br />';                                    // line break
    $i++;                                               // increase counter by 1
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <h1>Products</h1>

    <ul>

        <?php foreach ($products as $product) { ?> <!-- loop through each product -->

                <h3><?php echo $product['name']; ?></h3> <!-- display product name -->
                <p>RM <?php echo $product['price']; ?></p> <!-- display product price -->

        <?php } ?> <!-- end foreach loop -->

    </ul>

</body>

</html>