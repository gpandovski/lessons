<?php
echo "<h1>Read CSV files </h1>";

// example.log  - same as usual text file .txt .log 
// Images -  .jpeg  .jpg .gif .png .svg
// Documents .pdf, office, .csv

// .csv
// .json 

// CSV Reading 1
$filename="files/username.csv";

$handle = fopen($filename, 'r');

// echo "<pre>";
// while(!feof($handle)) {
//      // read csv file line into array
//      fgetcsv($handle, 1000, ";")); // ";" csv file delimiter ( by default ",")
// }
// echo "</pre>";
fclose($handle);

// CSV Reading 2
$filename="files/students.csv";

$handle = fopen($filename, 'r');

$result = [];


while(!feof($handle)) {
    // read csv file line into array
    $result[] = fgetcsv($handle); // ";" csv file delimiter ( by default ",")
}

fclose($handle);
 

array_shift($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Score</th>
        <th scope="col">Homeworks</th>
        <th scope="col">Test</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $line):?>
        <tr>
            <td><?php echo $line[0] ?></td>
            <td><?php echo $line[1] ?></td>
            <td><?php echo $line[2] ?></td>
            <td><?php echo $line[3] ?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>
    </div>
</body>
</html>
