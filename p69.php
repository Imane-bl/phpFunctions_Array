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

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  rsort($names);

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  $countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

  asort($countries); // sort A-Z

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  arsort($countries);//Z-A

  echo '<pre>';
  print_r($countries);
  echo '</pre>';


  /// key 
  $codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

  ksort($codes);
/* [1] => Syria sur le key not the value 
    [2] => Iraq
    [3] => Egypt
    [5] => Qatar */
  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  krsort($codes); //opposite 
  /* [5] => Qatar
    [3] => Egypt
    [2] => Iraq
    [1] => Syria */

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  $files = ["Photo1.png", "Photo20.png", "Photo3.png"];

  sort($files);

  echo '<pre>';
  print_r($files);
  echo '</pre>';

  natsort($files);/*
   [0] => Photo1.png
    [2] => Photo3.png
    [1] => Photo20.png
   */

  echo '<pre>';
  print_r($files);
  echo '</pre>';