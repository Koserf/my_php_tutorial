<?php

define('NAME', 'Koserf');          // define a constant named NAME

// $name = "Miles";                // variable named $name
$age = 20;                         // variable named $age

// $name = 'Azure';                // change the value of $name
// NAME = '';                      // cannot change a constant

?>

<!DOCTYPE html>                   
<html>                            

<head>                            
    <title>PHP Tutorials</title>   
</head>

<body>                             

    <h1>User Profile Page</h1>     

    <div><?php echo NAME; ?></div>  <!-- display the constant NAME -->
    <div><?php echo $age; ?></div>  <!-- display the variable $age -->

</body>                            

</html>                            