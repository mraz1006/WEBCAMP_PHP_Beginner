<?php

for($max = 1;$max <= 100 ; $max++){
    if($max % 3 == 0 && $max % 5 == 0){
  echo "Fizz Bizz\n";
    }
    elseif($max % 3 == 0){
      echo "Fizz\n";
    }elseif($max % 5 == 0){
      echo "Bizz\n";
    }else{
      echo "{$max}\n";
    }
};