<?php
header('Access-Control-Allow-Origin: *'); // Allow CORS
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if form data is received
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['password']) ) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

   // Option 1: Save the data into a file
    $file = fopen('form_data.txt', 'a');
    fwrite($file, "\n===============\nUsername: $fullname\nEmail: $email\nContact: $contact\nPassword: $password\n===============\n");
    fclose($file);

    //Option 2: Save data to MySQL (if configured)
    // $conn = new mysqli('localhost', 'root', '', 'test_database');
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
    // $conn->query($sql);
    // $conn->close();

    echo "Data successfully submitted and saved!";
} else {
    echo "Error: Missing form data.";
}
?>
