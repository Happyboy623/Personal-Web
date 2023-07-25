<!-- process_form.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the email address from the form submission
    $email = $_POST['joyful.foras@gmail.com'];

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email address is valid, you can process it further here (e.g., store it in a database, send an email, etc.)
        echo "Thank you for submitting your email!";
    } else {
        // Invalid email address
        echo "Invalid email address. Please try again.";
    }
}
?>
