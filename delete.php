<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_magelang";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek apakah ada ID yang diberikan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM pesanan WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Tutup koneksi
$conn->close();

// Redirect kembali ke halaman utama setelah delete
header("Location: ticket.php");
exit();
