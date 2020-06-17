<?php
// First, create the database handle

//Using MySQL (connection via local socket):
$dsn = "mysql:host=localhost;dbname=testdb";
// $dsn = "pqsql:host=localhost;dbname=testdb";//postgress
$username = "root";
$password = "";
$db = new PDO($dsn, $username, $password);
// setup PDO to throw an exception if an invalid query is provided
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// BIND values to SQL ver 1 ( with ? marks)

// Next, let's prepare a statement for execution, with a single placeholder
$query = "SELECT * FROM users WHERE class = ? AND username= ?";


$statement = $db->prepare($query);

// Create some parameters to fill the placeholders, and execute the statement
$parameters = [ $_POST['class'],  $_POST['username']];


// Bind values to SQL ver 2 ( :word )
// $query = "SELECT * FROM users WHERE class = :class AND username= :username";
// $statement = $db->prepare($query);

// // Create some parameters to fill the placeholders, and execute the statement
// $parameters = [":class"=>$_POST['class'], ":username"=>$_POST['username']];

$statement->execute($parameters);

// Now, loop through each record as an associative array
// while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

//    //   $row['id'], $row['username'], $row['password']
// }

// $result = $statement->fetchAll();

// foreach ($result as $key => $value) {
//     // ["id"=> 1] 
//     // $key - "id"
//     // $value - 1
//     echo $key. " ". $value;
// }


/**
 * Database transactions ensure that a set of data changes will only be made permanent if every statement is successful. 
 * Any query or code failure during a transaction can be caught and you then have the option to roll back the attempted changes.
 */
// INSERT, UPDATE , DELETE


$pdo = new PDO(
    $dsn, 
    $username, 
    $password, 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

try {
    $statement = $pdo->prepare("UPDATE user SET name = :name");

    // IF no errors - we update all in database
    // IF any error - we dont update ALL OF THEM
    $pdo->beginTransaction();

        $statement->execute(["name"=>'Bob']);  
        $statement->execute(["name"=>'Joe']);   
        $statement->execute(["name"=>'Marta']);  

    $pdo->commit();
} 
catch (\Exception $e) { // IF ERROR WE GO TO CATCH
    if ($pdo->inTransaction()) {
          $pdo->rollback();
        // If we got here our two data updates are not in the database
    }
    throw $e;
}
 


// Payment order

// CREATE order record -  > record
// UPDATE payments -   > record 
// UPDATE packages  -   > record

