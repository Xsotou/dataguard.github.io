<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $country = htmlspecialchars($_POST['country']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Full Name: $fullname\nEmail: $email\nCountry: $country\nMessage: $message\n\n";
    $file = $email .= '.txt';

    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        echo "We have received a contact us request. Please check your email and await a response. Do not resend the form.";
    } else {
        echo "Your contact request failed, you may resend the request. Ensure you are inputting the correct details.";
    }
}

?>