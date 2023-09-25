<?php 
//Task 3: Array Sorting  

function grade_short($grd){
rsort($grd);

print_r($grd);

}
$grades=[85, 92, 78, 88, 95];

grade_short($grades);


?>