<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Check if the username and password are correct
	if ($_POST["username"] == "admin" && $_POST["password"] == "parool") {
		// Set a cookie that expires in 30 minutes
		setcookie("loggedIn", "true", time() + (30 * 60), "/");
		
		// Redirect to the dashboard
		header("Location: dashboard.php");
		exit();
	} else {
		// Display an error message if the username or password is incorrect
		echo "Invalid username or password.";
	}
}
?>