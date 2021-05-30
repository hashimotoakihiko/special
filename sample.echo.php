<?php

//出力用

  // function showDiskArea($radius = 10) 
  // { $pi = 3.14; 
  // echo ($radius * $radius * $pi); } 
  // showDiskArea(); 
  // # 出力結果 
  // # 314 

  function getA() { 
    $a = 'a'; 
    # 返り値の指定 return $a; } 
    # これはecho 'a';と同様です 
    echo getA(); 
    // 次の書き方だと'a';とやっているのと同様なので、何も起きません
    getA();
  }
?>