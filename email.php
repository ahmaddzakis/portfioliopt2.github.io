<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["pesan"];
    $to = "ahmaddzaki141@gmail.com";
    $subject = "Pesan dari $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}

$to = "ahmaddzaki141@gmail.com";
$subject = "Email";
$message = "Ini adalah teks percobaan.";
$headers = "From: ahmaddzaki141@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email terkirim.";
} else {
    echo "Email gagal terkirim.";
}
?>
