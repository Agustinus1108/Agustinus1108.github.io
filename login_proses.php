<?php
session_start();

// Set session
$_SESSION['username'] = $username;


// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skillboost";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mencegah SQL Injection
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            // Set session
            $_SESSION['username'] = $username;
            header("Location: card.php");
            exit;
        } else {
            echo "<script>alert('Password salah.'); </script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan.'); </script>";
    }

    $stmt->close();
}

$conn->close();
?>
