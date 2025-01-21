
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['your_name']);
    $email = filter_var($_POST['your_email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['your_subject']);
    $message = htmlspecialchars($_POST['your_message']);

    // Email settings
    $to = 'vkwebdevloper@gmail.com'; // Replace with your email address
    $email_subject = "New Inquiry from: $name - $subject";
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Message:\n$message";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong, please try again later.";
    }
} else {
    echo "Invalid request";
}
?>
