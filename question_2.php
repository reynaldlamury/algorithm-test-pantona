<?php
/*

  2. Buat fungsi untuk menghilangkan angka yang sama dari array , tanpa menggunakan
     fungsi array_unique

    Example

    Input :
    $array_number = [1,1,4,4,4,5,5,6,8,9,10,10,12,13,13,17]

    Output : 1,4,5,6,8,9,10,12,13,17

*/


/*
  code by Reynald Lamury
*/


$array_number = [1, 1, 4, 4, 4, 5, 5, 6, 8, 9, 10, 10, 12, 13, 13, 17];

// map each number and occurences 
$num_group = [];
foreach ($array_number as $num) {
  if ($num_group[$num] == NULL) {
    $num_group[$num] = 0;
  };

  $num_group[$num] += 1;
}

// get only the key (each number)
$output  = [];
foreach ($num_group as $key => $value) {
  array_push($output, $key);
}

print_r($output);
