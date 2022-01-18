<?php

include_once "ArrayList.php";

$arrayList = new ArrayList();
$arrayList->add(04);
$arrayList->add(99);
$arrayList->add(27);
print_r($arrayList);
var_dump($arrayList->get(1));
