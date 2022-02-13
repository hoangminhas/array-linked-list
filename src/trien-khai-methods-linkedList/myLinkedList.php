<?php
include_once '../simple-linkedList/Node.php';

class myLinkedList
{
    public $firstNode;
    public $lastNode;
    public $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if (is_null($this->lastNode)){
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addLast($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function add(int $index, $obj)
    {
        if ($index == 0) {
            $this->addFirst($obj);
        } elseif ($index >= $this->count) {
            $this->addLast($obj);
        } else {
            $current = $this->firstNode;
            $beforeCurrent = null;
            $node = new Node($obj);
            for ($i = 0; $i< $index; $i++){
                $beforeCurrent = $current;
                $current = $current->next;
            }
            $beforeCurrent->next = $node;
            $node->next = $current;
            $this->count++;
        }
    }

    public function remove($index)
    {
        if ($index == 0) {
//            $current = $this->firstNode;
//            $afterCurrent = $current->next;

        } elseif ($index >= $this->count) {
            $this->lastNode->next = null;
        } else {
            $current = $this->firstNode;
            $beforeCurrent = null;
            $afterCurrent = $current->next;
            for ($i = 0; i< $index; $i++){
                $beforeCurrent = $current;
                $current = $current->next;
                $afterCurrent = $current->next;
            }
            $beforeCurrent->next = $afterCurrent;
            $this->count--;
        }
    }

}