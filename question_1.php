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

function validateREsult($inputArr, $inputAdditionNum)
{
  $total = 0;
  foreach ($inputArr as $num) {
    $total += $num;
  }
  if ($inputAdditionNum == (0 - $total)) {
    return true;
  }

  return false;
}


// find tripplets 
function findTriplets($arr)
{
  $finalArr = [];
  for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
      for ($k = $j + 1; $k < count($arr); $k++) {

        $found = validateResult(array($arr[$i], $arr[$j]), $arr[$k]);

        if ($found) {
          array_push($finalArr, (array($arr[$i], $arr[$j], $arr[$k])));
        }
      }
    }
  }
  // If there is triplets, return
  if (count($finalArr) != 0) {
    var_dump('found -->', $finalArr);
    return;
  }

  return 'Not Found';
}

findTriplets($array_number);
