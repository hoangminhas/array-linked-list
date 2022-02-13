<?php
include_once "SV_Node.php";

class linkedList_SV
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

    public function insertFirst($name, $score)
    {
        $obj = new SV_Node($name, $score);
        $obj->next = $this->firstNode;
        $this->firstNode = $obj;
        if (is_null($this->lastNode)){
            $this->lastNode = $obj;
        }
        $this->count++;
    }

    public function insertLast($name, $score)
    {
        if (!is_null($this->firstNode)) {
            $obj = new SV_Node($name, $score);
            $this->lastNode->next = $obj;
            $obj->next = null;
            $this->lastNode = $obj;
            $this->count++;
        } else {
            $this->insertFirst($name, $score);
        }
    }

    public function showList()
    {
        $listSV = [];
        $current = $this->firstNode;
        while (!is_null($current)){
            array_push($listSV, $current->readStudent());
            $current = $current->next;
        }
        return $listSV;
    }

    public function totalStudentsFail()
    {
        $failedList = [];
        $current = $this->firstNode;
        while (!is_null($current)) {
            if ($current->getScore() <= 5){
                array_push($failedList, $current->getScore());
            }
            $current = $current->next;
        }
        return $failedList;
    }

    public function listStudentMaxScore()
    {
        $maxScore = [];
        $current = $this->firstNode;
        while (!is_null($current)){
            if ($current->getScore() >= 8) {
                $maxScore[] = $current->getScore();
            }
            $current = $current->next;
        }
        return $maxScore;
    }

    public function findByName(array $name)
    {
        $current = $this->firstNode;
        $students = [];
        while (!is_null($current)) {
            for ($i = 0; $i < count($name); $i++) {
                if ($current->getName() == $name[$i]) {
                    $student = [
                        "name" => $current->getName(),
                        "score" => $current->getScore()
                    ];
                    $students[] = $student;
                }
            }
            $current = $current->next;
        }
        return $students;
    }
}