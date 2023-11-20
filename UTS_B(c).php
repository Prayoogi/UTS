<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemrograman Web 2 - Tabel Harga Barang Lengkap</title>
</head>
<body>

<!-- UTS Pemrograman Web 2 -->
<h2>UTS Pemrograman Web 2 Bagian B(c)</h2>
<p>Nama: Prayogi</p>
<p>NIM: 701220313</p>
<p>Kelas: 3A</p>

<?php
// Data barang dalam bentuk array multidimensi
$barang = [
    ["Nama Produk" => "Pepsodent", "Stok" => 30, "Harga" => 10000],
    ["Nama Produk" => "Sunlight", "Stok" => 15, "Harga" => 11000],
    ["Nama Produk" => "Baygon", "Stok" => 10, "Harga" => 16000],
    ["Nama Produk" => "Dove", "Stok" => 20, "Harga" => 22000],
    ["Nama Produk" => "Rinso", "Stok" => 20, "Harga" => 20000],
    ["Nama Produk" => "Downy", "Stok" => 15, "Harga" => 12000],
    ["Nama Produk" => "Le Minera", "Stok" => 25, "Harga" => 5000],
];

function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item['Stok'] * $item['Harga'];
    }
    return $totalJumlah;
}

$totalJumlah = hitungTotalJumlah($barang);

$diskon = 0;
if ($totalJumlah >= 300000) {
    $diskon = 0.20; 
} elseif ($totalJumlah >= 200000) {
    $diskon = 0.25; 
}

$totalBayar = $totalJumlah - ($totalJumlah * $diskon);

echo "Tanggal Transaksi: 20 November 2023<br>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";

usort($barang, function ($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Stok'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "a. Total Jumlah Harga : " . $totalJumlah . " Rupiah<br>";
echo "b. Diskon : " . ($diskon * 100) . "%<br>";
echo "c. Total Pembayaran: " . $totalBayar . " Rupiah";
?>