<?php
// functions always on top 

// GET/POST 
// first we always check if it exist
echo "<pre>";
// var_dump($_POST);
var_dump($_GET);
echo "</pre>";
$encodedString =urlencode("Skopje is capital of Macedonia! Where you live?%$#@!");

echo "<br>";
var_dump($encodedString);
echo "<br>";
echo "<br>";
var_dump(urldecode($encodedString));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeworkrs overivew</title>
</head>
<body>

    <?php if(!isset($_POST["submit"])) :?>

        <?php include('form.inc.php'); ?>
        <!-- <form action="" method="post">
                <div>
                    <input type="text" name="city">
                    <input type="checkbox" name="checkbox">
                </div>
                <button type="submit" name="submit">Send</button>
            </form> -->
            <?php echo $someInludeVar; ?>
    <?php else: ?>
        
        <a href="<?php back()?>">Back</a>
    <?php endif;?>
</body>
</html>