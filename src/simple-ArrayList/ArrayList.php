<?php

class ArrayList
{
    public array $arrList;

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->arrList = $arr;
        } else {
            $this->arrList = [];
        }
    }

    public function add($obj): void
    {
        array_push($this->arrList, $obj);
    }

    public function get(int $index)
    {
        if ($index >= 0 && $index < $this->size()) {
            return $this->arrList[$index];
        } else {
            return "Loading error";
        }
    }

    public function size()
    {
        return count($this->arrList);
    }
}