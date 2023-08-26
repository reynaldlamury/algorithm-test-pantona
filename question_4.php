<?php
/*

  Buat fungsi untuk mengecek string memiliki kata yang simetris tanpa menggunakan
  fungsi php strrev, contohnya madam, tutut, jika kata yang dikirim simetris, return TRUE, jika tidak return FALSE

  Example 1
  Input :
  $str = madam
  Output : TRUE

  Example 2
  Input :
  $str = gozaru
  Output : FALSE

*/

/*
  code by Reynald Lamury
*/

$word_example = 'redivider';

// check is the word given match its reversed
function isSymmetrical($wordInput)
{
  $chars = str_split($wordInput);
  $chars_reverse_order = [];

  for ($i = count($chars) - 1; $i >= 0; $i--) {
    array_push($chars_reverse_order, $chars[$i]);
  }
  if (implode("", $chars_reverse_order) == $wordInput) {
    return true;
  }
  return false;
}

$output = isSymmetrical($word_example);
var_dump($output);
