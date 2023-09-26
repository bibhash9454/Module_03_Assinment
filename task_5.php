<?php
function   generatePassword($length) {
$n=0;
$mod=0;
$upN=0;
if ($length%4==0){
    $n=($length/4);
    $upN=$n;
}
else {
    $mod=$length%4;
     $n=(int)($length/4);
    $upN=$n+$mod;
}
    $upCase=substr( str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ'),0,$upN);
    $lCase=substr( str_shuffle('abcdefghjkmnpqrstuvwxyz'),0,$n);
    $numbers=substr( str_shuffle('0123456789'),0,$n);
    $spstr=substr( str_shuffle('!@#$%^&*()_+'),0,$n);
    $password=str_shuffle($upCase.$lCase.$numbers.$spstr);
    echo "$length Digit random password is: " .$password.PHP_EOL;
    }

generatePassword(16);

?>