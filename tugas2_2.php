<?php
$jual = 80000;
$beli = 50000;
$untung = $jual - $beli;
$persen = $untung / $beli * 100;

echo "Jual = $jual <br>";
echo "Beli = $beli <br>";
echo "Keuntungan = ? <br>";
echo "Jawaban : <br>";
echo "Jual - Beli = Untung <br>";
echo "$jual - $beli = $untung <br>";
echo "Keuntungan dalam % : ($untung/$beli X 100% = $persen %)";
?>