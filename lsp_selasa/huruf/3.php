<?php
function luasLingkaran($r) {
    return 3.14 * $r * $r;
}

function kelilingLingkaran($r) {
    return 2 * 3.14 * $r; 
}

$jari2 = 10;

echo "Jari-jari lingkaran: " . $jari2 . "<br>";
echo "Luas lingkaran: " . luasLingkaran($jari2) . "<br>";
echo "Keliling lingkaran: " . kelilingLingkaran($jari2);
?>
