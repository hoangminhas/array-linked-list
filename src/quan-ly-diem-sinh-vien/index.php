<?php
include_once "linkedList_SV.php";

$list = new linkedList_SV();
$list->insertFirst("minh", 9);
$list->insertFirst('John', 10);
$list->insertFirst('Mason', 2);
$list->insertFirst('Wright', 5);
$list->insertFirst('Long', 0.5);
$list->insertLast('Roger', 9.5);
$list->insertLast('Ringo', 3.5);
$show = $list->showList();
echo "<pre>";
print_r($show);
$failedList = $list->totalStudentsFail();
echo "Fail list: " . "<br>";
echo "<pre>";
print_r($failedList);
echo "<br>";
$maxScore = $list->listStudentMaxScore();
echo "Max score list: " ."<br>";
echo "<pre>";
print_r($maxScore);
echo "<br>";

$search = $list->findByName(['minh', 'Long', 'Ringo']);
echo "<pre>";
print_r($search);

