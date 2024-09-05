<?php
include 'db_connection.php';

$nama = "";
$no_hp = "";
$waktu_pelaksanaan = "";
$jumlah_hari = "";
$jumlah_peserta = "";
$paket = [];
$tagihan = "";
$edit_mode = false;

if (isset($_GET['id'])) {
    // Jika ada ID, mode edit
    $id = $_GET['id'];
    $sql = "SELECT * FROM pesanan WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ambil data untuk form edit
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $no_hp = $row['no_hp'];
        $waktu_pelaksanaan = $row['waktu_pelaksanaan'];
        $jumlah_hari = $row['jumlah_hari'];
        $jumlah_peserta = $row['jumlah_peserta'];
        $paket = explode(", ", $row['paket']); // Convert paket string back to array
        $tagihan = $row['tagihan'];
        $edit_mode = true; // Berikan status mode edit
    } else {
        echo "Data tidak ditemukan!";
        exit();
    }
}

$conn->close();
?>

<form class="max-w-full w-[80%] md:w-[500px] mx-auto" method="POST" action="submit_form.php">
    <!-- Jika edit, sertakan ID -->
    <?php if ($edit_mode): ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    <?php endif; ?>

    <!-- Nama -->
    <div class="relative z-0 w-full mb-5 group">
        <input value="<?php echo $nama; ?>" type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
    </div>

    <!-- No HP -->
    <div class="relative z-0 w-full mb-5 group">
        <input value="<?php echo $no_hp; ?>" type="text" name="no_hp" id="no_hp" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="no_hp" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No. Hp</label>
    </div>

    <!-- Waktu Pelaksanaan -->
    <div class="relative z-0 w-full mb-5 group">
        <input value="<?php echo $waktu_pelaksanaan; ?>" type="date" name="waktu_pelaksanaan" id="waktu_pelaksanaan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="waktu_pelaksanaan" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Waktu Pelaksanaan</label>
    </div>

    <!-- Jumlah Hari -->
    <div class="relative z-0 w-full mb-5 group">
        <input value="<?php echo $jumlah_hari; ?>" type="number" name="jumlah_hari" id="jumlah_hari" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required oninput="calculateTagihan()" />
        <label for="jumlah_hari" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah Hari Perjalanan</label>
    </div>

    <!-- Jumlah Peserta -->
    <div class="relative z-0 w-full mb-5 group">
        <input value="<?php echo $jumlah_peserta; ?>" type="number" name="jumlah_peserta" id="jumlah_peserta" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required oninput="calculateTagihan()" />
        <label for="jumlah_peserta" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah Peserta</label>
    </div>

    <!-- Checkbox untuk Pilihan Paket -->
    <div class="relative z-0 w-full mb-5 group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Paket Perjalanan</label>

        <div class="flex items-center mb-4">
            <input id="penginapan" type="checkbox" name="paket[]" value="1000000" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="calculateTagihan()"
                <?php if (in_array('1000000', $paket)) echo "checked"; ?>>
            <label for="penginapan" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Penginapan Rp 1.000.000</label>
        </div>

        <div class="flex items-center mb-4">
            <input id="transportasi" type="checkbox" name="paket[]" value="1200000" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="calculateTagihan()"
                <?php if (in_array('1200000', $paket)) echo "checked"; ?>>
            <label for="transportasi" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Transportasi Rp 1.200.000</label>
        </div>

        <div class="flex items-center mb-4">
            <input id="makanan" type="checkbox" name="paket[]" value="500000" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="calculateTagihan()"
                <?php if (in_array('500000', $paket)) echo "checked"; ?>>
            <label for="makanan" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Makanan Rp 500.000</label>
        </div>
    </div>


    <!-- Tagihan -->
    <div class="relative z-0 w-full mb-5 group">
        <input value="<?php echo $tagihan; ?>" type="text" name="tagihan" id="tagihan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " readonly required />
        <label for="tagihan" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tagihan</label>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>