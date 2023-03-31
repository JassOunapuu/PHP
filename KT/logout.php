<?php
// Start the session
session_start();

// Unset the "loggedIn" cookie
setcookie("loggedIn", "", time() - 3600, "/");

// End the session
session_unset();
session_destroy();

// Redirect to the login page
header("Location: test.php");
exit();
?>