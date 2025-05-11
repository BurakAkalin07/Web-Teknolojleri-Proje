<?php
$correct_username = 'b241210095@sakarya.edu.tr';
$correct_password = 'b241210095'; 

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $correct_username && $password == $correct_password) {
   
    echo "<h1>Hoş geldiniz!</h1>";
} else {
    
    echo "<h1>Hatalı kullanıcı adı veya şifre!</h1>";
    
}
?>
