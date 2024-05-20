<?php
$dbhost = "localhost:8889";
$dbuser = "root";
$dbpass = "root";
$db = "productpos";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if (!$conn) {
    die("Connect failed");
}
?>