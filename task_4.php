<?php 
//Task 4: Multidimensional Array

    function average_grade($studentGrades){

foreach ($studentGrades as $key=>$value){
echo $key." average grade is : ";
$avg_gpa=0;
    foreach($value as $sub_key=>$sub_value){
        $avg_gpa+=$sub_value;  
    }
    $avg_gpa=ROUND(($avg_gpa/3),2);
    echo "$avg_gpa\n";

}
    }
    $studentGrades =[
        'Bibhash'=>['Math'=>90, 'English'=>60, 'Science'=>80],
        'Khairul'=>['Math'=>89, 'English'=>70, 'Science'=>60],
        'Manik'=>['Math'=>70, 'English'=>60, 'Science'=>65]
        ];
    
average_grade($studentGrades);


?>