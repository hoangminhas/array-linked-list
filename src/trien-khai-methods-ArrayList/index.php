<?php
include_once "MyList.php";

$myList = new MyList();
$myList->add(2);
$myList->add(69);
echo $myList->size();
echo "<br>";
echo "<pre>";
$myList->insert(1, 96);
$myList->remove(2);
$myList->reset();
$myList->add(1);
$myList->addAll([3,5,7,9]);
echo "<br>";
echo $myList->indexOf(9);
echo "<br>";
echo $myList->isEmpty();
$myList->clear();
$myList->addAll([2,4,6,8]);
echo "<br>";
$myList->sort();
print_r($myList);
