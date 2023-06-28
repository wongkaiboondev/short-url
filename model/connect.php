<?php
    $domain = "localhost/kburl";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname='tinyurl_db';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else {
    // echo "passed";
}
?>