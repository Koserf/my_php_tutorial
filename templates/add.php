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
        echo htmlspecialchars($_POST['email']);
    }

    // check title
    if (empty($_POST['title'])) {
        echo 'A title is required <br />';
    } else {
        echo htmlspecialchars($_POST['title']);
    }

    // check ingredients
    if (empty($_POST['ingredients'])) {
        echo 'At least one ingredient is required <br />';
    } else {
        echo htmlspecialchars($_POST['ingredients']);
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