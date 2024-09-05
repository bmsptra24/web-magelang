function calculateTagihan() {
  const harga = parseFloat(document.getElementById('harga').value) || 0
  const jumlahPeserta =
    parseFloat(document.getElementById('jumlah_peserta').value) || 0
  const tagihan = harga * jumlahPeserta
  document.getElementById('tagihan').value = tagihan.toFixed(2)
}
