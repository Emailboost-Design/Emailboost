<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the form data (e.g., send email, store in database)
    mail('your-email@example.com', 'New Contact Form Submission', $message, 'From: ' . $email);
    
    echo "Thank you for contacting us!";
}
?>
