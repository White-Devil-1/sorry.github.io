<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to_email = "tripureshtripathi355@gmail.com";
    $subject = "New Message from Sorry Animation";
    $message = $_POST["message"];
    $headers = "From: noreply@example.com" . "\r\n" .
               "Reply-To: noreply@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to_email, $subject, $message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message failed to send.";
    }
}
?>
