<?php

// conditional statements

// $price = 20;


// if statement
// Checks if the condition is true.
// If true, the code inside the curly brackets will run.

// if ($price < 10) {
//     echo 'the condition is met';


// elseif statement
// Checks another condition if the previous if statement is false.

// } elseif ($price < 30) {
//     echo 'elseif condition met';


// else statement
// Runs if all previous conditions are false.

// } else {
//     echo 'condition not met';
// }


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
// Each product is temporarily stored in the $product variable.

foreach ($products as $product) {

    // && means AND
    // Both conditions must be true.

    // if($product['price'] < 15 && $product['price'] > 2){
    //     echo $product['name'] . '<br />';
    // }


    // || means OR
    // Only one of the conditions needs to be true.

    // if($product['price'] > 20 || $product['price'] < 10){
    //     echo $product['name'] . '<br />';
    // }

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <div>
        <ul>

            <?php foreach ($products as $product) { ?>

                <?php if ($product['price'] > 15) { ?>

                    <li><?php echo $product['name']; ?></li>

                <?php } ?>

            <?php } ?>

        </ul>
    </div>

</body>

</html>