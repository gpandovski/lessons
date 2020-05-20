<?php
// $_SERVER
// $_REQUEST
// $_GET
// $_POST
// $_COOKIE
// $_SESSION
// $_FILES

// echo "<pre>";
// var_dump( $_FILES);
// echo "</pre>";
// we validate TEXT input 
// if(isset($_POST['other'])) {

// }
// we validate FILES uploaded
$target_dir = "uploads/";

if (isset($_FILES['fileWeUpload']) && !empty($_FILES['fileWeUpload']['name'])) {
    echo "<pre>";
    var_dump( $_FILES);
    // PHP put our uploaded Example.jpg in TEMPORARY folder tmp_name => "/private/var/tmp/php3d3oYp"
    // move_uploaded_file($_FILES['fileWeUpload']["tmp_name"], $target_dir.$_FILES['fileWeUpload']['name']);

    echo "</pre>";
}

// php.ini
// upload_temp_dir = 
// file_uploads = 1 ( Number of files you can upload)
// upload_max_filesize = 2M (Maximum size of file we can upload to the server)
// 
// tmp_name => "/private/var/tmp/php3d3oYp"
