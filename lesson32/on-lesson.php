<?php
echo "<h1> DATABASE </h1>";

// INIT CONNECTION 
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Types and Tools to communicate with database 
// 1) mysqli_* - simple functional interface 
// 2) PDO - advanced Object oriented interface 
// 3) ORM - Eloquent & Query Builder - tools from Laravel framework

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// General algorithm to work with database from PHP

// 1) open connection to database
// 2) send SQL query
// 3) get result (Usually for SELECT queries)
// 4) do smth with the result 
// 5) close connection to database

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// CONNECT TO DATABASE 
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
// mysqli_connect OPTIONS ( same you entered in HeidiSQL Connection )

// localhost , 127.0.0.1 - your local computer ip address ( every computer has his own internal ip address )

// 1) HOST - 'localhost' OR '127.0.0.1'
// 2) Username  'root' OR 'homestead'
// 3) Password '' (empty) OR 'secret'
// 4) Name of database in your database system ( Check in HeidiSQL databases you have )
// 5) Port (optional) 33060 for Homestead or 3306 for custom mysql


// HOMESTEAD (VIRTUAL BOX  + VAGRANT Setup)
// $link = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'your_database_name', '33060'); // could work also without port 

// NO HOMESTEAD 
//$link = mysqli_connect('localhost', 'root', '', 'caphp_example');

// ERROR TRACKING
// if(!$link) {
//     echo "ERROR: "
//     .mysqli_connect_errno()."<br>"
//     .mysqli_connect_error();
// }

// IF you want to change database after connection
// mysqli_select_db($link, 'other_database_you_want_to_connect');


// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// CRUD operations 
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// SELECT (Read database record)
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// $sql = "SELECT * FROM users";

// $result = mysqli_query($link, $sql);

// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// // var_dump($rows);
// foreach($rows as $row) {
//     echo "Fullname : ".$row['firstname']." ".$row['lastname']."<br>";
// }

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// CREATE ( INSERT)
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// // SQL query
// $insert = "INSERT INTO users(id,firstname,lastname) VALUES(NULL, 'Anotony', 'Hopkins')";
// // ask to execute
// mysqli_query($link, $insert);

// // get recent inserted id (primery key)
// $id = mysqli_insert_id($link);

// var_dump($id);

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// UPDATE 
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// $sqlUpdate = "UPDATE users SET firstname='Matt', lastname='Adams' WHERE id= 4";
// mysqli_query($link, $sqlUpdate);
 
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// DELETE
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// $delete = "DELETE FROM users WHERE id=4";
// mysqli_query($link, $delete);

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// USEFULL FUNCTIONS
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// $sql = "SELECT * FROM users";
// $result = mysqli_query($link, $sql);

// count rows you get in result 
// $rowCount = mysqli_num_rows($result);
// var_dump($rowCount);

// count fields you get in result
// $fieldsCount = mysqli_num_fields($result);
// var_dump($fieldsCount);

// mysqli_close($link);

