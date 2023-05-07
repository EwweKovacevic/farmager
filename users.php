<?php
require_once('config.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

mysqli_close($conn);
?>
