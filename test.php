<?php
$username = "test";
$password = "12345";

if ($_POST['username'] == $username && $_POST['password'] == $password ) {
echo "Login Sucessfully.";
} else {
echo "Login Failed.";
}
?>