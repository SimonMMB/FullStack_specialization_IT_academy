<?php
//Exercise 1
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $country = htmlspecialchars($_POST['country']);
    $message = htmlspecialchars($_POST['message']);
}
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['country'] = $country;
$_SESSION['message'] = $message;
echo '<h3>Saved data:</h3>'
    . '<h4>Variables in $_POST:</h4>'
    . 'User name: ' . htmlspecialchars($_POST['name']) . '<br>'
    . 'email: ' . htmlspecialchars($_POST['email']) . '<br>'
    . 'Country: ' . htmlspecialchars($_POST['country']) . '<br>'
    . 'Message: ' . htmlspecialchars($_POST['message']) . '<br>'
    . '<br>'
    . '<h4>Variables in $_SESSION:</h4>'
    . 'User name: ' . htmlspecialchars($_SESSION['name']) . '<br>'
    . 'email: ' . htmlspecialchars($_SESSION['email']) . '<br>'
    . 'Country: ' . htmlspecialchars($_SESSION['country']) . '<br>'
    . 'Message: ' . htmlspecialchars($_SESSION['message']) . '<br>';
session_destroy();
?>