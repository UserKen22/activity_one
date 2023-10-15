<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["full_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (strlen($password) < 8) {
        echo "Password should be at least 8 characters long.";
    } else {
        $user = [
            "full_name" => $fullName,
            "username" => $username,
            "email" => $email
        ];

        //$userData = json_encode($user);
        //file_put_contents("users.txt", $userData . PHP_EOL, FILE_APPEND);

        echo "Registration successful!";

        header("Location: index.html");
    }
} else {
    header("HTTP/1.1 400 Bad Request");
    exit("Invalid request.");
}
?>