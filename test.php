<?php
$username = "test";
$password = "12345";

if ($_POST['text'] == $username && $_POST['password'] == $password ) {
echo "Login Sucessfully.";
} 
else {
echo "Login Failed.";
}
?>