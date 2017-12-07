<?php

  function numveces($v, $c) {

    $num=0;

    for ($i=0;$i<sizeof($v);$i++) {
      if ($v[$i]==$c) {
        $num=$num+1; //$num++
      }
    }

    return $num;
  }

?>
