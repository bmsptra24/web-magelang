function calculateTagihan() {
  // Ambil jumlah hari dan peserta
  const jumlahHari =
    parseFloat(document.getElementById('jumlah_hari').value) || 0
  const jumlahPeserta =
    parseFloat(document.getElementById('jumlah_peserta').value) || 0

  // Ambil semua paket yang dipilih (checkbox yang dicentang)
  const selectedPaket = document.querySelectorAll(
    'input[name="paket[]"]:checked',
  )

  let totalHargaPaket = 0

  // Loop melalui semua checkbox yang dipilih dan jumlahkan harganya
  selectedPaket.forEach(function (checkbox) {
    totalHargaPaket += parseFloat(checkbox.value) || 0
  })

  // Hitung total tagihan: jumlah hari * jumlah peserta * total harga paket
  const totalTagihan = totalHargaPaket * jumlahPeserta * jumlahHari

  // Tampilkan hasil tagihan di input tagihan
  document.getElementById('tagihan').value = totalTagihan
}
