<h1>Hashing</h1>
<?php
$string = "my";
$secretMd = md5($string);
$secretSha = sha1($string);

$password = "admin";
$passHash = password_hash($password, PASSWORD_BCRYPT); // '$2y$10$urW/fyO0WRHb0UHAJO1Du.xTRlYWoNF1WDcyk5KYjMBJlZe6Tqw9y'

// Example form to validate password entered with user
// if(isset($_POST['password'])) {
//     if( password_verify($_POST['password'], $passHash)) {
//         $_SESSION['user_logged_in'] = true;
//     } else {
//         $_SESSION['user_logged_in'] = false;
//     }
// }

$validationResult = password_verify("admin", $passHash);

var_dump($validationResult);
?>
