<?php 

function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}

$msg = "Here's you registration code: " . RandomString();
$email = $_POST['client-email'];
$headers = 'From: webmaster@example.com' . "\r\n" .
       'Reply-To: webmaster@example.com';

header('Location: ../index.php');

?>