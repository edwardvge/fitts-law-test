<? 
$to      = 'edievanegdom@gmail.com';
$subject = 'Fitts results';
$message = "Test " . json_encode(json_decode($_POST['data']), JSON_PRETTY_PRINT);
$headers = 'From: edward@evanegdom.nl' . "\r\n";

mail($to, $subject, $message, $headers);
?>