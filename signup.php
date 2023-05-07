<?php
// include the configuration file
require_once('config.php');

// connect to the database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // insert data into the database
  $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  mysqli_query($conn, $query);

  // redirect to the login page
  header('Location: login.html');
  exit;
}

// close the database connection
mysqli_close($conn);
?>