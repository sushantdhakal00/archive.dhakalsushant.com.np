<?php
// Retrieve user input from form
$username = $_POST['username'];
$password = $_POST['password'];

// TODO: Validate the username and password
// For example, you could check if the username and password match a hardcoded value:
if ($username === 'admin' && $password === 'admin') {
	// Login successful, redirect user to homepage
	header("Location: homepage.html");
} else {
	// Login failed, display error message
	echo "Invalid username or password";
}
?>






