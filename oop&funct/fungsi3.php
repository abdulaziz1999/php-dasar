<?php
//membuat fungsi return value
function hitung($a,$b){
    $c = $a + $b;
    return $c;
}
//panggil fungsi
$x = 10; $y = 50;
$z = hitung($x,$y);
echo "Hasil penjumlahan $x + $y = $z";
echo "<br/>Hasil penjumlahan 100 + 200 = ".hitung(100,200);