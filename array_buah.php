<?php
// cara penulisan array
// cara lama
$ar_buah = array('pisang','mangga','jeruk');

// cara baru / array indexed
$buah = ['alpukat','jeruk','mangga','pisang'];
// cara memanggil array assosiatif
echo $buah[1];

// cetak jumlah buah
echo '<br/>Jumlah buah ' .count($buah);

// cetak seluruh buah
echo "<ol>";
foreach($buah as $fruit){
    echo "<li>$fruit</li>";
}
echo "</ol>";

// ===============================
// tambahkan buah baru kedalam array
$buah[] = "Durian";

// ubah buah index ke 1
$buah[1] = "apel";

// cetak seluruh buah
echo "<ol>";
foreach($buah as $buas){
    echo "<li>$buas</li>";
}
echo "</ol>";

?>