<?php
include 'db_connection.php';

// Proses data dari form ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari input form
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
    $jumlah_hari = $_POST['jumlah_hari'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $tagihan = $_POST['tagihan'];

    // Proper handling of paket[] (array of selected checkboxes)
    if (isset($_POST['paket']) && is_array($_POST['paket'])) {
        $paket = implode(", ", $_POST['paket']); // Convert array to comma-separated string
    } else {
        $paket = ''; // If no paket is selected, set it to an empty string
    }

    // Jika ID ada, update, jika tidak, insert baru
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Update existing record
        $id = $_POST['id'];
        $sql = "UPDATE pesanan SET 
                    nama='$nama', 
                    no_hp='$no_hp', 
                    waktu_pelaksanaan='$waktu_pelaksanaan', 
                    jumlah_hari='$jumlah_hari', 
                    jumlah_peserta='$jumlah_peserta', 
                    paket='$paket', 
                    tagihan='$tagihan' 
                WHERE id=$id";
    } else {
        // Insert new record
        $sql = "INSERT INTO pesanan (nama, no_hp, waktu_pelaksanaan, jumlah_hari, jumlah_peserta, paket, tagihan)
                VALUES ('$nama', '$no_hp', '$waktu_pelaksanaan', '$jumlah_hari', '$jumlah_peserta', '$paket', '$tagihan')";
    }

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
