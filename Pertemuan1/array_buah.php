<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];

echo "Ini adalah hasil data buah dalam array";
// cetak buah dengan index ke 2
echo "<br/>Ini buah index ke 2 - $ar_buah[2]";
// cetak total buah
echo '<br/>total buah adalah ' .count($ar_buah);

// cetak seluruh data array buah
echo "<ol>";
foreach ($ar_buah as $buah ) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Tambahkan Buah
$ar_buah[] = "Durian";

// Hapus  Buah
unset($ar_buah[1]);

// ubah buah index ke 2 menjadi manggis
$ar_buah[2] = "Manggis";

echo "<ol>";
foreach ($ar_buah as $buah ) {
    echo "<li>$buah</li>";
}
echo "</ol>";
?>