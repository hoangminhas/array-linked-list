<?php

class MyList
{
    protected int $size;
    protected array $elements;

    /**
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        if (is_array($elements)) {
            $this->elements = $elements;

        } else {
            $this->elements = [];

        }
    }

    public function insert($index, $obj)
    {
        array_splice($this->elements, $index, 0, $obj);
    }

    public function add($obj)
    {
        $this->elements[] = $obj;
    }

    public function remove($index)
    {
        array_splice($this->elements, $index, 1);
    }

    public function get($index)
    {
        return $this->elements[$index];
    }

    public function reset(): array
    {
        return $this->elements = [];
    }

    public function addAll($arr)
    {
        for ($i = 0; $i<count($arr); $i++) {
            $this->elements[] = $arr[$i];
        }
    }

    public function indexOf($obj)
    {
        if (in_array($obj, $this->elements)) {
            return array_search($obj, $this->elements);
        } else {
            return "Doesn't exist";
        }
    }

    public function isEmpty(): string
    {
        if (count($this->elements) <= 0) {
            return 'true';
        } else {
            return "false";
        }
    }

    public function clear()
    {
        $lastItem = $this->elements[count($this->elements) - 1];
        array_pop($this->elements);
    }

    public function sort()
    {
        sort($this->elements);
    }
    
    public function size(): int
    {
        return count($this->elements);
    }

}