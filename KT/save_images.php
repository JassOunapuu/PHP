<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_COOKIE["loggedIn"]) || $_COOKIE["loggedIn"] != "true") {
	// Redirect to the login page if the user is not logged in
	header("Location: test.php");
	exit();
}

// Get the image links from the form data
$image_links = $_POST["image_links"];

// Save the image links to a file, overwriting the previous contents
$file = fopen("img.txt", "w");
fwrite($file, $image_links . "\n");
fclose($file);

// Redirect back to the dashboard
header("Location: dashboard.php");
exit();
?>