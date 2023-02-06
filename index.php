<?php
$tuitionfee = 20000;
if ($tuitionfee >= 20000){
    echo "tuition fee 25%";
}elseif($tuitionfee>= 10000 && $tuitionfee < 20000){
    echo "tuition fee 20%";
}elseif($tuitionfee >=7000 && $tuitionfee < 10000){
    echo "tuition fee 15%";
}elseif( $tuitionfee <7000){
    echo "dollars invalid";
}