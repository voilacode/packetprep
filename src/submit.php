<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $slot = $_POST['slot'];

    $to = "mahveenshifa1611@gmail.com";
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nCourse: $course\nSlot: $slot";
    
    // Additional headers
    $headers = "From: webmaster@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Mail sent successfully!";
    } else {
        echo "Failed to send mail!";
    }
} else {
    echo "Invalid request!";
}
?>
