<?php
include 'db_connection.php';

// Ambil data berdasarkan ID yang dikirim melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pesanan WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ambil data untuk form edit
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $no_hp = $row['no_hp'];
        $waktu_pelaksanaan = $row['waktu_pelaksanaan'];
        $harga = $row['harga'];
        $jumlah_peserta = $row['jumlah_peserta'];
        $paket = $row['paket'];
        $tagihan = $row['tagihan'];
    } else {
        echo "Data tidak ditemukan!";
        exit();
    }
}

// Proses form jika ada submit untuk update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
    $harga = $_POST['harga'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $paket = $_POST['paket'];
    $tagihan = $_POST['tagihan'];

    // Query untuk update data
    $sql = "UPDATE pesanan SET nama='$nama', no_hp='$no_hp', waktu_pelaksanaan='$waktu_pelaksanaan', harga='$harga', jumlah_peserta='$jumlah_peserta', paket='$paket', tagihan='$tagihan' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui!";
        // Redirect ke halaman utama setelah berhasil update
        header("Location: ticket.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- Tambahkan CDN Tailwind CSS dan Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Data</h2>

        <form method="POST" action="edit.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP</label>
                <input type="text" id="no_hp" name="no_hp" value="<?php echo $no_hp; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="waktu_pelaksanaan" class="block text-sm font-medium text-gray-700">Waktu Pelaksanaan</label>
                <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" value="<?php echo $waktu_pelaksanaan; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="text" id="harga" name="harga" value="<?php echo $harga; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="jumlah_peserta" class="block text-sm font-medium text-gray-700">Jumlah Peserta</label>
                <input type="text" id="jumlah_peserta" name="jumlah_peserta" value="<?php echo $jumlah_peserta; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="paket" class="block text-sm font-medium text-gray-700">Paket</label>
                <input type="text" id="paket" name="paket" value="<?php echo $paket; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="tagihan" class="block text-sm font-medium text-gray-700">Tagihan</label>
                <input type="text" id="tagihan" name="tagihan" value="<?php echo $tagihan; ?>" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</button>
        </form>
    </div>

    <!-- Tambahkan script untuk Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>