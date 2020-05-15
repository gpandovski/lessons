
<?php
// COOKIES

// set cookies - cookies is just a small file
// data we send in headers

setcookie("user", "John"); // set session based cookies 

// set time based cookies
// time() - current time Unixtimestamp 60*60 = 3600 
setcookie("user", "John", time()+3600 ); 

// get data from user sent cookie
// var_dump($_COOKIE);
 
   
 // check if cookie with key "user" are set in user browser
if(isset($_COOKIE['user'])) {
    echo "<h1>Hello ".$_COOKIE['user']."</h1>"; // get data in cookie 
} else {
    echo "<h1>Hello Stranger! </h1>";
}