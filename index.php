<?php
// Frist Question
$fruit = array('orange', 'banana', 'apple', 'watermelon', 'mango', 'plum');
usort($fruit, function ($a, $b) {
    return strlen($a) - strlen($b);
});
print_r($fruit);

// Second Question
$newFruitList1 = array('orange', 'banana', 'apple');
$newFruitList2 = array('watermelon', 'mango', 'plum');
$newFruitFullList = array_merge($newFruitList1, $newFruitList2);
print_r($newFruitFullList);

// Third Question
$fruit = array('orange', 'banana', 'apple', 'watermelon', 'mango', 'plum');
print_r($fruit);
$someFruit = array_splice($fruit, 1, 4);
print_r($someFruit);

//Froth Ouestion
$string = "Hello World";
echo strlen($string);

//Fifth Ouestion
function secondHighest(array $arr) {
    sort($arr);
    echo $arr[sizeof($arr) - 2];
}
secondHighest(array(4, 9, 5, 2, 8, 0, 3, 22));