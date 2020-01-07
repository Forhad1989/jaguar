<?php
/*
Author: Shuvo
*/
define("Author", "Shuvo");
$Oneslash = addcslashes("Shuvo World!","W"); // add slash before cerecter
$dblslash = addslashes('What does "yolo" mean?');// add slash before & after word
$bin2hex  = bin2hex("Hello World!"); //Converts string to hexadecimal values
$chopWord = chop("Shuvo World!","World!");// Chop a Word
$SplitWithC = chunk_split("Shuvo World!",1,".");//Splits a string into a series of smaller parts
$str2arry = explode(" ","Hello world. It's a beautiful day.");// string to array Converstion

$MultiDarray = array(
          "\$str2arry" => $str2arry,
    array("\$Oneslash" => $Oneslash,
          "\$dblslash" => $dblslash,
          "\$bin2hex" => $bin2hex),
    array("\$chopWord" => $chopWord,
          "\$SplitWithC" => $SplitWithC),
    array(26, 18, 23),
            );

      foreach($MultiDarray as $value){

          foreach ($value as $key => $value1) {
            echo $key."=>";
            echo $value1."<br>";

          }
      }


echo Author;
?>
