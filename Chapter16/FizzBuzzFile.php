<?php

// ファイル名の把握
$file_name = __DIR__ . "/FizzBuzzFile.txt";

// ファイルに書き込む内容
$write_string = "";

for($max = 1;$max <= 100 ; $max++){
    if($max % 3 == 0 && $max % 5 == 0){
    $write_string = "Fizz Bizz\n";
    }
    elseif($max % 3 == 0){
      $write_string = "Fizz\n";
    }elseif($max % 5 == 0){
      $write_string = "Bizz\n";
    }else{
      $write_string = "{$max}\n";
    }

    // ファイルに書き込む
    file_put_contents($file_name, $write_string, FILE_APPEND | LOCK_EX);
};