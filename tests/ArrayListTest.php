<?php

use PHPUnit\Framework\TestCase;
require "../src/simple-ArrayList/ArrayList.php";

class ArrayListTest extends TestCase
{
    function testAdd(){
        $arrList = new ArrayList();
        $arrList->add(1);
        $arrList->add(2);
        $arrList->add(3);
        $result = $arrList->get(0) + $arrList->get(1) + $arrList->get(2);
        $expect = 6;
        $this->assertEquals($expect, $result);
    }

    function testGetInIndex(){
        $arrList = new ArrayList();
        $arrList->add(69);
        $result = $arrList->get(0);
        $expect = 69;
        $this->assertEquals($expect, $result);
    }

    function testGetInvalid(){
        $arrList = new ArrayList();
        $result = $arrList->get(0);
        $expect = "Loading error";
        $this->assertEquals($expect, $result);
    }
}
