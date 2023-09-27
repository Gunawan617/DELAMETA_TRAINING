<?php
session_start();

$hostname = "localhost"; // Ganti dengan host database Anda
$username = "root";      // Ganti dengan username database Anda
$password = "";          // Ganti dengan password database Anda
$database = "db_iot";   // Ganti dengan nama database Anda

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Periksa apakah email sudah terdaftar
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $check_result = mysqli_query($conn, $check_query);
    
    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Email sudah terdaftar. Gunakan email lain.');</script>";
        echo "<script>window.location.href = 'page-register.php';</script>";
        exit();
    }

    // Tambahkan pengguna baru ke database
    $insert_query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        echo "<script>alert('Registrasi berhasil. Silakan masuk.');</script>";
        echo "<script>window.location.href = 'page-login.php';</script>"; // Redirect ke halaman login setelah berhasil registrasi
    } else {
        echo "<script>alert('Registrasi gagal. Silakan coba lagi.');</script>";
        echo "<script>window.location.href = 'page-register.php';</script>"; // Redirect kembali ke halaman registrasi jika registrasi gagal
    }
    
}

mysqli_close($conn);
?>
