<?php
// SESSION
session_start();

// Saved on server
$_SESSION['username'] = "John Snow";

?>
<a href="session_output.php">Read session</a>