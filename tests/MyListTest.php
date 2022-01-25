<?php

use PHPUnit\Framework\TestCase;
require "../src/trien-khai-methods-ArrayList/MyList.php";

class MyListTest extends TestCase
{
    function testAdd(){
        $myList = new MyList();
        $myList->add(2);
        $myList->add(4);
        $result = $myList->size();
        $expect = 2;
        $this->assertEquals($expect, $result);
    }

    function testInsert(){
        $myList = new MyList();
        $myList->add(6);
        $myList->add(9);
        $myList->insert(1, 69);
        $result = $myList->size();
        $expect = 3;
        $this->assertEquals($expect, $result);
    }
}