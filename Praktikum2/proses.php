<?php 
// ambil data untuk di input
error_reporting(0);
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$harga = 0;

if($produk == "TV") {
    $harga = 4200000 * $jumlah;
} elseif ($produk == "Kulkas") {
    $harga = 3100000 * $jumlah;
} elseif ($produk == "Mesin Cuci")  {
    $harga = 3800000 * $jumlah;
} else {
}
    $totalharga = $harga * $jumlah;
?>