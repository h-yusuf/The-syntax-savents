<?php
// connection database
$conn = mysqli_connect("localhost", "root", "", "adajasa");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = mysqli_prepare($conn, "SELECT   email, password FROM user WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $dbemail, $dbPassword);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Verify password
    if ($dbemail && sha1($password) == $dbPassword) {
        // Password is correct
        $userdata = [
            
            'email' => $dbemail,
            // 'id_user' => $id_user,
        ];
        session_start();
        $_SESSION["LoggedUserData"] = $userdata;

        header("Location: http://localhost/The-syntax-savents/src/pages/Home.php");
        exit();
    } else {
        $error_msg = "Login failed. Please check your email and password.";
        echo "<script>alert('$error_msg'); window.location.href='http://localhost/The-syntax-savents/index.php';</script>";
    }
}
mysqli_close($conn);
?>