<?php
$number =0; 
for ($i=0; $i <100; $i++) { 
    $number +=$i;
}
echo $number."\n";
function isEven ($num){
    if ($num % 2==0){
        return true;
    }else{
        return false;
    }
}
$h = 13;
if (isEven($h)){
    echo "{$h}is an Even Number";
}else {
    echo "{$h}is a odd Number";
}