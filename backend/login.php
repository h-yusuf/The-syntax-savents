<?php
// Assuming you have a database connection
// Replace the database connection details with your own
// $servername = "your_servername";
// $username = "your_username";
// $password = "your_password";
// $dbname = "your_dbname";

$conn = mysqli_connect("localhost","root","","adajasa");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form with fields named 'email' and 'password'
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user information from the database based on the provided email
    $stmt = $conn->prepare("SELECT email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($dbEmail, $dbPassword);
    $stmt->fetch();
    $stmt->close();

    // Verify the password
    if ($dbEmail && password_verify($password, $dbPassword)) {
        // Password is correct
        echo "<script>alert('Login successful!'); window.location.href='H   ome.html';</script>";    
    } else {
        // Email or password is incorrect
        echo "<script>alert('Login failed. Please check your email and password.');</script>";
    }
}

$conn->close();
?>
