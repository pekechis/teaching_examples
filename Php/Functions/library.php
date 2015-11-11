<?php

//Declaring the function array_average
//that calculates the average value of an indexed array of numbers
function array_average($v) {

  //Var for storing the accumulated sum
  $sum=0;

  //Traversing the indexed array
  for($i=0;$i<sizeof($v);$i++) {
    $sum+=$v[$i];
  }

  //Return the average value
  return $sum/sizeof($v);

}

?>
