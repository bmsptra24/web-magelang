<?php
include 'db_connection.php';

// Query untuk mengambil data dari tabel pesanan
$sql = "SELECT * FROM pesanan";
$result = $conn->query($sql);

?>

<div class="relative overflow-x-auto mt-10">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">No HP</th>
                <th scope="col" class="px-6 py-3">Waktu Pelaksanaan</th>
                <th scope="col" class="px-6 py-3">Harga</th>
                <th scope="col" class="px-6 py-3">Jumlah Peserta</th>
                <th scope="col" class="px-6 py-3">Paket</th>
                <th scope="col" class="px-6 py-3">Tagihan</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data untuk setiap baris
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>";
                    echo "<td class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>" . $row['nama'] . "</td>";
                    echo "<td class='px-6 py-4'>" . $row['no_hp'] . "</td>";
                    echo "<td class='px-6 py-4'>" . $row['waktu_pelaksanaan'] . "</td>";
                    echo "<td class='px-6 py-4'>" . $row['harga'] . "</td>";
                    echo "<td class='px-6 py-4'>" . $row['jumlah_peserta'] . "</td>";
                    echo "<td class='px-6 py-4'>" . $row['paket'] . "</td>";
                    echo "<td class='px-6 py-4'>" . $row['tagihan'] . "</td>";
                    echo "<td class='px-6 py-4'>";
                    echo "<a href='edit.php?id=" . $row['id'] . "' class='text-blue-600 hover:underline'>Edit</a> | ";
                    echo "<a href='delete.php?id=" . $row['id'] . "' class='text-red-600 hover:underline'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8' class='text-center py-4'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// Tutup koneksi
$conn->close();
?>