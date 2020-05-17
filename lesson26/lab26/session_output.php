<?php
session_start();

var_dump($_SESSION);

// var_dump($_SESSION);
// unset($_SESSION['username']); // way 2 (main method)

if(isset($_SESSION['username'])) {
    echo "<h1> Hi my name is: ".$_SESSION['username']."</h1>";
}
// delete session by key
// $_SESSION['username'] = null; // way 1


// delete all session variables stored on server
// session_destroy();

// var_dump(session_name());
// var_dump( session_id());

// setcookie(session_name(), session_id(), time()-3600, "/");
