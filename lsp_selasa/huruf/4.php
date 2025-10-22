<?php

$nilai = array(80, 85, 90, 96, 78, 76);
$total = 0;

$rata = array_sum($nilai) / count($nilai);

if ($rata >= 90) {
    $predikat = "A";
} elseif ($rata < 90 && $rata >= 80) {
    $predikat = "B";
} elseif ($rata < 80 && $rata >= 70) {
    $predikat = "C";
} else {
    $predikat = "D";
}

// Tampilkan hasil
echo "Nilai: " . implode(", ", $nilai) . "<br>";
echo "Rata-rata nilai: " . $rata . "<br>";
echo "Predikat: " . $predikat;
?>
