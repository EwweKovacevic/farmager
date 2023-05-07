<?php
// include the configuration file
require_once('config.php');

// start the session
session_start();

// connect to the database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // get the user from the database
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  // check if the user exists
  if (mysqli_num_rows($result) > 0) {
    // set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // redirect to the dashboard page
    header('Location: dashboard.html');
    exit;
  } else {
    // display error message
    $error = 'Invalid username or password.';
  }
}

// close the database connection
mysqli_close($conn);
?>
