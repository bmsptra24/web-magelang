<?php
include 'db_connection.php';

// Proses data dari form ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari input form
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp']; // Pastikan nama field unik
    $waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
    $harga = $_POST['harga'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $paket = $_POST['paket']; // Nilai paket dari dropdown
    $tagihan = $_POST['tagihan'];

    // Query untuk memasukkan data ke database
    $sql = "INSERT INTO pesanan (nama, no_hp, waktu_pelaksanaan, harga, jumlah_peserta, paket, tagihan)
            VALUES ('$nama', '$no_hp', '$waktu_pelaksanaan', '$harga', '$jumlah_peserta', '$paket', '$tagihan')";

    // Eksekusi query dan cek apakah berhasil
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
        header("Location: ticket.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
