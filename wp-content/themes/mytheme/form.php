<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email settings
    $to = "progbizuiux@gmail.com"; // Change this to your email address
    $subject = "New Message from $name";
    $body = "Name: $name\n";
    $body .= "Phone Number: $number\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully, redirect to index page
        header("Location: index.php");
        exit();
    } else {
        // Error sending email, show message
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    // If not a POST request, show an error message
    echo "Sorry, this form can only be submitted via POST method.";
}
?>
