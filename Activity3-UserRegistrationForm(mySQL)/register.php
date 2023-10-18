<?php
// Connect to the MySQL database
$host = 'localhost'; // Replace with your database host
$username = 'kaloyiii'; // Replace with your database username
$password = 'kaloyiii1132'; // Replace with your database password
$database = 'user_registration'; // Replace with your database name

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (full_name, username, email, password) VALUES ('$full_name', '$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful; redirect to index.html
        header("Location: index.html");
        exit(); // Make sure to stop further script execution
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>