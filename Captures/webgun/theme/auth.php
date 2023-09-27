<?php
session_start();

$hostname = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "db_iot"; // Ganti dengan nama database Anda

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php"); // Ganti dengan halaman dashboard Anda
        exit();
    } else {
        
        echo "<script>alert('Login gagal.');</script>";
        echo "<script>window.location.href = 'page-login.php';</script>";
    }
}

mysqli_close($conn);
?>
