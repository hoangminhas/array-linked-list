<?php
include_once "Node.php";

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

//    public function insertNode($data, int $position)
//    {
//        $dataList = $this->getTotalNodes();
//        $node = new Node($data);
//        $preNode = $dataList[$position-1];
//        $aftNode = $dataList[$position];
//        $preNode->next = $node;
//        $node->next = $aftNode;
//        $this->count++;
//    }

    public function addFirstNode($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if (is_null($this->lastNode))
        {
            $this->lastNode = $node;
        }

        $this->count++;
    }

    public function addLastNode($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->addFirstNode($data);
        }

    }

    public function getTotalNodes(): int
    {
        return $this->count;
    }

    public function readLinkedList()
    {
        $listData = [];
        $current = $this->firstNode;
        while (!is_null($current)) {
            $listData[] = $current->readNode();
            $current = $current->next;
        }
        return $listData;
    }
}