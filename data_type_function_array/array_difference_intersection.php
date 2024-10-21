
<?php

  $numbers1 = array(4,5,7,8,9,6,4,1,3);
  $numbers2 = array(8,7,9,2,41,2,3,12,14);

  $names1 = array('s'=>'sakib','a'=>'ayon','r'=>'rakib','f'=>'foysal','sh'=>'shabbir');
  $names2 = array('h'=>'hridoy','b'=>'badol','a'=>'asad','s'=>'sakib','s'=>'shohan');

  $numbers_common = array_intersect($numbers1,$numbers2);

  print_r($numbers_common);

//  $names_common = array_intersect($names2,$names1);
  $names_common_asso = array_intersect_assoc($names1,$names2);

  print_r($names_common_asso);

//  $numbers_diff = array_diff($numbers1,$numbers2);
  $numbers_diff = array_diff($numbers2,$numbers1);

  print_r($numbers_diff);

//  $names_diff = array_diff($names1,$names2);
  $names_diff = array_diff($names2,$names1);

  print_r($names_diff);

  $names_diff_asso = array_diff_assoc($names2,$names1);

  print_r($names_diff_asso);