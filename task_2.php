<?php 
//Task 2: Array Manipulation

function dellEven($arr){

$n=count($arr);
for($i=0;$i<$n;$i++){

    if ($arr[$i]%2==0){

        unset($arr[$i]);
    }  

}
print_r($arr);

}
$numbers=[1,2,3,4,5,6,7,8,9,10];


dellEven($numbers);


?>