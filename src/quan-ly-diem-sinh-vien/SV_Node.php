<?php

class SV_Node
{
    private $name;
    private $score;
    public $next;

    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
        $this->next = null;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    public function readStudent(): array
    {
        $data = [
            "name" => $this->getName(),
            "score" => $this->getScore()
        ];
        return $data;
    }

}