<?php
// definisikan variable konstanta
define ('PHI', 3.14);

// soal 1. Cari nilai dari luas lingkaran dengan jari-jari 8
// soal 2. cari nilai dari keliling lingkaran dengan jari-jari 8

// definisikan jari-jari
$jari = 8;

// rumus luas lingkaran
$luas = PHI * $jari *$jari;

// rumus keliling
$kll = 2 * PHI *$jari;

echo 'Luas lingkaran dengan jari-jari ' .$jari. ' adalah ' .$luas;
echo '<br/>keliling lingkaran nya adalah ' .$kll;
?>
