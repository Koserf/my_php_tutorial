<?php

// Check if the form is submitted using GET method

// if(isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }

// Check if the form is submitted using POST method

if (isset($_POST['submit'])) {

    // Display the submitted email
    // echo $_POST['email'];

    // Display the submitted pizza title
    // echo $_POST['title'];

    // Display the submitted ingredients
    // echo $_POST['ingredients'];

    // htmlspecialchars() converts special characters into HTML entities
    // This helps prevent XSS attacks
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);

    // check email
    if (empty($_POST['email'])) {
        echo 'An email is required <br />';
    } else {
        $email = $_POST['email'];

        // filter_var() checks if the email has a valid email format
        // Unlike htmlspecialchars(), this validates the input
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'email must be a valid email address';
        }
    }

    // check title
    if (empty($_POST['title'])) {
        echo 'A title is required <br />';
    } else {
        $title = $_POST['title'];

        // preg_match() checks if the title follows the given pattern
        // This pattern allows only letters and spaces
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            echo 'Title must be letters and spaces only';
        }
    }

    // check ingredients
    if (empty($_POST['ingredients'])) {
        echo 'At least one ingredient is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];

        // preg_match() checks if ingredients follow the required format
        // This pattern allows letters, spaces and commas
        // Example: Cheese, Tomato, Chicken
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            echo 'Ingredients must be a comma separated list';
        }
    }

} // end of POST check

?>

<!DOCTYPE html>

<html>

<?php include('header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>

    <form class="white" action="add.php" method="POST">

        <label>Your Email:</label>
        <input type="text" name="email">

        <label>Pizza Title:</label>
        <input type="text" name="title">

        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>

    </form>

</section>

<?php include('footer.php'); ?>

</body>

</html>