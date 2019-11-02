<?php
function acak($panjang)
{
    $angka= '13579';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($angka)-1);
  $string .= $angka{$pos};
    }
    return $string;
}
//cara memanggilnya
$hasil= acak(6);
$a = array($hasil);
echo $hasil;
echo "<\br>";
echo array_sum($a);
?>