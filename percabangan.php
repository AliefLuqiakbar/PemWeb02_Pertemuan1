<?php
$jam = 23;
$hasil = $jam < 12;

echo "Saat ini pukul : $jam <br>";

if($hasil){
    echo "Selamat Pagi!";
} elseif ($jam < 18){
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}