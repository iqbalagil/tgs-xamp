<?php
//variabel sebelum diberi operasi Gabungan Aritmatik dan Assignment
$a = 10;
$b = 20;
$c = 30;
$d = 40;
$e = 50;


// tampilkan nilai variabel sebelum operasi
echo "<b>Sebelum dilakukan operasi</b><br/>"; echo '$a' . " = $a<br/>";
echo '$b' . " = $b<br/>"; echo '$c' . " = $c<br/>"; echo '$d' . " = $d<br/>"; echo '$e' . " = $e<br/><br/>";

//ini baris operasi Gabungan Aritmatik dan Assignment
$a += 4;
$b -= 5;
$c *= 2;
$d /= 2;
$e %= 3;


//menampilkan hasinya
echo "<b>Setelah dilakukan operasi</b><br/>"; echo '$a += 4' . " hasilnya ".$a."<br/>"; echo '$b -= 5' . " hasilnya ".$b."<br/>"; echo '$c *= 2' . " hasilnya ".$c."<br/>"; echo '$d /= 2' . " hasilnya ".$d."<br/>"; echo '$e %= 3' . " hasilnya ".$e."<br/>";
?>
