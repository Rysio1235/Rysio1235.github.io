<?php
require 'path/to/PHPMailer/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemName = $_POST['item_name'];
    $itemPrice = $_POST['item_price'];
    
    // Przygotowanie treści e-maila
    $emailContent = "Zamówienie: $itemName\nCena: $itemPrice zł";
    
    $mail = new PHPMailer;
    $mail->setFrom('your@example.com', 'Twoja Sushi Wyspa');
    $mail->addAddress('wiazowskiwiazowski@gmail.com'); // Adres odbiorcy
    $mail->Subject = 'Nowe zamówienie';
    $mail->Body    = $emailContent;
    
    if(!$mail->send()) {
        echo 'Wiadomość nie mogła zostać wysłana.';
        echo 'Błąd wysyłki: ' . $mail->ErrorInfo;
    } else {
        echo 'Dziękujemy za zamówienie! E-mail został wysłany.';
    }
}
?>
