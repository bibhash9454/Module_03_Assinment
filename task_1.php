<?php 
//Task 1: String Manipulation

$text ="The quick brown fox Jumps over the Lazy dog.";

function Replace_lowercase($text){
    $lowCase=strtolower($text);    //Convert the string to all lowercase.
    $replacestd=str_replace("brown" ,"red" , $lowCase);  //Replace "brown" with "red" in the string.
   echo $replacestd;   //Print the modified text.
}

Replace_lowercase($text);



?>