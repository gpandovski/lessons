<?php 
// $html = "<h1> This is header of php</h1>";
// echo "<h1> This is header of php</h1>";
// echo "<p> This is header of php</p>";
// echo "<h1> This is header of php</h1>";
// $html ="";
// $html.= " <h1> This is header of php</h1>";
// $html.= "<p> First paragraph </p>";
// $html.= "<p> Second paragraph</p>";

// echo $html;

// // echo $html;
// $someInludeVar = " Include var"; 
// https:// - protocol http/ https(ssl)
// app.test - domain or textual repratation of ip address (DNS) www.googl.com (domain)-> 172.217.17.36 (IP address)
// /lab25/ - path on server ( folder)
// homeworks-overview.php - file name
// ? - special character to show the GET parameters starts
// city=Skopje  => in PHP available in array $_GET['city'] = Skopje
// zipcode=1000  => in PHP available in array $_GET['zipcode'] = Skopje
// & - special character to join the GET parameters


// city= Skopje+is+the+capital+of+Macedonia%21  - URL encoded string %21 - !
 
?>

<form action="" method="GET">
    <div>
        <input type="text" name="city"> <br>
        <br>
        <input type="text" name="zipcode">
    </div>
    <button type="submit">Send</button>
</form>