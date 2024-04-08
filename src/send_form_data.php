<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $slot = $_POST['slot'];
    
    // You can process the data further here (e.g., send an email)
    
    // For example, to send an email using PHP's mail function
    $to = 'mahveenshifa1611@gmail.com';
    $subject = 'New Form Submission';
    $message = "
        Name: $name
        Email: $email
        Phone: $phone
        Course: $course
        Slot: $slot
    ";
    $headers = 'From: '.$email; // Replace with your email address
    
    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo 'Form submission successful!';
    } else {
        http_response_code(500);
        echo 'Form submission failed!';
    }
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>
