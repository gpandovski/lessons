<?php
// setcookie("lastname", "Snow", time() + 3600);
// var_dump($_COOKIE);
// // remove cookie "username"
// if(isset($_COOKIE['username'])) {
//     setcookie("username", $_COOKIE['username'], time() - 360); // time - 360
// }


// $user = [
//     'firstname'=>'John',
//     'lastname'=> 'Snow',
//     'age' => 22
// ];

// // if we need to save in file any data structure like array or object - we need to serialize before we save

// $str = serialize($user);
// // var_dump($str);
// // setcookie("user", $str);

// // $user = unserialize($_COOKIE['user']);
// // print_r($user);

// $encodedString = base64_encode(serialize($user)); // base64_encode - encodes strings 
// // var_dump($encodedString);
// // set cookie and changing headers you must do before output any content

// setcookie("user", $encodedString);
// $user = unserialize(base64_decode($_COOKIE["user"]));

// var_dump($user);




