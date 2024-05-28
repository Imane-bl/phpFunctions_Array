<?php

  /*
    Array Functions

    - sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function

  */

  $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];

  sort($names);
  /*Array//   A-Z
(
    [0] => Ahmed
    [1] => Gamal
    [2] => Mahmoud
    [3] => Osama
    [4] => Sameh
    [5] => Sayed
)*/

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  rsort($names);//Z-A index 
/*Array
(
    [0] => Sayed
    [1] => Sameh
    [2] => Osama
    [3] => Mahmoud
    [4] => Gamal
    [5] => Ahmed
)*/
  echo '<pre>';
  print_r($names);
  echo '</pre>';

  // depend de value not key
  $countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

  asort($countries);// key egypt asort
  /*Array
(
    [E] => Egypt
    [I] => Iraq
    [Q] => Qatar
    [S] => Syria
)*/

  echo '<pre>';
  print_r($countries);
  echo '</pre>';



  arsort($countries);
/*Array
(
    [S] => Syria
    [Q] => Qatar
    [I] => Iraq
    [E] => Egypt
)* just acender tartib oppisite */
  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  $codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

  ksort($codes);
/*Array
(
    [1] => Syria
    [2] => Iraq
    [3] => Egypt
    [5] => Qatar
)*/
  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  krsort($codes);

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  $files = ["Photo1.png", "Photo20.png", "Photo3.png"];

  sort($files);

  echo '<pre>';
  print_r($files);
  echo '</pre>';

  natsort($files);
/*Array
(
    [0] => Photo1.png
    [2] => Photo3.png
    [1] => Photo20.png
)*/
  echo '<pre>';
  print_r($files);
  echo '</pre>';