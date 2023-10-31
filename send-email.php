<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Customize the recipient email address
    $to = "xsanchitguptaa@gmail.com";

    // Subject of the email
    $email_subject = "Contact Form Submission: $subject";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Construct the email message
    $email_message = "First Name: $first_name\n";
    $email_message .= "Last Name: $last_name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $email_subject, $email_message, $headers);

    // Redirect the user to a thank you page
    header("Location: index.html"); // Replace with the path to your thank you page
}
?>
