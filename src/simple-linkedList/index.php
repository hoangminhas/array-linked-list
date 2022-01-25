<?php
include_once "Node.php";
include_once "LinkList.php";

$linkedList = new LinkList();
$linkedList->addFirstNode(6);
$linkedList->addFirstNode(9);
$linkedList->addLastNode(27);
$linkedList->addLastNode(1);

echo $linkedList->getTotalNodes();
echo '<br>';
//$linkedList->insertNode(10, 1);
$dataList = $linkedList->readLinkedList();
echo "<pre>";
var_dump($dataList);
