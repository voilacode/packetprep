<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $slot = $_POST['slot'];

    // Prepare email message
    $to = "mahveenshifa1611@gmail.com";
    $from = $email;

    $headers = "From: $from\r\n";

    $subject = "New Form Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Course: $course\n";
    $message .= "Preferred Slot: $slot\n";

    // Send email
    mail($to, $subject, $message, $headers);
}
?>
