<?php
session_start();
include "conf/conn.php";
// Ambil nilai dari formulir login
$nama = $_POST['nama'];
$password = ($_POST['password']);

// Query untuk memeriksa apakah user ada dalam tabel user
$query = "SELECT * FROM pasien WHERE nama='$nama'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
        // Jika kata sandi cocok, set session dan peran (role)
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = $row['role']; // pasien

        // Redirect ke halaman sesuai peran
        if ($_SESSION['role'] === 'pasien') {
            header('Location: index_pasien.php');
        } else {
            // Jika peran tidak diketahui
            echo "Peran tidak valid";
        }  } else {
        // Jika kata sandi tidak cocok
        echo "Kata sandi salah";
    }
} else {
    // Jika user tidak ditemukan
    echo "User tidak ditemukan";
}

$conn->close();
?>