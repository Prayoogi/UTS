<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemrograman Web 2 - Tabel Harga Barang Lengkap</title>
</head>
<body>

<!-- UTS Pemrograman Web 2 -->
<h2>UTS Pemrograman Web 2 Bagian B(a)</h2>
<p>Nama: Prayogi</p>
<p>NIM: 701220313</p>
<p>Kelas: 3A</p>

<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "Pepsoden", 30, 10000),
    array(2, "Sunlight", 15, 11000),
    array(3, "Baygon", 10, 16000),
    array(4, "Dove", 20, 22000),
    array(5, "Rinso", 20, 20000),
    array(6, "Downy", 25, 12000),
    array(7, "Le Mineral", 25, 5000),
);

$totalJumlah = 0; 

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; 
    $totalJumlah += $jumlah; 
    $row[] = $jumlah; 
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; 

?>