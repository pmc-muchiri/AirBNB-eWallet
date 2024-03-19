<?php
// Include your database connection file
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    // (You should add more validation and sanitization)

    // Query to check if user exists with given credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User authenticated
        // Redirect or set session and redirect
        header("Location: dashboard.php");
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>
