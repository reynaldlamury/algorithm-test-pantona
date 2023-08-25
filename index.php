<?php
/*
  Buat fungsi untuk mencari 3 angka dari array, yang ketika dijumlahkan menghasilkan
  nilai 0, jika tidak ada, return “Not Found”, jika ada ,return angka sesuai urutan
  penjumlahan

  Example

  Input :
  $array_number = [2,1,5,7,4,-8,-3,-1]

  Output : -3,1,2
  (-3 + 1 + 2 = 0)

*/


$array_number = [2, 1, 5, 7, 4, -8, -3, -1];

foreach ($array_number as $num) {
  var_dump($num);
}
